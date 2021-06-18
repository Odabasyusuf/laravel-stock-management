<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>Modern | Layouts - Blank Page</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{url('/')}}/assets/admin/modern/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="{{url('/')}}/assets/admin/modern/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="{{url('/')}}/assets/admin/modern/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/modern/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/modern/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/modern/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/modern/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/modern/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/modern/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/modern/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{url('/')}}/assets/admin/modern/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/modern/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/modern/css/custom.css" rel="stylesheet" type="text/css"/>

    <script src="{{url('/')}}/assets/admin/modern/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="{{url('/')}}/assets/admin/modern/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="page-header-fixed">
<div class="overlay"></div>

<div class="menu-wrap">
    <nav class="profile-menu">
        <div class="profile"><img src="{{url('/')}}/assets/admin/modern/images/profile-menu-image.png" width="60" alt="David Green"/><span>David Green</span></div>
        <div class="profile-menu-list">
            <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
            <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
            <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
            <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
        </div>
    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
</div>
<form class="search-form" action="#" method="GET">
    <div class="input-group">
        <input type="text" name="search" class="form-control search-input" placeholder="Search...">
        <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
    </div><!-- Input Group -->
</form><!-- Search Form -->
<main class="page-content content-wrap">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="logo-box">
                <a href="index.html" class="logo-text"><span>Modern</span></a>
            </div><!-- Logo Box -->
            <div class="search-button">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
            </div>
            <div class="topmenu-outer">
                <div class="top-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                        </li>
                        <li>
                            <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                            <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                <li><p class="drop-title">You have 4 new  messages !</p></li>
                                <li class="dropdown-menu-list slimscroll messages">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                <p class="msg-name">Sandra Smith</p>
                                                <p class="msg-text">Hey ! I'm working on your project</p>
                                                <p class="msg-time">3 minutes ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                <p class="msg-name">Amily Lee</p>
                                                <p class="msg-text">Hi David !</p>
                                                <p class="msg-time">8 minutes ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
                                                <p class="msg-name">Christopher Palmer</p>
                                                <p class="msg-text">See you soon !</p>
                                                <p class="msg-time">56 minutes ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
                                                <p class="msg-name">Nick Doe</p>
                                                <p class="msg-text">Nice to meet you</p>
                                                <p class="msg-time">2 hours ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                <p class="msg-name">Sandra Smith</p>
                                                <p class="msg-text">Hey ! I'm working on your project</p>
                                                <p class="msg-time">5 hours ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                <p class="msg-name">Amily Lee</p>
                                                <p class="msg-text">Hi David !</p>
                                                <p class="msg-time">9 hours ago</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
                            <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                <li><p class="drop-title">You have 3 pending tasks !</p></li>
                                <li class="dropdown-menu-list slimscroll tasks">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                <p class="task-details">New user registered.</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                                <span class="badge badge-roundless badge-default pull-right">24min ago</span>
                                                <p class="task-details">Database error.</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                                <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                                <p class="task-details">Reached 24k likes</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <span class="user-name">David<i class="fa fa-angle-down"></i></span>
                                <img class="img-circle avatar" src="{{url('/')}}/assets/admin/modern/images/avatar1.png" width="40" height="40" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-list" role="menu">
                                <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                <li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
                                <li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li>
                                <li role="presentation"><a href="login.html"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="login.html" class="log-out waves-effect waves-button waves-classic">
                                <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                    </ul><!-- Nav -->
                </div><!-- Top Menu -->
            </div>
        </div>
    </div><!-- Navbar -->

