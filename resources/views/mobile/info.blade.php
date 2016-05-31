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
<script src="{{asset('mobile/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('mobile/js/swiper.min.js')}}"></script>
<script src="{{asset('mobile/js/exif.js')}}"></script>
<script src="{{asset('mobile/js/hammer.js')}}"></script>
<script src="{{asset('pc/js/jquery.form.js')}}"></script>
<script src="{{asset('mobile/js/common.js')}}"></script>

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
