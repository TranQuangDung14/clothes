<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('Admin/') }}/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('Admin/') }}/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
        @include('Admin.partial.left-sidebar')
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('Admin.partial.app-header')
      <!--  Header End -->
      @yield('content')
    </div>
  </div>
  <script src="{{ asset('Admin/') }}/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('Admin/') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('Admin/') }}/js/sidebarmenu.js"></script>
  <script src="{{ asset('Admin/') }}/js/app.min.js"></script>
  <script src="{{ asset('Admin/') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{ asset('Admin/') }}/libs/simplebar/dist/simplebar.js"></script>
  <script src="{{ asset('Admin/') }}/js/dashboard.js"></script>
</body>

</html>
