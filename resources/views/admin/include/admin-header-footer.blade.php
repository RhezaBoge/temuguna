<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TemuGuna</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ URL::asset('public/admin-template/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('public/admin-template/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/admin-template/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ URL::asset('public/admin-template/css/custom.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/admin-template/css/icheck/flat/green.css') }}" rel="stylesheet" />

    <script src="{{ URL::asset('public/admin-template/js/jquery.min.js') }}"></script>
    
</head>

<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
                        <!-- <img src="{{ URL::asset('public/admin-template/images/logo.png') }}" width="50px"> -->
                        <span>TemuGuna!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{ URL::asset('public/admin-template/images/img.jpg') }}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Presiden Jokowi</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>Administrator</h3>
                            <ul class="nav side-menu">
                                <li <?PHP if($data['menu'] == "home") echo "class='vn active'"?>><a href="{{ url('admin/dashboard') }}"><i class="fa fa-home"></i> Home </a></li>
                                <li <?PHP if($data['menu'] == "tables") echo "class='vn active'"?>><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li <?PHP if($data['submenu'] == "agency") echo 'class="current-page"'?>><a href="{{ url('admin/agency') }}">Agency</a></li>
                                        <li <?PHP if($data['submenu'] == "mediamanager") echo 'class="current-page"'?>><a href="{{ url('admin/media-manager') }}">Media Manager</a></li>
                                        <li <?PHP if($data['submenu'] == "project") echo 'class="current-page"'?>><a href="{{ url('admin/project') }}">Project</a></li>
                                        <li <?PHP if($data['submenu'] == "projectcategory") echo 'class="current-page"'?>><a href="{{ url('admin/project-category') }}">Project Category</a></li>
                                        <li <?PHP if($data['submenu'] == "projectissue") echo 'class="current-page"'?>><a href="{{ url('admin/project-issue') }}">Project Issue</a></li>
                                        <li <?PHP if($data['submenu'] == "usersdetail") echo 'class="current-page"'?>><a href="{{ url('admin/users-detail') }}">Users Detail</a></li>
                                        <li <?PHP if($data['submenu'] == "usersgroup") echo 'class="current-page"'?>><a href="{{ url('admin/users-group') }}">Users Group</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="chartjs.html">Chart JS</a>
                                        </li>
                                        <li><a href="chartjs2.html">Chart JS2</a>
                                        </li>
                                        <li><a href="morisjs.html">Moris JS</a>
                                        </li>
                                        <li><a href="echarts.html">ECharts </a>
                                        </li>
                                        <li><a href="other_charts.html">Other Charts </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Live On</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="e_commerce.html">E-commerce</a>
                                        </li>
                                        <li><a href="projects.html">Projects</a>
                                        </li>
                                        <li><a href="project_detail.html">Project Detail</a>
                                        </li>
                                        <li><a href="contacts.html">Contacts</a>
                                        </li>
                                        <li><a href="profile.html">Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="page_404.html">404 Error</a>
                                        </li>
                                        <li><a href="page_500.html">500 Error</a>
                                        </li>
                                        <li><a href="plain_page.html">Plain Page</a>
                                        </li>
                                        <li><a href="login.html">Login Page</a>
                                        </li>
                                        <li><a href="pricing_tables.html">Pricing Tables</a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">Jokowi
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content div at include-->
            <div class="right_col" role="main">
            <div class="">


            




            @yield('content')





            </div>
        <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">TemuGuna! a Solution to make your dreams comes True. |
                            <span class="lead"> <i class="fa fa-paw"></i> TemuGuna!</span>
                        </p>
                    </div>
                   <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>
        <!-- /page content -->
        </div>
    </div>
    

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="{{ URL::asset('public/admin-template/js/bootstrap.min.js') }}"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="{{ URL::asset('public/admin-template/js/gauge/gauge.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin-template/js/gauge/gauge_demo.js') }}"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="{{ URL::asset('public/admin-template/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin-template/js/datepicker/daterangepicker.js') }}"></script>
    <!-- chart js -->
    <script src="{{ URL::asset('public/admin-template/js/chartjs/chart.min.js') }}"></script>
    <!-- bootstrap progress js -->
    <script src="{{ URL::asset('public/admin-template/js/progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin-template/js/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <!-- icheck -->
    <script src="{{ URL::asset('public/admin-template/js/icheck/icheck.min.js') }}"></script>

    <script src="{{ URL::asset('public/admin-template/js/custom.js') }}"></script>

</body>

</html>
