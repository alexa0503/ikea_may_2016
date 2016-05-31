@extends('layouts.pc')
@section('content')
	<div class="innerDiv">
    	<div class="line1">
    	<div class="innerDiv">
        	<a href="javascript:void(0);" class="abs btn1"><img src="{{asset('pc/images/btn1.png')}}"></a>
            <div class="abs vBlock">
            	<div class="vInit">
                	<div class="innerDiv">
                    	<a href="javascript:void(0);"><img src="{{asset('pc/images/vBtn1.jpg')}}" class="moImg"></a>
                        <div class="vGif" style="display:none;"><img src="{{asset('pc/images/v1.gif')}}" /></div>
                    </div>
                </div>
                <div class="vInit">
                	<div class="innerDiv">
                    	<a href="javascript:void(0);"><img src="{{asset('pc/images/vBtn2.jpg')}}" class="moImg"></a>
                        <div class="vGif" style="display:none;"><img src="{{asset('pc/images/v2.gif')}}" /></div>
                    </div>
                </div>
                <div class="vInit">
                	<div class="innerDiv">
                    	<a href="javascript:void(0);"><img src="{{asset('pc/images/vBtn3.jpg')}}" class="moImg"></a>
                        <video id="v3" src="{{asset('pc/images/v3.mp4?v=1')}}" preload="auto" style="display:none;"></video>
                    </div>
                </div>
                <div class="vInit nomr">
                	<div class="innerDiv">
                    	<a href="javascript:void(0);"><img src="{{asset('pc/images/vBtn4.jpg')}}" class="moImg"></a>
                        <div class="vGif" style="display:none;"><img src="{{asset('pc/images/v4.gif')}}" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--line1 end-->

        <div class="line2">
            <div class="innerDiv">
                <div class="abs fBlock">
                    <div class="innerDiv">
                        <div class="f1"></div>
                        <div class="f2" style="display:none;"></div>
                        <div class="f5" style="display:none;"></div>
                        <div class="f3" style="display:none;">
                            <div class="innerDiv">
                                <img src="" class="abs f3EndGif">
                                <div class="shareBtns">
                                    <a href="javascript:void(0);" class="abs sb1" onClick="showQc();"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" class="abs sb2"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" class="abs sb3"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" class="abs sb4"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                </div>
                                <a href="javascript:void(0);" class="abs paBtn" onClick="playAgain();">
                                    <img src="{{asset('pc/images/space.gif')}}" width="164" height="56"></a>
                                <a href="javascript:void(0);" class="abs moreLink"><img src="{{asset('pc/images/space.gif')}}" width="80" height="18"></a>
                            </div>
                        </div>
                        <div class="f4" style="display:none;">
                        	<div class="innerDiv">
                                <img src="" class="abs f3EndGif">
                                <div class="shareBtns">
                                    <a href="javascript:void(0);" class="abs sb1" onClick="showQc();"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" class="abs sb2"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" class="abs sb3"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" class="abs sb4"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                </div>
                                <a href="javascript:void(0);" class="abs paBtn" onClick="playAgain();">
                                    <img src="{{asset('pc/images/space.gif')}}" width="164" height="56"></a>
                                <a href="javascript:void(0);" class="abs moreLink"><img src="{{asset('pc/images/space.gif')}}" width="80" height="18"></a>
                            </div>
                        </div>
                        <div class="fTop">
                            <form action="{{url('post')}}" method="post" enctype="multipart/form-data" id="form">
                            <div class="innerDiv">
                                <div class="uploadImgBlock">
                                    <div class="innerDiv">
                                        <img src="" class="abs upBtnImg upLoadImg" id="upBtnImg">
                                        <img src="" class="abs upLoadImg" id="preview" />
                                        <img src="" class="abs upLoadImg" id="localImag" />
                                    </div>
                                </div>
                                <div class="stMask stMask1" style="display:none;"></div>
                                <img src="{{asset('pc/images/fImg1.png')}}" class="abs fImg1" style="display:none;">
                                <div class="mMask" id="mMask"></div>

                                <div class="fTxt1">*宝&nbsp;贝&nbsp;的&nbsp;姓&nbsp;名</div>
                                <div class="fTxt2">*您的联系电话</div>
                                <div class="fTxt3">*您的联系地址</div>

                                <div class="abs fNote">温馨提示：请务必填写真实信息，以免错失大奖！</div>
                                <div class="abs fLice"><label><input type="checkbox" name="fLice" checked> 我已阅读并同意本次<a href="javascript:void(0);">条件与条款</a></label></div>

                                <div class="fTemplete" style="display:none;">
                                    <a href="javascript:void(0);" class="abs ft ft1 fton"><img src="{{asset('pc/images/space.gif')}}"></a>
                                    <a href="javascript:void(0);" class="abs ft ft2"><img src="{{asset('pc/images/space.gif')}}"></a>
                                    <a href="javascript:void(0);" class="abs ft ft3"><img src="{{asset('pc/images/space.gif')}}"></a>
                                    <a href="javascript:void(0);" class="abs ft ft4"><img src="{{asset('pc/images/space.gif')}}"></a>
                                </div>

                                <input type="file" class="abs uploadBtn" name="photo" id="uploadBtn" onChange="setImagePreview();">
                                <a href="javascript:void(0);" class="abs youkuBtn" onClick="uploadVideo();"><img src="{{asset('pc/images/space.gif')}}" width="174" height="62"></a>

                                <input type="text" name="name" class="fInput fInput1" maxlength="20">
                                <input type="text" name="mobile" class="fInput fInput2" maxlength="20">
                                <input type="text" name="province" class="fInput fInput3" maxlength="10" placeholder="省">
                                <input type="text" name="city" class="fInput fInput4" maxlength="10" placeholder="市">
                                <input type="text" name="address" class="fInput fInput5" maxlength="40" placeholder="详细地址">
                                <input type="hidden" name="x" />
                                <input type="hidden" name="y" />
                                <input type="hidden" name="t" />
                                <input type="hidden" id="vid" name="vid" />
                                <input type="hidden" id="vt" name="vt" />
                                <input type="hidden" id="file_type" name="file_type" value="0" />
                                {!! csrf_field() !!}
                                <a href="javascript:void(0);" class="abs vPlayAgain" onClick="playAgain();" style="display:none;"><img src="{{asset('pc/images/space.gif')}}" width="164" height="64"></a>
                                <a href="javascript:void(0);" class="abs submitBtn" onClick="submitL2();"><img src="{{asset('pc/images/space.gif')}}" width="164" height="64"></a>
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
                            	<iframe id="201661youku" src="http://community.ikea.cn/family/2016activity_awgc/public/youku" style="width:740px; height:470px; border:0; overflow: hidden; position:absolute; left:50%; top:50%; margin:-175px 0 0 -333px; background:#FFF;" name="201661youku" width="740" height="470px" scrolling="no" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qcBlock">
                    <div class="innerDiv">
                        <img src="{{asset('pc/images/testQc.png')}}" class="abs qcImg">
                        <div class="abs openQc" style="width:0;">
                            <div class="innerDiv">
                                <a href="javascript:void(0);" class="abs qcCloseBtn" onClick="closeQc();"><img src="{{asset('pc/images/space.gif')}}" width="32" height="28"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--line2 end-->

        <div class="line3">
            <div class="innerDiv">
                <div class="abs sBlock">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="innerDiv">
                                    <a href="http://www.ikea.com/cn/zh/catalog/products/80163408/" target="_top"><img src="{{asset('pc/images/s1.gif')}}"></a>
                                    <a href="http://www.ikea.com/cn/zh/catalog/products/80163408/" target="_top" class="sLink sLink1">
                                        <span class="sName">IKEA 365 瓦福<br>肉凿，黑色</span><br>
                                        <span class="sPrice">¥&nbsp;49.00</span>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="innerDiv">
                                    <a href="http://www.ikea.com/cn/zh/catalog/products/10216537/" target="_top"><img src="{{asset('pc/images/s2.gif')}}"></a>
                                    <a href="http://www.ikea.com/cn/zh/catalog/products/10216537/" target="_top" class="sLink sLink2">
                                        <span class="sName">RÅSKOG 拉斯克<br>手推车, 天蓝色</span><br>
                                        <span class="sPrice">¥&nbsp;299.00</span>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="innerDiv">
                                    <a href="http://www.ikea.com/cn/zh/catalog/products/40308267/" target="_top"><img src="{{asset('pc/images/s3.gif')}}"></a>
                                    <a href="http://www.ikea.com/cn/zh/catalog/products/40308267/" target="_top" class="sLink sLink3">
                                        <span class="sName">IKEA PS 2002<br>洒水壶, 灰色</span><br>
                                        <span class="sPrice">¥&nbsp;9.90</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0);" class="abs btnLeft"><img src="{{asset('pc/images/btnLeft.png')}}"></a>
                <a href="javascript:void(0);" class="abs btnRight"><img src="{{asset('pc/images/btnRight.png')}}"></a>
            </div>
        </div>
        <!--line3 end-->

        <div class="line4">
            <div class="innerDiv">
                <a href="javascript:void(0);" class="abs btn2"><img src="{{asset('pc/images/btn2.png')}}"></a>
                <a href="javascript:void(0);" class="abs btn3"><img src="{{asset('pc/images/btn3.png')}}"></a>
                <input type="text" class="searchTxt" placeholder="输入你家宝贝名字／电话搜索">
                <a href="javascript:void(0);" class="abs searchBtn"><img src="{{asset('pc/images/icon3.png')}}"></a>

                <div class="abs pBlock" id="infos"></div>
            </div>
        </div>
        <!--line4 end-->

        <div class="abs bottomBg" style="display:none;">
        	<div class="innerDiv">
            	<div class="abs videoBlock" style="display:none;"></div>
                <div class="abs imgBlock" style="display:none;">
                	<img src="" class="bottomGif">
                </div>
                <img src="" class="abs bottomQc" onClick="closeQcBottom();" style="display:none;">
                <div class="shareBtns">
                    <a href="javascript:void(0);" class="abs sbb1" onClick="showQcBottom();"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                    <a href="javascript:void(0);" class="abs sbb2"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                    <a href="javascript:void(0);" class="abs sbb3"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                    <a href="javascript:void(0);" class="abs sbb4"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                </div>
                <a href="javascript:void(0);" class="abs bottmCloseBtn" onClick="closeBottom();"><img src="{{asset('pc/images/space.gif')}}" width="66" height="57"></a>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="{{asset('pc/js/jquery-1.9.1.min.js')}}"></script>
