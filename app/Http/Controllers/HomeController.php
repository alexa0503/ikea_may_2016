<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Mockery\CountValidator\Exception;
use EasyWeChat\Foundation\Application;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
        //$this->middleware('wechat.auth');
    }

    public function mobile()
    {
        //var_dump(\Request::getClientIps());
        return view('mobile/home');
    }
    public function share($id)
    {
        $info = \App\Info::find($id);
        if (null == $info) {
            return redirect('/');
        }
        return view('mobile/info',['info'=>$info]);
    }

    public function index()
    {
        return view('pc/home');
    }
    public function like($id)
    {
        $result = ['ret' => 0, 'msg' => ''];
        $info = \App\Info::find($id);
        if (null == $info) {
            return json_encode(['ret' => 1001, 'msg' => '此信息不存在~']);
        }

        DB::beginTransaction();
        try {
            /*
            $log = new \App\LikeLog();
            $log->info_id = $info->id;
            $log->created_time = Carbon::now();
            $log->created_ip = implode(',', \Request::getClientIps());
            $log->save();
            */

            $info->like_num += 1;
            $info->save();
            DB::commit();
            $result = ['ret' => 0, 'msg' => '', 'num' => $info->like_num];
        } catch (Exception $e) {
            $result['ret'] = 2001;
            $result['msg'] = $e->getMessage();
            DB::rollback();
        }

        return json_encode($result);
    }

    public function post(Request $request)
    {
        $result = array('ret' => 0, 'msg' => '');
        if (!preg_match('/^1\d{10}$/', $request->input('mobile'))) {
            $result['ret'] = 1001;
            $result['msg'] = '请输入正确的手机号~';
        } elseif (null == $request->input('name') || '' == $request->input('name')) {
            $result['ret'] = 1002;
            $result['msg'] = '姓名不能为空~';
        } else {
            $t = $request->input('t') ?: 1;
            $info = new \App\Info();
            if ($request->input('file_type') == 0) {
                if ($request->hasFile('photo') && $request->input('from') != 'mobile') {
                    $x = $request->input('x') ?: 0;
                    $y = $request->input('y') ?: 0;
                    $file_name = date('YmdHis').uniqid().'.'.$request->file('photo')->extension();
                    $request->file('photo')->move(public_path('storage'), $file_name);

                    #生成缩略图 279*279
                    $image = Image::make(public_path('storage/').$file_name);
                    if ($image->height() > $image->width()) {
                        $width = 279;
                        $height = null;
                    } else {
                        $width = null;
                        $height = 279;
                    }
                    $image->resize($width, $height, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $image->save(public_path('storage/thumb/').$file_name);
                    $image = Image::make(public_path('storage/thumb/').$file_name);
                    $left = floor(-1 * $x);
                    $top = floor(-1 * $y);
                    $image->crop(279, 279, $left, $top);
                    $image->save(public_path('storage/thumb/').$file_name);

                    #生成398*398的缩略图
                    $image = Image::make(public_path('storage/').$file_name);
                    if ($image->height() > $image->width()) {
                        $width = 398;
                        $height = null;
                    } else {
                        $width = null;
                        $height = 398;
                    }

                    $scale = 398 / 279;
                    $image->resize($width, $height, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $image->save(public_path('storage/animation/').$file_name);
                    $image = Image::make(public_path('storage/animation/').$file_name);
                    $left = floor(-1 * $x * $scale);
                    $top = floor(-1 * $y * $scale);
                    $image->crop(398, 398, $left, $top);
                    $image->save(public_path('storage/animation/').$file_name);
                } else {
                    $file_name = date('YmdHis').uniqid();
                    $canvas = $request->input('canvasData');
                    $canvas = str_replace('data:image/png;base64,', '', $canvas);
                    $canvas = str_replace(' ', '+', $canvas);
                    $canvas_data = base64_decode($canvas);
                    file_put_contents(public_path('storage/').$file_name.'.png', $canvas_data);
                    //file_put_contents(public_path('storage/animation/').$file_name, $canvas_data);
                    #生成缩略图
                    $image = Image::make(public_path('storage/').$file_name.'.png');
                    $file_name .= '.jpeg';
                    $image->save(public_path('storage/animation/').$file_name);
                    $image->resize(279, 279, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $image->save(public_path('storage/thumb/').$file_name);
                }

                \Artisan::call('animation', [
                    'file' => $file_name,
                    'type' => $t,
                ]);
                $array_file = explode('.', $file_name);
                $info->file = $file_name;
                $info->status = 1;
                $result['url'] = $info->animation = url('storage/animation/'.$array_file[0].'.gif');
                $info->thumb = asset('storage/thumb/'.$file_name);
            } else {
                $info->file = $request->input('vid');
                $info->status = 0;
                $info->thumb = '';
                $info->animation = '';
            }

            $info->name = $request->input('name');
            $info->mobile = $request->input('mobile');
            $info->province = $request->input('province');
            $info->city = $request->input('city');
            $info->address = $request->input('address');
            $info->file_type = $request->input('file_type');
            $info->created_time = Carbon::now();
            $info->created_ip = implode(',', $request->getClientIps());
            $info->save();
            $result['wxUrl'] = url('share/'.$info->id);
            $result['id'] = $info->id;
            if( $info->status == 1){
                $result['qrUrl'] = url('qrcodes/'.$info->id.'.png');
                $result['shareImg'] = $info->animation;
            }else{
                $result['qrurl'] = asset('pc/images/videoshare.jpg');
                $result['shareImg'] = 'http://community.ikea.cn/family/2016activity_awgc/public/pc/images/pcShare.png';
            }
            $result['shareUrl'] = url('web/').'?id='.$info->id;

            \QrCode::format('png')->size(600)->generate('http://community.ikea.cn/family/2016activity_awgc/public/share/'.$info->id,public_path('qrcodes/'.$info->id.'.png'));
        }

        return json_encode($result);
    }
    #微信分享
    public function wxShare(Request $request)
    {
        $url = urldecode($request->get('url'));
        $options = [
            'app_id' => env('WECHAT_APPID'),
            'secret' => env('WECHAT_SECRET'),
            'token' => 'ikea',
        ];
        $wx = new Application($options);
        $js = $wx->js;
        $js->setUrl($url);
        $config = json_decode($js->config(array('onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ'), false), true);

        $share = [
            'title' => env('WECHAT_SHARE_TITLE'),
            'desc' => env('WECHAT_SHARE_DESC'),
            'link' => env('APP_URL'),
            'imgUrl' => env('APP_URL').env('WECHAT_SHARE_IMG'),
        ];
        return json_encode(array_merge($share, $config));
    }
}
