<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href={{ asset('cms/assets/images/favicon.png') }} type="image/x-icon">
    <link rel="shortcut icon" href={{ asset('cms/assets/images/favicon.png') }} type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/font-awesome.css') }}>
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/vendors/icofont.css') }}>
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/vendors/themify.css') }}>
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/vendors/flag-icon.css') }}>
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/vendors/feather-icon.css') }}>
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/vendors/scrollbar.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/vendors/animate.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/vendors/chartist.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/vendors/date-picker.css') }}>
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/vendors/bootstrap.css') }}>
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/style.css') }}>
    <link id="color" rel="stylesheet" href={{ asset('cms/assets/css/color-1.css') }} media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href={{ asset('cms/assets/css/responsive.css') }}>
</head>

<body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">

                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                                src={{ asset('cms/assets/images/logo/logo.png') }} alt=""></a></div>
                    <div class="toggle-sidebar"><em class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></em></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">

                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"> </i><span
                                    class="badge rounded-pill badge-secondary">4 </span></div>
                            <div class="onhover-show-div notification-dropdown">
                                <h6 class="f-18 mb-0 dropdown-title">Notitications </h6>
                                <ul>
                                    <li class="b-l-primary border-4">
                                        <p>Delivery processing <span class="font-danger">10 min.</span></p>
                                    </li>
                                    <li class="b-l-success border-4">
                                        <p>Order Complete<span class="font-success">1 hr</span></p>
                                    </li>
                                    <li class="b-l-info border-4">
                                        <p>Tickets Generated<span class="font-info">3 hr</span></p>
                                    </li>
                                    <li class="b-l-warning border-4">
                                        <p>Delivery Complete<span class="font-warning">6 hr</span></p>
                                    </li>
                                    <li><a class="f-w-700" href="#">Check all</a></li>
                                </ul>
                            </div>
                        </li>


                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10"
                                    src={{ asset('cms/assets/images/dashboard/profile.jpg') }} alt="">
                                <div class="media-body"><span>{{ Auth::user()->name }}</span>
                                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                                <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href={{ route('logout') }} onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        <i data-feather="log-out"> </i><span>{{ __('Logout') }}</span></a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends-->
