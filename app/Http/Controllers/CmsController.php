<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
//use App\Http\Controllers\Controller;

class CmsController extends Controller
{
    private $lottery_configs =  array(
        ['2016-06-20','2016-06-26'],
        ['2016-06-27','2016-07-03'],
        ['2016-07-04','2016-07-10'],
        ['2016-07-11','2016-07-17'],
        ['2016-07-18','2016-07-24'],
        ['2016-07-25','2016-07-31'],
        ['2016-08-01','2016-08-07'],
        ['2016-08-08','2016-08-14'],
        ['2016-08-15','2016-08-21'],
        ['2016-08-22','2016-08-28'],
        ['2016-08-29','2016-09-04'],
    );
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$count = \App\WechatUser::count();
        return view('cms/dashboard',['configs'=>$this->lottery_configs]);
    }

    /**
     * 微信授权用户
     * @return mixed
     */
    public function wechat($id = null)
    {
        if( null == $id)
            $wechat_users = DB::table('wechat_users')->paginate(20);
        else
            $wechat_users = DB::table('wechat_users')->where('id', $id)->paginate(20);
        return view('cms/wechat_user',['wechat_users' => $wechat_users]);
    }

    public function infoDelete($id)
    {
        //$info = \App\Info::find($id);
        \App\Info::destroy($id);
        return json_encode(['ret'=>0,'msg'=>'']);
    }

    public function infoStatusUpdate($id)
    {
        $info = \App\Info::find($id);
        $info->status = $info->status == 0 ? 1 : 0;
        $info->save();
        //\App\Info::destroy($id);
        return json_encode(['ret'=>0,'msg'=>'','status'=>$info->status]);
    }


    /**
     * 信息
     * @return mixed
     */
    public function infos(Request $request, $type = 0)
    {
        $model = \App\Info::where('file_type',$type);
        if( $request->get('id')){
            $model->where('id',$request->get('id'));
        }
        if( $request->get('mobile')){
            $model->where('mobile',$request->get('mobile'));
        }
        $infos = $model->paginate(20);
        return view('cms/infos',['infos' => $infos]);
    }
    public function infosExport()
    {
        $filename = 'info_'.date('YmdHis');
        $collection = \App\Info::where('has_win',1)->get();
        $data = $collection->map(function($item){
            return [
                $item->id,
                json_decode($item->user->nick_name),
                $item->user->open_id,
                $item->name,
                $item->mobile,
                $item->address,
                $item->has_win == 1 ? '已中' : '未中',
                $item->created_time,
                $item->created_ip,
            ];
        });
        Excel::create($filename, function($excel) use($data) {
            $excel->setTitle('信息');
            // Chain the setters
            $excel->setCreator('Alexa');
            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');
            $excel->sheet('Sheet', function($sheet) use($data) {
                $sheet->row(1, array('ID','微信昵称','微信openid','姓名','手机','地址','是否中奖','创建时间','创建IP'));
                $sheet->fromArray($data, null, 'A2', false, false);
            });
        })->download('xlsx');
    }
    /**
     * 账户管理
     */
    public function users()
    {
        $users = DB::table('users')->paginate(20);
        return view('cms/users', ['users' => $users]);
    }
    /**
     *账户管理
     */
    public function account()
    {
        return view('cms/account');
    }
    public function accountPost(Requests\AccountFormRequest $request)
    {
        //var_dump($request->user()->id);
        $user = \App\User::find($request->user()->id);
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect('cms/logout');
        //var_dump($request->input('password'));
    }
    public function userLogs()
    {
        return;
        $logs = \App\UserLog::limit(30)->offset(0)->orderBy('create_time', 'DESC')->get();
        return view('cms/userLogs',['logs' => $logs]);
    }
    public function wechatExport()
    {
        $filename = 'wechat'.date('YmdHis');
        $collection = \App\WechatUser::all();
        $data = $collection->map(function($item){
            return [
                $item->id,
                $item->open_id,
                json_decode($item->nick_name),
                $item->head_img,
                $item->gender,
                $item->country,
                $item->province,
                $item->city,
                $item->create_time,
                $item->create_ip,
            ];
        });
        Excel::create($filename, function($excel) use($data) {
            $excel->setTitle('微信用户');
            // Chain the setters
            $excel->setCreator('Alexa');
            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');
            $excel->sheet('Sheet', function($sheet) use($data) {
                $sheet->row(1, array('ID','openid','昵称','头像','性别','国家','省份','城市','授权时间','授权IP'));
                $sheet->fromArray($data, null, 'A2', false, false);
            });
        })->download('xlsx');
    }

    public function createLottery(Request $request, $period)
    {
        $lottery_configs = $this->lottery_configs;
        if( null == $lottery_configs[$period]){
            return ['ret'=>1001, 'msg'=>'没有需要的数据喔'];
        }
        $timestamp = time();
        if( strtotime($lottery_configs[$period][1].' 23:59:59') > $timestamp){
            return ['ret'=>1002, 'msg'=>'还没有到时间喔~'];
        }
        $model = DB::table('lotteries')
            ->join('infos', 'infos.id', '=', 'lotteries.id')
            ->where('period', $period);
        if( $model->count() > 0){
            $lotteries = $model->get();
            return ['ret'=>0,'msg'=>'','data'=>$lotteries];
        }
        else{
            $mobiles = [];
            $collection = \App\Lottery::all();
            if( null != $collection){
                $mobiles = $collection->map(function ($item){
                    return $item->mobile;
                });
            }
            $collection = \App\Info::whereNotIn('mobile', $mobiles)
                ->where('created_time', '>=', $lottery_configs[$period][0])
                ->where('created_time', '<', $lottery_configs[$period][1].' 23:59:59')
                ->groupBy('mobile')
                ->get();
            if( count($collection) > 15){
                $lotteries = $collection->random(15);
                foreach($lotteries as $lottery){
                    DB::table('lotteries')->insert(
                        ['id' => $lottery->id, 'mobile' => $lottery->mobile, 'period'=>$period]);
                }
                return ['ret'=>0,'msg'=>'','data'=>$lotteries];
            }
            else{
                return ['ret'=>1002, 'msg'=>'还没有到时间喔~'];
            }
        }
    }
}