@include('layouts.admin.modern.modernmenu')

    <!-- Page Sidebar -->
    <div class="page-inner">
        <div class="page-title">
            <h3>Blank Page</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Layouts</a></li>
                    <li class="active">Blank Page</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">

            <!-- ---------- İçerik başlangıç -------- -->

            <div class="row">
                <div class="col-8">
                    <div class="card-box">
                        <div >
                            <h4 class="header-title"><a href="http://elaravel.test/admin/musteri/create">
                                    <!-- veya basit rota http://elaravel.test/admin/musteri/ekle/ kullanılabilir  -->
                                    <button type="button" class="btn btn-primary btn-lg"><i class="fe-plus"></i> Müşteri Ekle
                                    </button>
                                </a>
                            </h4>
                        </div>
                        <div class="col-4">


                        </div>
                        <p class="sub-header">

                        </p>
                        <div class="col-4">

                        </div>

                        <!-- <div class="mb-3">
                                  <div class="row">
                                     <div class="col-12 text-sm-center form-inline">
                                         <div class="form-group mr-2">
                                             <select id="demo-foo-filter-status" class="custom-select">
                                                 <option value="">Tümünü Göster</option>
                                                 <option value="active">Aktif</option>
                                                 <option value="disabled">Pasif</option>
                                                 <option value="suspended">Suspended</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <input id="demo-foo-search" type="text" placeholder="Müşteri Ara" class="form-control"
                                                    autocomplete="on">
                                         </div>
                                     </div>
                                 </div>
                            </div>-->
                        <div class="table-responsive">
                            <table id="demo-foo-filtering" class="table table-striped toggle-circle mb-0 default no-paging footable-loaded footable" data-page-size="10">
                                <thead>
                                <tr>
                                    <th width="5%" class="footable-visible footable-first-column footable-sortable">Sıra<span class="footable-sort-indicator"></span></th>
                                    <th data-toggle="true" class="footable-visible footable-sortable">Müşteri Adı<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Telefon<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone, tablet" class="footable-visible footable-sortable">Adres<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone, tablet" width="10px" class="footable-visible footable-sortable">Düzenle<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone, tablet" width="10px" class="footable-visible footable-last-column footable-sortable">Sil<span class="footable-sort-indicator"></span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr style="" class="footable-even">
                                    <td class="footable-visible footable-first-column">1</td>
                                    <td class="footable-visible"><span class="footable-toggle"></span>demirci</td>
                                    <td class="footable-visible">5556664455</td>
                                    <td class="footable-visible">Adana</td>
                                    <td class="footable-visible"><a href="http://elaravel.test/admin/musteri/duzenle/1">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Düzenle</button>
                                        </a></td>
                                    <td class="footable-visible footable-last-column"><a href="http://elaravel.test/admin/musteri/sil/1">
                                            <button type="button" class="btn btn-outline-danger btn-sm">Sil</button>
                                        </a></td>
                                </tr>
                                <tr style="" class="footable-odd">
                                    <td class="footable-visible footable-first-column">2</td>
                                    <td class="footable-visible"><span class="footable-toggle"></span>mehmet</td>
                                    <td class="footable-visible">4448881122</td>
                                    <td class="footable-visible">Karabük</td>
                                    <td class="footable-visible"><a href="http://elaravel.test/admin/musteri/duzenle/2">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Düzenle</button>
                                        </a></td>
                                    <td class="footable-visible footable-last-column"><a href="http://elaravel.test/admin/musteri/sil/2">
                                            <button type="button" class="btn btn-outline-danger btn-sm">Sil</button>
                                        </a></td>
                                </tr>
                                <tr style="" class="footable-even">
                                    <td class="footable-visible footable-first-column">3</td>
                                    <td class="footable-visible"><span class="footable-toggle"></span>müşteri 1</td>
                                    <td class="footable-visible">telefon 1</td>
                                    <td class="footable-visible">62</td>
                                    <td class="footable-visible"><a href="http://elaravel.test/admin/musteri/duzenle/4">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Düzenle</button>
                                        </a></td>
                                    <td class="footable-visible footable-last-column"><a href="http://elaravel.test/admin/musteri/sil/4">
                                            <button type="button" class="btn btn-outline-danger btn-sm">Sil</button>
                                        </a></td>
                                </tr>
                                <tr style="" class="footable-odd">
                                    <td class="footable-visible footable-first-column">4</td>
                                    <td class="footable-visible"><span class="footable-toggle"></span>Müşteri 2</td>
                                    <td class="footable-visible">505</td>
                                    <td class="footable-visible">Karabük</td>
                                    <td class="footable-visible"><a href="http://elaravel.test/admin/musteri/duzenle/5">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Düzenle</button>
                                        </a></td>
                                    <td class="footable-visible footable-last-column"><a href="http://elaravel.test/admin/musteri/sil/5">
                                            <button type="button" class="btn btn-outline-danger btn-sm">Sil</button>
                                        </a></td>
                                </tr>
                                <tr style="" class="footable-even">
                                    <td class="footable-visible footable-first-column">5</td>
                                    <td class="footable-visible"><span class="footable-toggle"></span>müşteri 3</td>
                                    <td class="footable-visible">111</td>
                                    <td class="footable-visible">Yalova</td>
                                    <td class="footable-visible"><a href="http://elaravel.test/admin/musteri/duzenle/6">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Düzenle</button>
                                        </a></td>
                                    <td class="footable-visible footable-last-column"><a href="http://elaravel.test/admin/musteri/sil/6">
                                            <button type="button" class="btn btn-outline-danger btn-sm">Sil</button>
                                        </a></td>
                                </tr>
                                <tr style="" class="footable-odd">
                                    <td class="footable-visible footable-first-column">6</td>
                                    <td class="footable-visible"><span class="footable-toggle"></span>asd</td>
                                    <td class="footable-visible">asd</td>
                                    <td class="footable-visible">Şanlıurfa</td>
                                    <td class="footable-visible"><a href="http://elaravel.test/admin/musteri/duzenle/7">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Düzenle</button>
                                        </a></td>
                                    <td class="footable-visible footable-last-column"><a href="http://elaravel.test/admin/musteri/sil/7">
                                            <button type="button" class="btn btn-outline-danger btn-sm">Sil</button>
                                        </a></td>
                                </tr>
                                <tr style="" class="footable-even">
                                    <td class="footable-visible footable-first-column">7</td>
                                    <td class="footable-visible"><span class="footable-toggle"></span>asdf</td>
                                    <td class="footable-visible">asdf</td>
                                    <td class="footable-visible">Karabük</td>
                                    <td class="footable-visible"><a href="http://elaravel.test/admin/musteri/duzenle/22">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Düzenle</button>
                                        </a></td>
                                    <td class="footable-visible footable-last-column"><a href="http://elaravel.test/admin/musteri/sil/22">
                                            <button type="button" class="btn btn-outline-danger btn-sm">Sil</button>
                                        </a></td>
                                </tr>
                                <tr style="" class="footable-odd">
                                    <td class="footable-visible footable-first-column">8</td>
                                    <td class="footable-visible"><span class="footable-toggle"></span>asdr</td>
                                    <td class="footable-visible">2413325325</td>
                                    <td class="footable-visible">Karabük</td>
                                    <td class="footable-visible"><a href="http://elaravel.test/admin/musteri/duzenle/23">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Düzenle</button>
                                        </a></td>
                                    <td class="footable-visible footable-last-column"><a href="http://elaravel.test/admin/musteri/sil/23">
                                            <button type="button" class="btn btn-outline-danger btn-sm">Sil</button>
                                        </a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr class="active">
                                    <td colspan="5" class="footable-visible">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split justify-content-end footable-pagination"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page-arrow disabled"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow disabled"><a data-page="last" href="#last">»</a></li></ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ---------- İçerik Bitiş -------- -->
            <div class="row">
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s" >2021 - &copy; odabasyusuf.com</p>
        </div>
    </div><!-- Page Inner -->
