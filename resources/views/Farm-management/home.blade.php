<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/vector-map/jqvmap.css">
    <link href="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css" />
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">شركة الهجرة للدواجن</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                               
                               
                            </ul>
                        </li>
                        <x-app-layout>

                        </x-app-layout>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/hijralogo.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                 <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">.</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                قائمة
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="." data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>مبيعات <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="." data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2"> المبيعات</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href=".">فاتورة المبيعات</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href=".">قائمة العملاء</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href=".">عرض اسعار المبيعات</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href=".">مرتجعات المبيعات</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">.</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href=".">.</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>مشتريات</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">. <span class="badge badge-secondary">طلب توريد</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">فاتورة شراء</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">قائمة الموردين</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">مرتجع الشراء</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">.</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>المخزون</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">قائمة الاصناف</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">المناقلة بين المستودعات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">افتتاح المخزون</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">اخراج من المخزون</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">.</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>المحاسبة المالية</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">شجرة الحسابات</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href=".">ايصال استلم</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href=".">سند قبض</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href=".">القيود اليومية</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">سند صرف</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                التقارير
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fa-solid fa-messages-dollar"></i> التقارير </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">تقرير المبيعات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">تقرير المشتريات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">التقارير اليوميا</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">تقرير العملاء</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">التقارير المالية</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">التقارير الاسبوعية</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">تقارير بحالة القطيع</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">تقرير المخزون</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">تقرير الموردين</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href=".">.</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dataentry') }}" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>اضافة قطيع</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">.</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">تحويل القطيع</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">اضافة قطيع</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">.</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-finance">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="mb-2 text-right"><strong>مرحبا بك في لوحة التحكم  لادارة المزرعة لشركة الهجرة للدواجن </strong></h2>
<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                
                          </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
       <div class="row">
                        <div class="offset-xl-10 col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                            <form>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>حركة الانتاج</strong></h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">5,79,000</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">25%</span>
                                    </div>
                                </div>
                                <div class="card-body bg-light p-t-40 p-b-40">
                                    <div id="sparkline-revenue"></div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>معدل الوفيات</strong></h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">1,79,000</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">15%</span>
                                    </div>
                                </div>
                                <div class="card-body text-center bg-light p-t-40 p-b-40">
                                    <div id="sparkline-revenue2"></div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>الحالة الصحية للقطعان</strong></h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">79,000</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">25%</span>
                                    </div>
                                </div>
                                <div class="card-body bg-light p-t-40 p-b-40">
                                    <div id="sparkline-revenue3"></div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>مرحلة التربية</strong></h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">92,000</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span> <span class="ml-1">25%</span>
                                    </div>
                                </div>
                                <div class="card-body bg-light p-b-40 p-t-40">
                                    <div id="sparkline-revenue4"></div>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end revenue year  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- ap and ar balance  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">AP and AR Balance
                                </h5>
                                <div class="card-body">
                                    <canvas id="chartjs_balance_bar"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end ap and ar balance  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- gross profit  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>ميزانية الايرادات للقطيع</strong></h5>
                                <div class="card-body">
                                  <div id="morris_gross" style="height: 272px;"></div>
                                </div>
                                <div class="card-footer bg-white">
                                    <p>ميزانية <span class="float-right text-dark">12,000.00</span></p>
                                    <p>الرصيد<span class="float-right text-dark">-2300.00 <span class="ml-2 text-secondary"><i class="fas fa-caret-up mr-1"></i>25%</span></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end gross profit  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- profit margin  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>ميزانية المصروفات للقطيع</strong></h5>
                                <div class="card-body">
                                  <div id="morris_profit" style="height: 272px;"></div>
                                </div>
                                <div class="card-footer bg-white">
                                    <p>ميزانية <span class="float-right text-dark">3500.00</span></p>
                                    <p>Balance <span class="float-right text-dark">230.00 <span class="ml-2 text-secondary"><i class="fas fa-caret-up mr-1"></i>25%</span></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end profit margin -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- earnings before interest tax  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>عدد الاناث</strong></h5>
                                <div class="card-body">
                                  <div id="ebit_morris"></div>
                                    <div class="text-center">
                                        <span class="legend-item mr-3">
                                                <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                        <span class="legend-text">&nbsp;</span>
                                        </span>
                                        <p></p>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end earnings before interest tax  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- cost of goods  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>عدد الذكور  </strong></h5>
                                <div class="card-body">
                                  <div id="goodservice"></div>
                              </div>
                          </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end cost of goods  -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- overdue invoices  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>عدد الاناث مع كل ذكر&nbsp;</strong></h5>
                                <div class="card-body">
                                  <div class="ct-chart-invoice ct-golden-section"></div>
                                    <div class="text-center m-t-40">
                                        <span class="legend-item mr-3">
                                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">الذكور</span>
                                      </span>
                                        <span class="legend-item mr-3">
                                                    <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">الاناث</span>
                                        </span>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end overdue invoices  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- disputed invoices  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>الحالة المالية</strong></h5>
                                <div class="card-body">
                                  <div class="ct-chart-line-invoice ct-golden-section"></div>
                                    <div class="text-center m-t-10">
                                        <span class="legend-item mr-3">
                                                <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                        <span class="legend-text">الايرادات</span>
                                        </span>
                                        <span class="legend-item mr-3">
                                                <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                        <span class="legend-text">المصروفات</span>
                                        </span>
                                    </div>
                              </div>
                          </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end disputed invoices  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- account payable age  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>انتاجية البيض</strong></h5>
                                <div class="card-body">
                                  <div id="account" style="height: 300px;"></div>
                              </div>
                          </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end account payable age  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- working capital  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>خلال شهر السابق استهلاك المخزون</strong></h5>
                                <div class="card-body">
                                  <div id="capital"></div>
                                    <div class="text-center m-t-10">
                                        <span class="legend-item mr-3">
                                                <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                        <span class="legend-text">استهلاك</span>
                                        </span>
                                        <p></p>
                                    </div>
                              </div>
                          </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end working capital  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- inventory turnover  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><strong>المخزون</strong></h5>
                                <div class="card-body">
                                  <div class="ct-chart-inventory ct-golden-section"></div>
                                    <div class="text-center m-t-10">
                                        <span class="legend-item mr-3">
                                                <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                        <span class="legend-text">ادواات طبية</span>
                                        </span>
                                        <span class="legend-item mr-3">
                                                <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                        <span class="legend-text">الاضاءات</span>
                                        </span>
                                        <span class="legend-item mr-3">
                                                <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                        <span class="legend-text">اعلاف اخرى</span>
                                        </span>
                                    </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end inventory turnover -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
                    <!-- ============================================================== -->
                         <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"><strong>حالة القطعان</strong></h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0"><strong>صورة</strong></th>
                                                        <th class="border-0"><strong>رقم القطيع</strong></th>
                                                        <th class="border-0"><strong>رقم المزرعة</strong></th>
                                                        <th class="border-0"><strong>عدد الذكور</strong></th>
                                                        <th class="border-0"><strong>عدد الاناث</strong></th>
                                                        <th class="border-0"><strong>مرحلة القطيع</strong></th>
                                                        <th class="border-0"><strong>تكلفة الاعلاف المستهلكة</strong></th>
                                                        <th class="border-0"><strong>اجمالي البيض</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/images (1).png" alt="user" class="img-fluid" width="45"></div>
                                                        </td>
                                                        <td>القطيع 1 </td>
                                                        <td>4 </td>
                                                        <td>20</td>
                                                        <td>80.00</td>
                                                        <td>تربية</td>
                                                        <td>5862 </td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>0 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/images (1).png" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>القطيع 2 </td>
                                                        <td>2 </td>
                                                        <td>12</td>
                                                        <td>180.00</td>
                                                        <td>تشغيلية</td>
                                                        <td>58968435 </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>5698 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/images (1).png" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>القطيع 3 </td>
                                                        <td>1 </td>
                                                        <td>23</td>
                                                        <td>820.00</td>
                                                        <td>تشغلية</td>
                                                        <td>6589255 </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>58692 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/images (1).png" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>القطيع 4 </td>
                                                        <td>3 </td>
                                                        <td>34</td>
                                                        <td>340.00</td>
                                                        <td>تربية</td>
                                                        <td>15698 </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>0 </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="9"><a href="indext3.html" class="btn btn-outline-light float-right"><strong>اضافة قطيع</strong></a>
												</td>
											</tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
			
			<!--start footer-->
			
			  <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             الهجرة للدواجن © 2022 الهجرة. <a href="https://colorlib.com/wp/"></a>.
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- jquery 3.3.1  -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/Chartistjs.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js"></script>
    <!-- chart C3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <!-- chartjs js -->
    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- dashboard finance js -->
    <script src="assets/libs/js/dashboard-finance.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- gauge js -->
    <script src="assets/vendor/gauge/gauge.min.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morrisjs.html"></script>
    <!-- daterangepicker js -->
    <script src="../../../../cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
    </script>
</body>
</html>
