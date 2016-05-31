@extends('layouts.mobile')
@section('content')
<div class="wrapper">
	<div class="sharePage">
    	<img src="{{$info->thumb}}" class="shareGif" style="display:none;" width="398" height="398">

        <div class="shareVideo" style="display:none;"></div>

        <a href="{{url('/')}}" class="abs shareBtn1"><img src="{{asset('mobile/images/shareBtn1.png')}}"></a>
    </div>
</div>
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