</main><!-- Page Content -->
<nav class="cd-nav-container" id="cd-nav">
    <header>
        <h3>Navigation</h3>
        <a href="#0" class="cd-close-nav">Close</a>
    </header>
    <ul class="cd-nav list-unstyled">
        <li class="cd-selected" data-menu="index">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                <p>Dashboard</p>
            </a>
        </li>
        <li data-menu="profile">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                <p>Profile</p>
            </a>
        </li>
        <li data-menu="inbox">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                <p>Mailbox</p>
            </a>
        </li>
        <li data-menu="#">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                <p>Tasks</p>
            </a>
        </li>
        <li data-menu="#">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                <p>Settings</p>
            </a>
        </li>
        <li data-menu="calendar">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                <p>Calendar</p>
            </a>
        </li>
    </ul>
</nav>
<div class="cd-overlay"></div>


<!-- Javascripts -->
<script src="{{url('/')}}/assets/admin/modern/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/pace-master/pace.min.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/switchery/switchery.min.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/uniform/jquery.uniform.min.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/offcanvasmenueffects/js/main.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/waves/waves.min.js"></script>
<script src="{{url('/')}}/assets/admin/modern/plugins/3d-bold-navigation/js/main.js"></script>
<script src="{{url('/')}}/assets/admin/modern/js/modern.min.js"></script>

</body>
</html>
