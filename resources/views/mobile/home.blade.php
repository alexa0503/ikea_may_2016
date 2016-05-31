@extends('layouts.mobile')
@section('content')

<div class="wrapper">
	<div class="line1">
    	<div class="innerDiv">
        	<img src="{{asset('mobile/images/logo.png')}}" class="abs logo">
            <a href="javascript:void(0);" class="abs btn1"><img src="{{asset('mobile/images/btn1.png')}}"></a>
        </div>
    </div>
    <!--line1 end-->

    <div class="line2">
    	<div class="innerDiv">
        	<div class="sBlock1">
            	<div class="swiper-container1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="javascript:void(0);"><img src="{{asset('mobile/images/l11.png')}}"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="javascript:void(0);"><img src="{{asset('mobile/images/l12.png')}}"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="javascript:void(0);"><img src="{{asset('mobile/images/l13.png')}}"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="javascript:void(0);"><img src="{{asset('mobile/images/l14.png')}}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);" class="abs btnLeft1"><img src="{{asset('mobile/images/btnLeft.png')}}"></a>
            <a href="javascript:void(0);" class="abs btnRight1"><img src="{{asset('mobile/images/btnRight.png')}}"></a>
        </div>
    </div>
    <!--line2 end-->

    <div class="line3">
    	<div class="innerDiv">
        	<div class="abs fBlock">
                    <div class="innerDiv">
                    <div class="f1"></div>
                    <div class="f2" style="display:none;"></div>
                    <div class="f5" style="display:none;"></div>
                    <div class="f3" style="display:none;">
                        <div class="innerDiv">
                            <img src="" class="abs f3EndGif" id="f3EndGif">
                            <div class="abs onBg stMask1"></div>
                            <img src="" class="abs saveImg" id="saveImg">
                            <div class="shareBtns">
                                <a href="javascript:void(0);" class="abs sb1" onClick="showShareWx();"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" class="abs sb2"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" class="abs sb3"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" class="abs sb4"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                            </div>
                            <a href="javascript:void(0);" class="abs paBtn" onClick="playAgain();"><img src="{{asset('mobile/images/space.gif')}}" width="238" height="76"></a>
                            <a href="javascript:void(0);" class="abs moreLink"><img src="{{asset('mobile/images/space.gif')}}" width="120" height="28"></a>
                        </div>
                    </div>
                    <div class="f4" style="display:none;">
                    	<div class="innerDiv">
                        	<div class="shareBtns">
                                <a href="javascript:void(0);" class="abs sb1" onClick="showShareWx();"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" class="abs sb2"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" class="abs sb3"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" class="abs sb4"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                            </div>
                            <a href="javascript:void(0);" class="abs paBtn" onClick="playAgain();"><img src="{{asset('mobile/images/space.gif')}}" width="238" height="76"></a>
                            <a href="javascript:void(0);" class="abs moreLink"><img src="{{asset('mobile/images/space.gif')}}" width="120" height="28"></a>
                        </div>
                    </div>
                    <div class="fTop">
                        <form action="{{url('post')}}" method="post" enctype="multipart/form-data" id="form">
                        <div class="innerDiv">
                        	<canvas id="guoduCanvas" style="display:none;"></canvas>
                            <canvas id="drawCanvas" width="398" height="398" style="display:none;"></canvas>
                            <div class="uploadImgBlock">
                                <div class="innerDiv">
                                    <img src="" class="abs upBtnImg upLoadImg" id="upBtnImg">
                                    <img src="" class="abs upLoadImg" id="preview" />
                                    <img src="" class="abs upLoadImg" id="localImag" />
                                </div>
                            </div>
                            <div class="stMask stMask1" style="display:none;"></div>
                            <img src="{{asset('mobile/images/fImg1.png')}}" class="abs fImg1" style="display:none;">
                            <div class="mMask" id="mMask"></div>

                            <div class="fTxt1">*宝&nbsp;贝&nbsp;的&nbsp;姓&nbsp;名</div>
                            <div class="fTxt2">*您的联系电话</div>
                            <div class="fTxt3">*您的联系地址</div>

                            <div class="abs fNote">温馨提示：请务必填写真实信息，以免错失大奖！</div>
                            <div class="abs fLice"><label><input type="checkbox" name="fLice" checked> 我已阅读并同意本次<a href="javascript:void(0);">条件与条款</a></label></div>

                            <div class="fTemplete" style="display:none;">
                                <a href="javascript:void(0);" class="abs ft ft1 fton"><img src="{{asset('mobile/images/space.gif')}}"></a>
                                <a href="javascript:void(0);" class="abs ft ft2"><img src="{{asset('mobile/images/space.gif')}}"></a>
                                <a href="javascript:void(0);" class="abs ft ft3"><img src="{{asset('mobile/images/space.gif')}}"></a>
                                <a href="javascript:void(0);" class="abs ft ft4"><img src="{{asset('mobile/images/space.gif')}}"></a>
                            </div>

                            <input type="file" class="abs uploadBtn" id="uploadBtn">
                            <a href="javascript:void(0);" class="abs youkuBtn" onClick="uploadVideo();"><img src="{{asset('mobile/images/space.gif')}}" width="220" height="76"></a>

                            <input type="text" name="name" class="fInput fInput1" maxlength="20">
                            <input type="text" name="mobile" class="fInput fInput2" maxlength="20">
                            <input type="text" name="province" class="fInput fInput3" maxlength="10" placeholder="省">
                            <input type="text" name="city" class="fInput fInput4" maxlength="10" placeholder="市">
                            <input type="text" name="address" class="fInput fInput5" maxlength="40" placeholder="详细地址">

                            {!! csrf_field() !!}
                            <input type="hidden" name="t" id="t" />
                            <input type="hidden" id="vid" name="vid" />
                            <input type="hidden" id="vt" name="vt" />
                            <input type="hidden" id="file_type" name="file_type" value="0" />
                            <input type="hidden" name="from" value="mobile" />
                            <input type="hidden" name="canvasData" id="canvasData" value="" />
                            <a href="javascript:void(0);" class="abs vPlayAgain" onClick="playAgain();" style="display:none;"><img src="{{asset('mobile/images/space.gif')}}" width="220" height="76"></a>

                            <a href="javascript:void(0);" class="abs submitBtn" onClick="submitL2();"><img src="{{asset('mobile/images/space.gif')}}" width="220" height="76"></a>
                        </div>
                        </form>
                    </div>
                    <div class="fLoading" style="display:none;">
                        <div class="innerDiv">
                            <div class="fLoadImg"></div>
                        </div>
                    </div>
                    <div class="fUploadVideo" id="fUploadVideo" style="display:none;">
                        <div class="innerDiv">
                            <iframe id="201661youku" src="http://community.ikea.cn/family/2016activity_awgc/public/youku" style="width:640px; height:845px; border:0; overflow: hidden; position:absolute; left:0; top:242px; background:#FFF;" name="201661youku" width="640" height="440" scrolling="no" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--line3 end-->

    <div class="line4">
    	<div class="innerDiv">
        	<div class="abs sBlock2">
                <div class="swiper-container2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="##" target="_blank"><img src="{{asset('mobile/images/s1.png')}}"></a>
                                <a href="##" class="sLink sLink1">
                                    <span class="sName">IKEA 365 瓦福<br>肉凿，黑色</span><br>
                                    <span class="sPrice">¥&nbsp;49.00</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="##" target="_blank"><img src="{{asset('mobile/images/s2.png')}}"></a>
                                <a href="##" class="sLink sLink2">
                                    <span class="sName">RÅSKOG 拉斯克<br>手推车, 天蓝色</span><br>
                                    <span class="sPrice">¥&nbsp;299.00</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="##" target="_blank"><img src="{{asset('mobile/images/s3.png')}}"></a>
                                <a href="##" class="sLink sLink3">
                                    <span class="sName">IKEA PS 2002<br>洒水壶, 灰色</span><br>
                                    <span class="sPrice">¥&nbsp;9.90</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);" class="abs btnLeft2"><img src="{{asset('mobile/images/btnLeft.png')}}"></a>
            <a href="javascript:void(0);" class="abs btnRight2"><img src="{{asset('mobile/images/btnRight.png')}}"></a>
        </div>
    </div>
    <!--line4 end-->

    <div class="line5">
    	<div class="innerDiv">
        	<a href="javascript:void(0);" class="abs btn2"><img src="{{asset('mobile/images/btn2.png')}}"></a>
            <a href="javascript:void(0);" class="abs btn3"><img src="{{asset('mobile/images/btn3.png')}}"></a>
            <input type="text" class="searchTxt" placeholder="输入你家宝贝名字／电话搜索">
            <a href="javascript:void(0);" class="abs searchBtn"><img src="{{asset('mobile/images/icon1.png')}}"></a>

            <div class="abs pBlock">
            	<div class="pInitOuter" id="infos">
                </div>

                <div class="clear"></div>
                <div class="l4BtnLine">
                	<a href="javascript:void(0);" class="btn5" style="display:none;"><img src="{{asset('mobile/images/btn5.png')}}"></a>
                	<br><br>
                    <a href="javascript:void(0);"><img src="{{asset('mobile/images/btn4.png')}}"></a>
                </div>
            </div>
        </div>
    </div>
    <!--line5 end-->
