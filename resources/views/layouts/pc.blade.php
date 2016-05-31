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
</body>
</html>
