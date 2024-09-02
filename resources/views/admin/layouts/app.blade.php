<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projek Portofolio Daniel</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('adm/src/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('adm/src/assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                @include('admin.component.sidebar')
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('admin.component.navbar')
            <!--  Header End -->
            <div class="container-fluid">
                @yield('title')
                <div class="row">
                    @yield('content')
                </div>
                {{-- <div class="py-6 px-6 text-center">
                    <p>CopyRight by &copy; daniel oktafianus</p>
                </div> --}}
            </div>
        </div>
    </div>

    @include('admin.component.js')
</body>

</html>