<script src="http://cloud.youku.com/assets/lib/uploadjs.php"></script>
<script>
var USE_STREAM_UPLOAD = true;
var youkuParam = {client_id:"876cd40a21540f7f",access_token:"c52defaa741795bc7fd9a133277d0a01",oauth_opentype:"currentWindow",oauth_redirect_uri:"http://youku.himyweb.com/oauth.php",oauth_state:"",completeCallback:"uploadComplete",categoryCallback:"categoryLoaded"};
function uploadComplete(data){
	alert("videoid="+data.videoid+";title="+data.title);
	uploadagain();
}

function categoryLoaded(data){
    if(data.categories) {
        var tpl = '';
        for (var i=0; i<data.categories.length; i++) {
            if(data.categories[i].term == 'Autos'){
                tpl += '<option value="' + data.categories[i].term + '" selected>' + data.categories[i].label + '</option>';
            }else{
                tpl += '<option value="' + data.categories[i].term + '" >' + data.categories[i].label + '</option>';
            }
        }
        $("#category-node").html(tpl);
    }
}
</script>
<script src="{{asset('pc/js/swiper.min.js')}}"></script>
<script src="{{asset('pc/js/jquery.form.js')}}"></script>
<script src="{{asset('pc/js/common.js')}}"></script>
<script>

