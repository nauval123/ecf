<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E-Chicken Farmer</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li class="dropdown show"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" aria-expanded="true">
                            <div class="d-sm-none d-lg-inline-block">Hi</div></a>
                        <div class="dropdown-menu dropdown-menu-right show">
                            <a href="{{route('logoutAdmin')}}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </form>
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{route('homepageAdmin')}}">E Chicken Farmer</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html">ECF</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Admin</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Artikel</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('lihatartikel')}}">Lihat Artikel</a></li>
                            <li><a class="nav-link" href="{{route('buatartikel')}}">buat artikel</a></li>
                        </ul>
                    </li>
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Profile</span></a>--}}
{{--                    </li>--}}
                </ul>

                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                        Log Out
                    </a>
                </div>
            </aside>
        </div>

        <!-- Main Content -->
        @yield('kontenAdmin')
        <

    </div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="../assets/js/stisla.js"></script>

<!-- JS Libraies -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<!-- Template JS File -->
<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/custom.js"></script>


<!-- Page Specific JS File -->
</body>
</html>