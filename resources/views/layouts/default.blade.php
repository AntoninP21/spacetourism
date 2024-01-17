<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body class="{{$body}}">
<div>
   <header class="row">
       @include('includes.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
</div>
</body>
</html>