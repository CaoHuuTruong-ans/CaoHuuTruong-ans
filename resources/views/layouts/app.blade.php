<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel 12 App')</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common/basscss.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common/jmessages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common/bootstrap-multiselect.css') }}">
    <!-- demo -->
    <link rel="stylesheet" href="{{ asset('dist/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common/header.css') }}">
    <!-- layout -->
    <link rel="stylesheet" href="{{ asset('css/common/layout.css') }}">
    <!-- commom -->
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        @auth
        <a class="navbar-brand" href="{{ route('dashboard') }}">Home</a>
        @endauth
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           
            @auth
              <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-link nav-link" style="display: inline; padding: 0; border: none; background: none;">
                    Đăng xuất
                  </button>
                </form>
              </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>
    
    <!-- Bootstrap 5 JS CDN Bundle with Popper -->
    
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        {{-- <script src="{{ asset('js/common/messages_data.js') }}"></script> --}}
        <script src="{{ asset('js/common/jmessages.js') }}"></script>
        <script src="{{ asset('js/common/bootstrap-multiselect.js') }}"></script>
        <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
        <!--autonumeric -->
        <script src="{{ asset('plugins/autonumeric/js/autoNumeric.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('js/common/listdata.js') }}"></script>
        <script src="{{ asset('dist/js/demo.js') }}"></script>
        <script src="{{ asset('dist/js/demo2.js') }}"></script>
        <script src="{{ asset('js/common/common.js') }}?v={{ time() }}"></script>
        <script src="{{ asset('js/common/ansplugin.js') }}"></script>
        <script src="{{ asset('js/common/ui-validation.js') }}"></script>
        <script src="{{ asset('js/common/datatemp.js') }}"></script>
        <script src="{{ asset('js/avc/common/focustable.js') }}?v={{ time() }}"></script>
        <script src="{{ asset('js/avc/common/resizable.js') }}?v={{ time() }}"></script>
        <script src="{{ asset('js/avc/common/popup/notification_settings.js') }}?v={{ time() }}"></script>
        <script src="{{ asset('js/avc/common/popup/change_password/change_password.js') }}?v={{ time() }}"></script>
        <script src="{{ asset('js/avc/system/two_factor/two_factor.js') }}?v={{ time() }}"></script>
      
        @yield('asset_footer')
        <script>
            $(document).on('click', '.info .dropdown-menu', function(e) {
                e.stopPropagation();
            });
        </script>
</body>
</html>

