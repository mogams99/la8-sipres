<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="border-bottom: 0; background-color: #2d55ff;">
    <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: #2d55ff;">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand brand-logo" href="#">
                <h2 style="color: white; margin-top: 8px;">SI<span class="font-weight-bold">PRES</span></h2>
            </a>
            <a class="navbar-brand brand-logo-mini" href="#">
                <h6 style="color: white; margin-top: 8px;">SI<span class="font-weight-bold">PRES</span></h6>
            </a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background-color: #2d55ff;">
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item ">
                <div class="nav-link">
                    <img src="{{ asset('dist/images/img-avatar.png') }} " alt="profile" style="width: 35px; height: 35px; margin-bottom: 2px;" />
                    <span class="nav-profile-name text-white mt-3">{{ Auth::user()->name }}</span>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>
</nav>