function getInfos(url,params){
    $.getJSON(url,params,function(json){
        var html = '';
        for (var i = 0; i < json.data.length; i++) {
            html += '<div class="pInit">';
            html += '<div class="innerDiv">';
            html += '<div class="pTopImg"><a href="javascript:void(0);" onClick="showBottom(this);"';
			if(json.data[i].file_type == 0 ){
                html += ' cType="img" data-url="'+json.data[i].animation+'"';
            }
            else{
                html += ' cType="video" data-url="http://player.youku.com/embed/'+json.data[i].file+'"';
            }
			html += '><img src="'+json.data[i].thumb+'"></a></div>';
            html += '<div class="pBottomTxt">';
            html += '<div class="pBottomTxtName">'+json.data[i].name+'</div>';
            html += '<div class="pBottomTXtBtn1"><a href="javascript:void(0);" onClick="showBottom(this);"';
            if(json.data[i].file_type == 0 ){
                html += ' cType="img" data-url="'+json.data[i].animation+'"';
            }
            else{
                html += ' cType="video" data-url="http://player.youku.com/embed/'+json.data[i].file+'"';
            }
            html += '><img src="{{asset("pc/images/icon2.png")}}"></a></div>';
            html += '<div class="pBottomTXtBtn2"><a href="'+'{{url("like")}}/'+json.data[i].id+'" onClick="return pVote($(this));"><img src="{{asset("pc/images/icon1.png")}}"> <span>'+json.data[i].like_num+'</span></a></div></div></div></div>';
        }
        if( json.data.length == 0 ){
            html = '<div style="text-align:center"><h3>抱歉，没有您需要的信息~</h3></div>';
        }
        html += '<div class="clear"></div><div class="l4BtnLine"><a href="javascript:void(0);"><img src="{{asset("pc/images/btn4.png")}}"></a></div></div>';
        $('#infos').html(html);
    })
}
$().ready(function(){
    var url = '{{url("infos")}}';
    getInfos(url,{});
    $('.btn2').click(function(){
        getInfos(url,{order:'time'});
    });
    $('.btn3').click(function(){
        getInfos(url,{order:'like'});
    });
    $('.searchBtn').click(function(){
        var keywords = $('.searchTxt').val();
        getInfos(url,{keywords:keywords});
    });
})
</script>
@endsection