</div>

<div class="popBg" style="display:none;" onClick="closeShareWx();"></div>
<img src="{{asset('mobile/images/shareNote.png')}}" style="display:none;" class="shareNote" onClick="closeShareWx();">
@endsection
@section('scripts')
<script src="{{asset('mobile/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('mobile/js/swiper.min.js')}}"></script>
<script src="{{asset('mobile/js/exif.js')}}"></script>
<script src="{{asset('mobile/js/hammer.js')}}"></script>
<script src="{{asset('pc/js/jquery.form.js')}}"></script>
<script src="{{asset('mobile/js/common.js')}}"></script>

<script>

var isLock = false;
var current_page = 1;
var next_page_url = null;
function getInfos(url,params, refresh){
    if (isLock) {
        return;
    }
    isLock = true;
    $.getJSON(url,params,function(json){
        if( true == refresh){
            var html = '';
        }
        else{
            var html = $('#infos').html();
        }

        for (var i = 0; i < json.data.length; i++) {
            html += '<div class="pInit"><div class="innerDiv"><div class="pTopImg"><a href="javascript:void(0);" cType="img"><img src="'+json.data[i].thumb+'"></a></div><div class="pBottomTxt"><a href="'+'{{url("like")}}/'+json.data[i].id+'" class="pBottomTXtBtn2" onClick="return pVote($(this));"><img src="{{asset("mobile/images/icon2.png")}}"> <span>'+json.data[i].like_num+'</span></a><a href="javascript:void(0);" class="pBottomTXtBtn1" cType="img"><img src="mobile/images/icon3.png"></a></div><div class="pBottomTxtName">'+json.data[i].name+'</div></div></div>';
        }
        if( json.data.length == 0 ){
            html += '<div style="text-align:center"><h3>抱歉，没有您更多的信息~</h3></div>';
        }
        current_page = json.current_page;
        next_page_url = json.next_page_url;
        $('#infos').html(html);
        isLock = false;
    })
}
$(document).ready(function(){
    l2Swiper();
    l3Swiper();
    resizeImg();

    var url = '{{url("infos")}}';
    var params = {};
    getInfos(url,{});

    $('.btn3').click(function(){
        params = {order:'time'};
        getInfos(url, params,true);
    });
    $('.btn2').click(function(){
        params = {order:'like'};
        getInfos(url, params,true);
    });
    $('.searchBtn').click(function(){
        var keywords = $('.searchTxt').val();
        params = {keywords:keywords};
        getInfos(url, params);
    });

    $(window).scroll(function() {
        if (null != next_page_url && $(window).scrollTop() == $(document).height() - $(window).height()) {
            getInfos(next_page_url,params);
        }
    });
})
</script>
@endsection
