<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>{{env('PAGE_TITLE')}}</title>
<link rel="stylesheet" href="{{asset('mobile/css/common.css')}}">
<!--移动端版本兼容 -->
<script type="text/javascript">
         var phoneWidth =  parseInt(window.screen.width);
         var phoneScale = phoneWidth/640;
         var ua = navigator.userAgent;
         if (/Android (\d+\.\d+)/.test(ua)){
                   var version = parseFloat(RegExp.$1);
                   if(version>2.3){
                            document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi , user-scalable=no">');
                   }else{
                            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi , user-scalable=no">');
                   }
         } else {
                   document.write('<meta name="viewport" content="width=640, minimum-scale=0.1, maximum-scale=1.0 , user-scalable=no" />');
         }
</script>
<!--移动端版本兼容 end -->

</head>
<body>
@yield('content')
@yield('scripts')
</body>
</html>
