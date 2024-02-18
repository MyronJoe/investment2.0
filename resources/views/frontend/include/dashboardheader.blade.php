<!DOCTYPE html>
<html lang="en">


<!-- /  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>MidasTouchExchange - Admin Dashboard</title>

    <link rel="shortcut icon" href="frontend/assets/images/pfavi.png" type="image/x-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../frontend/dashboard/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="../frontend/dashboard/css/styles.css">
    <link rel="stylesheet" href="../frontend/dashboard/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="../frontend/dashboard/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

@include('sweetalert::alert')

<body>

    <div class="preloader">
        <div class="inner">

        </div>
    </div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>

                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread"> <span class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                                    </span> <span class="dropdown-item-desc" id="notification">
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="../assets/images/profile/{{ Auth::user()->image }}" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title" id="fullname">{{ Auth::user()->name }} {{ Auth::user()->lname }}</div>
                            <a href="{{route('edit_user', Auth::user()->id)}}" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Edit Profile
                            </a>

                            <div class="dropdown-divider"></div>
                            <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            