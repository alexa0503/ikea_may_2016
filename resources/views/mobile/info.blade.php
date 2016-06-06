@extends('layouts.mobile')
@section('content')
<div class="wrapper">
	<div class="sharePage">
    	<img src="{{$info->thumb}}" class="shareGif" style="display:none;" width="398" height="398">

        <div class="shareVideo" style="display:none;"></div>
        
        <div class="shareBtns2">
        	<div class="innerDiv">
            	<a href="javascript:void(0);" class="abs ssb1" onClick="ga('send','event','h5_personal_share_page','Share','ShareInSharePage_WeChat');showShareWx();"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
            	<a href="javascript:void(0);" onClick="ga('send','event','h5_personal_share_page','Share','ShareInSharePage_Weibo');" class="abs ssb2 sinaShare"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                <a href="javascript:void(0);" onClick="ga('send','event','h5_personal_share_page','Share','ShareInSharePage_Douban');" class="abs ssb3 douban"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                <a href="javascript:void(0);" onClick="ga('send','event','h5_personal_share_page','Share','ShareInSharePage_Qzone');" class="abs ssb4 qzoneShare"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
            </div>
        </div>

        <a href="{{url('/')}}" class="abs shareBtn1"><img src="{{asset('mobile/images/shareBtn1.png')}}"></a>
    </div>
</div>

<div class="popBg" style="display:none;" onClick="closeShareWx();"></div>
<img src="{{asset('mobile/images/shareNote.png')}}" style="display:none;" class="shareNote" onClick="closeShareWx();">

@endsection
@section('scripts')
<script>
wxData = {};
var noWechatShareTitle='多陪伴1小时';
var noWechatShareTxt='#多陪伴1小时# 宝贝在捣蛋，上传你家宝贝捣蛋瞬间，宜家丰富奖品等你来拿！';
@if ($info->file_type == 0)
var noWechatShareImg='{{$info->animation}}';
@elseif ($info->status == 1)
var noWechatShareImg='{{$info->thumb}}';
@else
var noWechatShareImg='http://community.ikea.cn/family/2016activity_awgc/public/pc/images/pcShare.png';
@endif
var noWechatSharlUrl=location.href;
</script>
<script src="{{asset('mobile/js/swiper.min.js')}}"></script>
<script src="{{asset('mobile/js/exif.js')}}"></script>
<script src="{{asset('mobile/js/hammer.js')}}"></script>
<script src="{{asset('pc/js/jquery.form.js')}}"></script>
<script src="{{asset('mobile/js/common.js')}}"></script>
<script type="text/javascript" src="http://player.youku.com/jsapi"></script>
<script>
$(document).ready(function() {
    $.getJSON('{{url("wx/share")}}', {url:location.href},function(data){
        data.link = '{{url("share",["id"=>$info->id])}}';
        @if ($info->file_type == 0)
        data.imgUrl = '{{$info->animation}}';
        @elseif ($info->status == 1)
        data.imgUrl = '{{$info->thumb}}';
        @endif
        wxData = data;
        wxShare(wxData);
    })
});
var youku_client_id='{{env("YOUKU_CLIENT_ID")}}';
var youku_vid = '{{$info->file}}';
</script>
<script>
@if ($info->file_type == 0)
var sType = 'img';
var shareUrl = '{{$info->animation}}';
@else
var sType = 'video';
var shareUrl = 'http://player.youku.com/embed/{{$info->file}}';
@endif
$(document).ready(function(){
	initShare(shareUrl);
});
</script>
@endsection
