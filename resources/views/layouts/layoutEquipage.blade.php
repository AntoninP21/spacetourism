<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body class="container_equipage">
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