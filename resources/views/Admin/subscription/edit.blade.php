@extends('admin.master');
@section('title', 'Admin-subscription-edit')

@section('content')
 
    <div class="main-wrapper">

        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo logo-small">
                    <img src="{{ asset('admin/assets/img/logo-icon.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>
            <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
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
                                                <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-01.jpg">
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
                                                <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-02.jpg">
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
                                                <img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/assets/img/provider/provider-03.jpg')}}">
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
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('admin/assets/img/provider/provider-04.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Ricardo Flemings have been subscribed</span>
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
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('admin/assets/img/provider/provider-05.jpg">
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
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('admin/assets/img/provider/provider-06.jpg">
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
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('admin/assets/img/provider/provider-07.jpg">
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
                    <a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('admin/assets/img/user.jpg" width="40" alt="Admin">
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
                    <img src="{{ asset('admin/assets/img/logo-icon.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.html"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="categories.html"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
                        </li>
                        <li>
                            <a href="subcategories.html"><i class="fab fa-buffer"></i> <span>Sub Categories</span></a>
                        </li>
                        <li>
                            <a href="service-list.html"><i class="fas fa-bullhorn"></i> <span> Services</span></a>
                        </li>
                        <li>
                            <a href="total-report.html"><i class="far fa-calendar-check"></i> <span> Booking List</span></a>
                        </li>
                        <li>
                            <a href="payment_list.html"><i class="fas fa-hashtag"></i> <span>Payments</span></a>
                        </li>
                        <li>
                            <a href="ratingstype.html"><i class="fas fa-star-half-alt"></i> <span>Rating Type</span></a>
                        </li>
                        <li>
                            <a href="review-reports.html"><i class="fas fa-star"></i> <span>Ratings</span></a>
                        </li>
                        <li class="active">
                            <a href="subscriptions.html"><i class="far fa-calendar-alt"></i> <span>Subscriptions</span></a>
                        </li>
                        <li>
                            <a href="wallet.html"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
                        </li>
                        <li>
                            <a href="service-providers.html"><i class="fas fa-user-tie"></i> <span> Service Providers</span></a>
                        </li>
                        <li>
                            <a href="users.html"><i class="fas fa-user"></i> <span>Users</span></a>
                        </li>
                        <li class="submenu">
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
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">

                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">Edit Subscription</h3>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action="subscriptions.html">
                                    <div class="form-group">
                                        <label>Subscription Name</label>
                                        <input class="form-control" type="text" value="Enterprice">
                                    </div>
                                    <div class="form-group">
                                        <label>Subscription Amount</label>
                                        <input class="form-control" type="text" value="$1200">
                                    </div>
                                    <div class="form-group">
                                        <label>Subscription Duration</label>
                                        <select class="form-control select">
                                            <option>Select Duration</option>
                                            <option>One Month</option>
                                            <option>3 Months</option>
                                            <option>6 Months</option>
                                            <option selected>One Year</option>
                                            <option>2 Years</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Subscription Status</label>
                                        <div class="form-check form-check-inline form-radio">
                                            <input class="form-check-input" type="radio" value="" id="subscription_active" checked>
                                            <label class="form-check-label" for="subscription_active">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-radio">
                                            <input class="form-check-input" type="radio" value="" id="subscription_inactive">
                                            <label class="form-check-label" for="subscription_inactive">
                                                Inactive
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-0">
                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                        <a href="subscriptions.html" class="btn btn-link">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection