<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Head of Section</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/img/favicon.ico')}}">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
        <!-- adminpro icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/adminpro-custon-icon.css')}}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/meanmenu.min.css')}}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/jquery.mCustomScrollbar.min.css')}}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
        <!-- jvectormap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/data-table/bootstrap-table.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/data-table/bootstrap-editable.css')}}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/normalize.css')}}">
        <!-- charts CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/c3.min.css')}}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">

        <link rel="stylesheet" href="{{asset('asset/css/modals.css')}}">

        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{asset('asset/js/vendor/modernizr-2.8.3.min.js')}}"></script>

@livewireStyles

</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="{{asset('asset/img/1.jpg')}}" alt="" class="img-circle"     />
                    </a>
                    <h2 style="color:black"><b>TAMIS</b></h2>
                    {{-- <h3>User</h3> --}}
                    <p>Head of Section</p>

                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="active">
                            <a href="{{route('headOfSection.dashboard')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-dashboard"></i> <span class="mini-dn"> Dashboard</span> </a>
                        </li>
                        {{-- <li>
                            <a href="{{route('headOfSection.departmentSections')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn"> Sections</span> </a>
                        </li>
                        <li>
                            <a href="{{route('headOfSection.departmentRooms')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn"> Offices</span> </a>
                        </li>
                        <li>
                            <a href="{{route('headOfSection.departmentreport')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn"> Report</span> </a>
                        </li> --}}
                        <li>
                            <a href="{{route('headOfSection.assetInfo')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Asset Information</span> </a>
                        </li>
                        <li>
                            <a href="{{route('headOfSection.assignAsset')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Assign Asset</span> </a>
                        </li>
                        <li>
                            <a href="{{route('headOfSection.assetRequests')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-history"></i> <span class="mini-dn">Requests</span> </a>
                        </li>

                        {{-- <li>
                            <a href="{{route('headOfSection.assethistory')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-history"></i> <span class="mini-dn">Asset Transfer History</span> </a>
                        </li>
                        <li>
                            <a href="{{route('headOfSection.transferasset')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-history"></i> <span class="mini-dn">Transfer Asset</span> </a>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="{{asset('asset/img/logo/log.png')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        {{-- <li class="nav-item"><a href="departmentreport" class="nav-link">Department Report List</a> --}}
                                        </li>
                                        {{-- <li class="nav-item"><a href="assethistory" class="nav-link">Assset History List</a> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12" >
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li>
                                                    <a href="{{ route('headOfSection.logout') }}"
                                                      onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                    </a>

                                                    <form id="logout-form" action="{{ route('headOfSection.logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                  </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->

            @yield('head-of-section-content')

        </div>
    </div>
    <!-- Chat Box Start-->
    <!-- Chat Box End-->
    <!-- jquery
		============================================ -->
        <script src="{{asset('asset/js/vendor/jquery-1.11.3.min.js')}}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{asset('asset/js/jquery.meanmenu.js')}}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{asset('asset/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{asset('asset/js/jquery.sticky.js')}}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{asset('asset/js/jquery.scrollUp.min.js')}}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{asset('asset/js/wow/wow.min.js')}}"></script>
        <!-- counterup JS
            ============================================ -->

        <!-- jvectormap JS
            ============================================ -->
        <script src="{{asset('asset/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('asset/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('asset/js/jvectormap/jvectormap-active.js')}}"></script>
        <!-- peity JS
            ============================================ -->
        <script src="{{asset('asset/js/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('asset/js/peity/peity-active.js')}}"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="{{asset('asset/js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('asset/js/sparkline/sparkline-active.js')}}"></script>
        <!-- flot JS
            ============================================ -->
        <script src="{{asset('asset/js/flot/Chart.min.js')}}"></script>
        <script src="{{asset('asset/js/flot/dashtwo-flot-active.js')}}"></script>
        <!-- data table JS
            ============================================ -->
        <script src="{{asset('asset/js/data-table/bootstrap-table.js')}}"></script>
        <script src="{{asset('asset/js/data-table/tableExport.js')}}"></script>
        <script src="{{asset('asset/js/data-table/data-table-active.js')}}"></script>
        <script src="{{asset('asset/js/data-table/bootstrap-table-editable.js')}}"></script>
        <script src="{{asset('asset/js/data-table/bootstrap-editable.js')}}"></script>
        <script src="{{asset('asset/js/data-table/bootstrap-table-resizable.js')}}"></script>
        <script src="{{asset('asset/js/data-table/colResizable-1.5.source.js')}}"></script>
        <script src="{{asset('asset/js/data-table/bootstrap-table-export.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{asset('asset/js/main.js')}}"></script>

@livewireScripts
@yield('script')

</body>

</html>

