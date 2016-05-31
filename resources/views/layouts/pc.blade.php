<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{{env('PAGE_TITLE')}}</title>
<link rel="stylesheet" href="{{asset('pc/css/common.css')}}">
</head>
<body>
    <div class="wrapper">
        @yield('content')
    </div>
  @yield('scripts')
  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66883310-5', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
