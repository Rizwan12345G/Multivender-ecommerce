<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>

    {{-- <link rel="shortcut icon" href="{{ asset('admin/assets/img/favicon.png') }}"> --}}

    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datatables/datatables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/select2.min.css') }}">
    <!-- Dropzone CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css" rel="stylesheet">

    <!-- Dropzone JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

    <link rel="stylesheet" href="{{ asset('admin/assets/css/admin.css') }}">



    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}



    @yield('links')
</head>

<body>
    <div class="main-wrapper" style="height:100vh">
        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo logo-small">
                    {{-- <img src="{{ asset('admin/assets/img/logo-icon.png') }}" alt="Logo" width="30" --}}
                    height="30">
                </a>
            </div>
            <a href="javascript:void(0)" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>
            <a class="mobile_btn" id="mobile_btn" href="javascript:void(0)">
                <i class="fas fa-align-left"></i>
            </a>
            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="far fa-bell"></i> <span class="badge badge-pill"></span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="{{ asset('admin/assets/img/provider/provider-01.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Thomas Herzberg have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="{{ asset('admin/assets/img/provider/provider-02.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Matthew Garcia have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">13 Sep 2020 03:56 AM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="{{ asset('admin/assets/img/provider/provider-03.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Yolanda Potter have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">12 Sep 2020 09:25 PM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('admin/assets/img/provider/provider-04.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Ricardo Flemings have been
                                                        subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">11 Sep 2020 06:36 PM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/provider/provider-05.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Maritza Wasson have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">10 Sep 2020 08:42 AM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/provider/provider-06.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Marya Ruiz have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">9 Sep 2020 11:01 AM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/provider/provider-07.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Richard Hughes have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">8 Sep 2020 06:23 AM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="admin-notification.html">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link"
                        data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('admin/assets/img/user.jpg') }}"
                                width="40" alt="Admin">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="admin-profile.html">Profile</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>

            </ul>
        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-logo">
                <a href="index.html">
                    <img src="{{ asset('admin/assets/img/logo-icon.png') }}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="{{ Route::is('Admin.dashboard') ? 'active' : null }}">
                            <a href="{{ route('Admin.dashboard') }}"><i class="fas fa-columns"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li class="{{ Route::is('admin.category.all') ? 'active' : null }}">
                            <a href="{{ route('admin.category.all') }}"><i class="fas fa-layer-group"></i>
                                <span>Categories</span></a>
                        </li>
                        <li class="{{ route::is('admin.product.all') ? 'active' : null }}">
                            <a href="{{ route('admin.product.all') }}"><i class="fas fa-hashtag"></i>
                                <span>Products</span></a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                        {{-- <li class="">
                            <a href="subcategories.html"><i class="fab fa-buffer"></i> <span>Sub Categories</span></a>
                        </li> --}}
                        {{-- <li
                            class="{{ Route::is('admin.service.all') || Route::is('admin.service.view') ? 'active' : null }}">
                            <a href="{{ route('admin.service.all') }}"><i class="fas fa-bullhorn"></i> <span>
                                    Services</span></a>
                        </li> --}}
                        {{-- <li
                            class="{{ Route::is('admin.booking.all') ||
                            Route::is('admin.booking.inprogress') ||
                            Route::is('admin.booking.reject') ||
                            Route::is('admin.booking.complete') ||
                            Route::is('admin.booking.cancel') ||
                            Route::is('admin.booking.pending')
                                ? 'active'
                                : null }}">
                            <a href="{{ route('admin.booking.all') }}"><i class="far fa-calendar-check"></i> <span>
                                    booking</span></a>
                        </li> --}}

                        {{-- <li class="{{ Route::is('admin.payment') ? 'active' : null }}">
                            <a href="{{ route('admin.payment') }}"><i class="fas fa-hashtag"></i>
                                <span>Payments</span></a>
                        </li> --}}
                        {{-- <li
                            class="{{ Route::is('admin.rating.all') || Route::is('admin.rating.edit') || Route::is('admin.rating.add') ? 'active' : null }}">
                            <a href="{{ route('admin.rating.all') }}"><i class="fas fa-star-half-alt"></i>
                                <span>Rating
                                    Type</span></a>
                        </li> --}}
                        {{-- <li class="{{ Route::is('admin.review-reports') ? 'active' : null }}">
                            <a href="{{ Route('admin.review-reports') }}"><i class="fas fa-star"></i>
                                <span>Ratings</span></a>
                        </li> --}}
                        {{-- <li
                            class="{{ Route::is('admin.subscription.all') ||
                            Route::is('admin.subscription.add') ||
                            Route::is('admin.subscription.edit')
                                ? 'active'
                                : null }}">
                            <a href="{{ route('admin.subscription.all') }}"><i class="far fa-calendar-alt"></i>
                                <span>Subscriptions</span></a>
                        </li> --}}
                        {{-- <li
                            class="{{ Route::is('admin.wallet.all') || Route::is('admin.wallet.history') ? 'active' : null }}">
                            <a href="{{ route('admin.wallet.all') }}"><i class="fas fa-wallet"></i> <span>
                                    Wallet</span></a>
                        </li> --}}
                        {{-- <li class="{{ Route::is('admin.providers') ? 'active' : null }}">
                            <a href="{{ route('admin.providers') }}"><i class="fas fa-user-tie"></i> <span> Service
                                    Providers</span></a>
                        </li> --}}
                        {{-- <li class="{{ Route::is('admin.users') ? 'active' : null }}">
                            <a href="{{ Route('admin.users') }}"><i class="fas fa-user"></i> <span>Users</span></a>
                        </li> --}}
                        {{-- <li class="submenu">
                            <a href="settings.html"><i class="fas fa-cog"></i> <span> Settings</span>
                                <span class="menu-arrow"><i class="fas fa-angle-right"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="settings.html"> <span> General Settings</span></a>
                                </li>
                                <li>
                                    <a href="system-settings.html"> <span>System Settings</span></a>
                                </li>
                                <li>
                                    <a href="localization.html"> <span>Localization </span></a>
                                </li>
                                <li>
                                    <a href="social-settings.html"> <span> Social Settings</span></a>
                                </li>
                                <li>
                                    <a href="email-settings.html"> <span> Email Settings</span></a>
                                </li>
                                <li>
                                    <a href="payment-settings.html"> <span>Payment Settings</span></a>
                                </li>
                                <li>
                                    <a href="seo-settings.html"> <span>SEO Settings</span></a>
                                </li>
                                <li>
                                    <a href="others-settings.html"> <span> Others</span></a>
                                </li>
                                <li>
                                    <a href="theme-settings.html"> <span> Theme Settings</span></a>
                                </li>
                                <li>
                                    <a href="sms-setting.html"> <span> SMS Gateway</span></a>
                                </li>
                                <li>
                                    <a href="language-settings.html"> <span> Language</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-cog"></i> <span> Frontend Settings</span>
                                <span class="menu-arrow"><i class="fas fa-angle-right"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="front-settings.html"> <span> Header Settings</span></a>
                                </li>
                                <li>
                                    <a href="footer-settings.html"> <span>Footer Settings</span></a>
                                </li>
                                <li>
                                    <a href="pages.html"> <span>Pages </span></a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>


        @yield('content')
    </div>

    <script src="{{ asset('admin/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('admin/assets/plugins/datatables/datatables.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/select2.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/admin.js') }}"></script>

</body>

</html>
