
<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown notification-list">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle nav-link">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

            <li class="dropdown d-none d-lg-block">
                <!-- Dil seçme kısmı -->
            </li>

            <li class="dropdown notification-list">
                <!-- Bildirimler bölümü -->
            </li>

            <li class="dropdown notification-list">
                <!-- Kullanıcı resmi altı dropdown menü -->
            </li>

            <li class="dropdown notification-list">

                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                   data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{url('/')}}/assets/admin/adminox/images/users/avatar-icon.png" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                                       {{\Illuminate\Support\Facades\Auth::User()->name}} <i class="mdi mdi-chevron-down"></i>
                                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Hoşgeldiniz</h6>
                    </div>
                    <div class="dropdown-divider"></div>
                    <!-- item-->
                    <!--
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>Profile</span>
                    </a>-->

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Ayarlar</span>
                    </a>

                    <!-- item-->
                    <!--
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a>-->

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{url('/')}}/admin/logout" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Çıkış</span>
                    </a>

                    <!--
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    -->

                </div>
                <!-- Right bar open -->
                <!--
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                -->
            </li>


        </ul>

        <!-- LOGO -->
        <div class="logo-box">

            <a href="{{url('/')}}/admin" class="logo text-center logo-dark">
                                <span class="logo-lg">
                                    <img src="{{url('/')}}/assets/admin/adminox/images/logo-dark-y.png" alt="" height="24">
                                    <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                                </span>
                <span class="logo-sm">
                                    <!-- <span class="logo-lg-text-dark">A</span> -->
                                    <img src="{{url('/')}}/assets/admin/adminox/images/logo-sm-y.png" alt="" height="24">
                                </span>
            </a>

            <a href="index.html" class="logo text-center logo-light">
                                <span class="logo-lg">
                                    <img src="{{url('/')}}/assets/admin/adminox/images/logo-light.png" alt="" height="24">
                                    <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                                </span>
                <span class="logo-sm">
                                    <!-- <span class="logo-lg-text-dark">A</span> -->
                                    <img src="{{url('/')}}/assets/admin/adminox/images/logo-sm.png" alt="" height="24">
                                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Arama...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
