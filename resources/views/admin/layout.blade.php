
<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="assets/1.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Limon Islam</h1>
            <p>Laravel Delevoper</p>
          </div>
        </div>
       @include('admin.Sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
       
        @yield('content')
        @include('admin.Footer')
  </body>
</html>
