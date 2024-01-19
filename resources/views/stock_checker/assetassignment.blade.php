
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/modals.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
            <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/tabs.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
                    <a href="#"><img src="img/1.jpg" alt="" class="img-circle"     />
                    </a>
                    <h3>User</h3>
                    <p>Team Leader</p>
                    <strong>AMS</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="active">
                            <a href="dashboard.php" role="button" aria-expanded="false"><i class="fa big-icon fa-dashboard"></i> <span class="mini-dn"> Dashboard</span> </a>
                        </li>
                        <li>
                            <a href="brachoffice.php" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn"> Branch Office</span> </a>
                        </li>
                        <li>
                            <a href="assetcategory.php" role="button" aria-expanded="false"><i class="fa big-icon fa-file-archive-o"></i> <span class="mini-dn"> Asset Category</span> </a>
                        </li>
                        <li>
                            <a href="department.php" role="button" aria-expanded="false"><i class="fa big-icon fa-institution"></i> <span class="mini-dn"> Department</span> </a>
                        </li>
                        <li>
                            <a href="employeeinfo.php" role="button" aria-expanded="false"><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Employee Information</span> </a>
                        </li>
                        <li>
                            <a href="assetinfo.php" role="button" aria-expanded="false"><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Asset Information</span> </a>
                        </li>
                        <li>
                            <a href="assetassignment.php" role="button" aria-expanded="false"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Asset Assignment</span> </a>
                        </li>
                        <li>
                            <a href="assethistory.php" role="button" aria-expanded="false"><i class="fa big-icon fa-history"></i> <span class="mini-dn">Asset Transfer History</span> </a>
                        </li>
                        <li>
                            <a href="user.php" role="button" aria-expanded="false"><i class="fa big-icon fa-users"></i> <span class="mini-dn">User Information</span> </a>
                        </li>
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
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="branchreport.php" class="nav-link">Brach Report List</a>
                                        </li>
                                        <li class="nav-item"><a href="employeereport.php" class="nav-link">Employee Report List</a>
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
                                                <span class="admin-name">User</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="index.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
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
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button class="btn btn-custon-rounded-three btn-success" data-toggle="modal" data-target="#InformationproModalalert"><i class="fa fa-plus"></i> Asset Assignment</button>
                                         <div id="InformationproModalalert" class="modal modal-adminpro-general fullwidth-popup-InformationproModal zoomInUp" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <form action="">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                    <div class="col-lg-12">
                            <div class="sparkline9-list shadow-reset">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1>Asset Information Encoding <span class="basic-ds-n">Form</span></h1>
                                        
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner">
                                                    <h3>Fill In : </h3>
                                                    
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Condition : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="text" class="form-control" placeholder="Enter Condition" style="width: 140%" />
                                                                    
                                                                        <input type="number" class="form-control" placeholder="Qty" style="margin-left: 150%; margin-top: -28%; width: 75%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Date Assigned : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="date" class="form-control" placeholder="Enter Date" style="width: 121%" />
                                                                    
                                                                        <input type="number" class="form-control" placeholder="Remarks" style="margin-left: 130%; margin-top: -28%; width: 95%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Item : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Name</option>
                                                <option value="all">Item 1</option>
                                                <option value="selected">Item 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Employee : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Name</option>
                                                <option value="all">Name 1</option>
                                                <option value="selected">Name 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Branch : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Location</option>
                                                <option value="all">Branch 1</option>
                                                <option value="selected">Branch 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                             <div class="modal-footer footer-modal-admin">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <a href="#">Save</a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Dashboard</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Asset Assignment</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Asset Assignment to Employee  <span class="table-project-n"></span> Form Table</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        
                                        <div id="toolbar">
                                            <form action="">
                                            <select class="form-control">
                                                <option value="">Select Item</option>
                                                <option value="all">Item 1</option>
                                                <option value="selected">Item 2</option>
                                            </select>
                                            <select class="form-control" style="margin-left: 105%; margin-top: -20.5%">
                                                <option value="">Select Employee</option>
                                                <option value="all">Employee 1</option>
                                                <option value="selected">Employee 2</option>
                                            </select>
                                            <button type="submit" class="btn btn-info" style="margin-left: 210%; margin-top: -43%">Go!</button>
                                            </form>
                                        </div>
                                    
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th>Item Name</th>
                                                    <th >Employee Name</th>
                                                    <th >Branch</th>
                                                    <th >Quantity</th>
                                                    <th >Condition</th>
                                                    <th >Remarks</th>
                                                    <th >Date Assigned</th>
                                                    <th ></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Java Advance</td>
                                                    <td>Tonyo Celis</td>
                                                    <td>Branch 1</td>
                                                    <td >3</td>
                                                    <td>Once you break consider it sold</td>
                                                    <td>Data</td>
                                                    <td>January 17, 2020</td>
                                                    <td><button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Java Advance</td>
                                                    <td>Tonyo Celis</td>
                                                    <td>Branch 1</td>
                                                    <td >3</td>
                                                    <td>Once you break consider it sold</td>
                                                    <td>Data</td>
                                                    <td>January 17, 2020</td>
                                                    <td><button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="edit" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <form action="">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                    <div class="col-lg-12">
                            <div class="sparkline9-list shadow-reset">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1>Asset Assignment to Employee <span class="basic-ds-n">Form</span></h1>
                                        
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner">
                                                    <h3>Update : </h3>
                                                    
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Condition : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="text" class="form-control" placeholder="Enter Condition" style="width: 140%" />
                                                                    
                                                                        <input type="number" class="form-control" placeholder="Qty" style="margin-left: 150%; margin-top: -28%; width: 75%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Date Assigned : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="date" class="form-control" placeholder="Enter Date" style="width: 121%" />
                                                                    
                                                                        <input type="number" class="form-control" placeholder="Remarks" style="margin-left: 130%; margin-top: -28%; width: 95%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Item : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Name</option>
                                                <option value="all">Item 1</option>
                                                <option value="selected">Item 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Employee : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Name</option>
                                                <option value="all">Name 1</option>
                                                <option value="selected">Name 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Branch : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Location</option>
                                                <option value="all">Branch 1</option>
                                                <option value="selected">Branch 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                             <div class="modal-footer footer-modal-admin">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <a href="#">Save</a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
    <!-- Chat Box Start-->
    <!-- Chat Box End-->
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/modal-active.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>


</body>

</html>
