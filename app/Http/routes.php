<?php

/*
Route::group(['middleware' => ['web','wechat.oauth']], function () {
    Route::get('/user', function () {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料
        dd($user);
    });
    //Route::get('/', 'HomeController@index');
});
Route::any('/wechat', 'WechatController@serve');
*/
Route::get('/', 'HomeController@mobile');
Route::get('/share', 'HomeController@share');
Route::get('/web', 'HomeController@index');
Route::get('/youku', function(){
    return view('pc/youku');
});
Route::get('/like/{id}', 'HomeController@like');
Route::get('/share/{id}', 'HomeController@share');
Route::get('/test', function(){
    for($i=0; $i< 100; $i++){
        \QrCode::format('png')->size(600)->generate('http://community.ikea.cn/family/2016activity_awgc/public/share/'.$i,public_path('qrcodes/'.$i.'.png'));
    }

    return '';
});

Route::post('/post', 'HomeController@post');
Route::get('/infos', function(){
    $info = App\Info::where('status','1');
    if( null != Request::get('keywords') ){
        $info->where(function($query){
            $query->where('name','like','%'.Request::get('keywords').'%')->orWhere('mobile', Request::get('keywords'));
        });
    }
    if( Request::get('order') == 'like' )
        $info->orderby('like_num','desc');
    else
        $info->orderby('created_time','desc');

    $result = $info->paginate(8);
    //sleep(5);
    return $result;
});
Route::get('wx/share', 'HomeController@wxShare');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::auth();
//登录登出
Route::get('cms/login', 'Auth\AuthController@getLogin');
Route::post('cms/login', 'Auth\AuthController@postLogin');
Route::get('cms/logout', 'Auth\AuthController@logout');
//屏蔽注册路由
Route::any('/register', function(){

});
//Route::get('/register', 'Auth\AuthController@getRegister');
//Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/home', 'HomeController@index');
Route::get('/cms', 'CmsController@index');
Route::get('/cms/users', 'CmsController@users');
Route::get('/cms/account', 'CmsController@account');
Route::post('/cms/account', 'CmsController@accountPost');
Route::get('/cms/wechat', 'CmsController@wechat');
Route::get('/cms/wechat/export', 'CmsController@wechatExport');
Route::get('/cms/wechat/{id}', 'CmsController@wechat');
Route::get('/cms/user/logs', 'CmsController@userLogs');
Route::get('/cms/infos', 'CmsController@infos');
Route::get('/cms/infos/{type}', 'CmsController@infos');
Route::get('/cms/info/delete/{id}', 'CmsController@infoDelete');
Route::get('cms/info/update/status/{id}', 'CmsController@infoStatusUpdate');
Route::get('/cms/infos/export', 'CmsController@infosExport');
Route::get('cms/create/lottery/{period}', 'CmsController@createLottery');
//wechat auth
Route::any('/wechat/auth', 'WechatController@auth');
Route::any('/wechat/callback', 'WechatController@callback');
//初始化后台帐号
Route::get('cms/account/install', function(){
    if( 0 == \App\User::count()){
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin123');
        $user->save();
    }
    return redirect('/cms');
});
