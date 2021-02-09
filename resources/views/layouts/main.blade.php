<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

  <title>@yield('title')</title>

  @include('layouts.includes.header_script') 

  @yield('header_additional')
</head>
<body class="px-navbar-fixed">
  <!-- Overlay for fixed sidebar -->
  <div class="overlay"></div>



  @include('layouts.includes.rightbar')    

  @include('layouts.includes.sidebar')  
  
  @include('layouts.includes.navbar')    
  
  @yield('content')
  <!-- ================= END: CONTENT ============================= -->

  @include('layouts.includes.footer')

  @include('layouts.includes.footer_script')

  @yield('footer_additional')
  
</body>
</html>