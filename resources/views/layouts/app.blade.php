<!DOCTYPE html>
<html lang="en">
  @include('layouts.head')

  <body class="sidebar-mini layout-fixed layout-boxed-custom layout-footer-fixed alert-color bg-color-custom fontQS">
    <div class="wrapper" style="background-color: white;">
      @include('layouts.content_header')
      @include('layouts.navbar')


      @yield('content')

    </div>
  </body>
</html>