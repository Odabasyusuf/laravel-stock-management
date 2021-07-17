<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="{{url('/')}}/admin/"> <i class="fe-airplay"></i>Anasayfa
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="{{url('/')}}/admin/musteriler">
                        <i class="mdi mdi-account-card-details-outline"></i>Müşteriler
                    </a>
                </li>

                <li class="has-submenu" style="font-size: 45px; color: #95a4b5;margin: 0px -5px;top: -5px; ">|</li>

                <li class="has-submenu">
                    <a href="{{route('admin.stok_tomruk')}}"><i class="icon-layers"></i>Hammadde Stok
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="{{route('admin.tomrukgiris')}}">
                        <i class="fe-plus-circle"></i>Giriş
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="{{route('admin.tomrukcikis')}}"><i class="fe-minus-circle"></i>Çıkış
                    </a>
                </li>

                <li class="has-submenu" style="font-size: 45px; color: #95a4b5;margin: 0px -5px;top: -5px; ">|</li>


                <li class="has-submenu">
                    <a href="{{route('admin.stok_kereste')}}">
                        <i class="icon-layers"></i>Mamül Stok
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="{{url('/')}}/admin/partigiris"> <i class="far fa-plus-square"></i>Giriş
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="{{url('/')}}/admin/particikis"> <i class="far fa-minus-square"></i>Çıkış
                    </a>
                </li>

            </ul>
            <!-- End navigation menu -->

            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>

