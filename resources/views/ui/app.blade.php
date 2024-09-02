<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portofolio Daniel Oktafianus</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('ui/css/styles.css') }}" rel="stylesheet" />

    <style>

    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="">MENU</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('profile') }}">Profile</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('skill') }}">Skill</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('educations') }}">Education</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('experiences') }}">Experience</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('links') }}">Contact</a></li>
        </ul>
    </nav>
    <!-- Header-->

    <!-- About-->
    @yield('content')

    <!-- Services-->

    <!-- Callout-->

    <!-- Map-->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('ui/js/scripts.js') }}"></script>

</body>

</html>
