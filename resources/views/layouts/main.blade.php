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


  <div class="px-sidebar-right" id="sidebar-right">
    <div class="px-sidebar-content">
      <div class="p-a-4">
        <h3 class="m-t-0">Sidebar content</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada
          lacinia ultrices. Integer sapien risus, rutrum sit amet ligula eget, dictum
          consequat turpis. Nam est augue, mattis in purus ac, molestie mollis eros.
          Nulla elementum odio eget elit gravida, nec euismod orci egestas. Vivamus
          nec faucibus leo. Cras fringilla pulvinar velit, eu vehicula nisi varius
          eget. Cras dignissim libero a arcu mattis, a viverra turpis mollis. Sed
          sagittis, nibh maximus convallis laoreet, diam leo finibus ipsum, vitae
          viverra mi augue a felis. Proin et porta lorem. Proin eu mattis urna. Aliquam
          vel bibendum elit, in dignissim purus. Nunc quam dui, pellentesque et eros id,
          vestibulum malesuada eros.
        </p>
        <p>
          Maecenas id faucibus lorem. Quisque dolor massa, dapibus a placerat at,
          tristique quis velit. Pellentesque habitant morbi tristique senectus et
          netus et malesuada fames ac turpis egestas. Nunc et mauris viverra, posuere
          risus interdum, feugiat nulla. Donec aliquam eros libero, a pretium felis
          posuere id. Etiam nec ligula ex. Nam vehicula quam tellus, ac viverra odio
          sodales a.
        </p>
        <button type="button" class="btn" data-toggle="sidebar" data-target="#sidebar-right">Hide sidebar</button>
      </div>
    </div>
  </div>

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