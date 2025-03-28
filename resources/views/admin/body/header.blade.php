<div class="topbar-custom">
    <div class="container-xxl">
        <div class="d-flex justify-content-between">
            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                <li>
                    <button class="button-toggle-menu nav-link ps-0">
                        <i data-feather="menu" class="noti-icon"></i>
                    </button>
                </li>
                <li class="d-none d-lg-block">
                    <div class="position-relative topbar-search">
                        <input type="text" class="form-control bg-light bg-opacity-75 border-light ps-4" placeholder="Search...">
                        <i class="mdi mdi-magnify fs-16 position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                    </div>
                </li>
            </ul>

<ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">

    <li class="d-none d-sm-flex">
        <button type="button" class="btn nav-link" data-toggle="fullscreen">
            <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
        </button>
    </li>

    <li class="dropdown notification-list topbar-dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <i data-feather="bell" class="noti-icon"></i>
            <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-lg">

            <!-- item-->
            <div class="dropdown-item noti-title">
                <h5 class="m-0">
                    <span class="float-end">
                        <a href="" class="text-dark">
                            <small>Clear All</small>
                        </a>
                    </span>Notification
                </h5>
            </div>

            <div class="noti-scroll" data-simplebar>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary active">
                    <div class="notify-icon">
                        <img src="assets/images/users/user-12.jpg" class="img-fluid rounded-circle" alt="" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="notify-details">Carl Steadham</p>
                        <small class="text-muted">5 min ago</small>
                    </div>
                    <p class="mb-0 user-msg">
                        <small class="fs-14">Completed <span class="text-reset">Improve workflow in Figma</span></small>
                    </p>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                    <div class="notify-icon">
                        <img src="assets/images/users/user-2.jpg" class="img-fluid rounded-circle" alt="" />
                    </div>
                    <div class="notify-content">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="notify-details">Olivia McGuire</p>
                            <small class="text-muted">1 min ago</small>
                        </div>
            
                        <div class="d-flex mt-2 align-items-center">
                            <div class="notify-sub-icon">
                                <i class="mdi mdi-download-box text-dark"></i>
                            </div>

                            <div>
                                <p class="notify-details mb-0">dark-themes.zip</p>
                                <small class="text-muted">2.4 MB</small>
                            </div>
                        </div>

                    </div>
                </a>

                
            </div>

            <!-- All-->
            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                View all
                <i class="fe-arrow-right"></i>
            </a>

        </div>
    </li>

    <li class="dropdown notification-list topbar-dropdown">
        <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <img src="{{ asset('backend/assets/images/users/user-11.jpg') }}" alt="user-image" class="rounded-circle">
            <span class="pro-user-name ms-1">
                Christian <i class="mdi mdi-chevron-down"></i> 
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
            <!-- item-->
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome !</h6>
            </div>

            <!-- item-->
            <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
                <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                <span>My Account</span>
            </a>

            <!-- item-->
            <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                <span>Lock Screen</span>
            </a>

            <div class="dropdown-divider"></div>

            <!-- item-->
            <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                <span>Logout</span>
            </a>

        </div>
    </li>

</ul>
        </div>

    </div>
   
</div>