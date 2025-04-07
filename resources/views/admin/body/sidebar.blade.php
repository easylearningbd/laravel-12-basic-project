<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="24">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="24">
                    </span>
                </a>
            </div>

<ul id="side-menu">

    <li class="menu-title">Menu</li>

    <li>
        <a href="{{ route('dashboard') }}" class="tp-link">
            <i data-feather="home"></i>
            <span> Dashboard </span>
        </a>
    </li>

        

    <li class="menu-title">Pages</li>

    <li>
        <a href="#sidebarAuth" data-bs-toggle="collapse">
            <i data-feather="users"></i>
            <span> Review Setup </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarAuth">
            <ul class="nav-second-level">
        <li>
            <a href="{{ route('all.review') }}" class="tp-link">All Review</a>
        </li>
        <li>
            <a href="{{ route('add.review') }}" class="tp-link">Add Review</a>
        </li>
                
            </ul>
        </div>
    </li>

    <li>
        <a href="#sidebarError" data-bs-toggle="collapse">
            <i data-feather="alert-octagon"></i>
            <span> Slider Setup </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarError">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('get.slider') }}" class="tp-link">Get Slider</a>
                </li> 
            </ul>
        </div>
    </li>


    <li>
        <a href="#Features" data-bs-toggle="collapse">
            <i data-feather="alert-octagon"></i>
            <span>  Features Setup </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Features">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('all.feature') }}" class="tp-link">All Features</a>
                </li> 

                <li>
                    <a href="{{ route('add.feature') }}" class="tp-link">Add Features </a>
                </li> 
            </ul>
        </div>
    </li>

    <li>
        <a href="#Clarifies" data-bs-toggle="collapse">
            <i data-feather="alert-octagon"></i>
            <span> Clarifies  Setup </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Clarifies">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('get.clarifies') }}" class="tp-link">Get Clarifies</a>
                </li> 
            </ul>
        </div>
    </li>

    <li>
        <a href="#Usability" data-bs-toggle="collapse">
            <i data-feather="alert-octagon"></i>
            <span> Usability Setup </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Usability">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('get.usability') }}" class="tp-link">Get Usability</a>
                </li> 
            </ul>
        </div>
    </li>

    <li>
        <a href="#Connect" data-bs-toggle="collapse">
            <i data-feather="alert-octagon"></i>
            <span> Connect Setup </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Connect">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('all.connect') }}" class="tp-link">All Connect</a>
                </li> 
                <li>
                    <a href="{{ route('add.connect') }}" class="tp-link">Add Connect</a>
                </li> 
            </ul>
        </div>
    </li>


    <li>
        <a href="#Faqs" data-bs-toggle="collapse">
            <i data-feather="alert-octagon"></i>
            <span> Faqs Setup </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Faqs">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('all.faqs') }}" class="tp-link">All Faqs</a>
                </li> 
                <li>
                    <a href="{{ route('add.faqs') }}" class="tp-link">Add Faqs</a>
                </li> 
            </ul>
        </div>
    </li>


    <li>
        <a href="#Team" data-bs-toggle="collapse">
            <i data-feather="alert-octagon"></i>
            <span> Team Setup </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Team">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('all.team') }}" class="tp-link">All Team</a>
                </li> 
                <li>
                    <a href="{{ route('add.team') }}" class="tp-link">Add Team</a>
                </li> 
            </ul>
        </div>
    </li>

    


    <li class="menu-title mt-2">General</li>

    <li>
        <a href="#sidebarBaseui" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span> Components </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarBaseui">
            <ul class="nav-second-level">
                <li>
                    <a href="ui-accordions.html" class="tp-link">Accordions</a>
                </li>
                <li>
                    <a href="ui-alerts.html" class="tp-link">Alerts</a>
                </li>
                    
            </ul>
        </div>
    </li>

    <li>
        <a href="widgets.html" class="tp-link">
            <i data-feather="aperture"></i>
            <span> Widgets </span>
        </a>
    </li>

    <li>
        <a href="#sidebarAdvancedUI" data-bs-toggle="collapse">
            <i data-feather="cpu"></i>
            <span> Extended UI </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarAdvancedUI">
            <ul class="nav-second-level">
                <li>
                    <a href="extended-carousel.html" class="tp-link">Carousel</a>
                </li>
                <li>
                    <a href="extended-notifications.html" class="tp-link">Notifications</a>
                </li>
                <li>
                    <a href="extended-offcanvas.html" class="tp-link">Offcanvas</a>
                </li>
                <li>
                    <a href="extended-range-slider.html" class="tp-link">Range Slider</a>
                </li>
            </ul>
        </div>
    </li>

    <li>
        <a href="#sidebarIcons" data-bs-toggle="collapse">
            <i data-feather="award"></i>
            <span> Icons </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarIcons">
            <ul class="nav-second-level">
                <li>
                    <a href="icons-feather.html" class="tp-link">Feather Icons</a>
                </li>
                <li>
                    <a href="icons-mdi.html" class="tp-link">Material Design Icons</a>
                </li>
            </ul>
        </div>
    </li>

    

</ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>