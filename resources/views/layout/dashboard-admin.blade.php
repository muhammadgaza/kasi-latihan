<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="fixed-top">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="index.html" class="logo">E-KASIR</a></h1>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="/admin/produk"><span class="fa fa-home mr-3"></span> Homepage</a>
        </li>
        <li>
          <a href="/admin/pendataan-produk"><span class="fa fa-archive mr-3"></span> Pendataan Barang</a>
        </li>
        <li>
          <a href="/admin/user-registrasi"><span class="fa fa-history mr-3"></span> History</a>
        </li>
        <li>
          <a href="/admin/user-registrasi"><span class="fa  fa-user mr-3"></span> User</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-paper-plane mr-3"></span> Settings</a>
        </li>
        <li>
          <a href="{{ route('adminlogout') }}"><span class="fa fa-sign-out mr-3"></span> Logout</a>
        </li>
      </ul>
    </nav>
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      @yield('content')
    </div>
  </div>
  
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
