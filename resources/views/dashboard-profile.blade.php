<!doctype html>
<html lang="ar">

    <head >
        
        <meta charset="utf-8" />
        <title>لوحة التحكم</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" >
        <link href="assets/css/app.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
       <!-- Icons Css -->
       <link href="assets/css/icons-rtl.min.css" rel="stylesheet" type="text/css" />
       <!-- App Css-->
       {{-- <link href="assets/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css" /> --}}

   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap-rtl.min.css.map" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons-rtl.min.css.map" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app-rtl.min.css.map" id="app-style" rel="stylesheet" type="text/css" />
   <style type="text/css">
    @import url(https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap);
    * {
      font-family: 'Cairo', sans-serif;
    }
  </style>
    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <div>
            <x-share.heder></x-share.heder>
            </div>
          
            <div>
                <x-share.Sidebare></x-share.Sidebare>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" style="margin-left: -15px">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    {{-- <h4 class="mb-sm-0 font-size-18">Saas</h4> --}}
{{-- 
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Saas</li>
                                        </ol>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="C:\laragon\www\MySchool\public\assets\images\logo.png" alt="" class="avatar-md rounded-circle img-thumbnail">
                                                    </div>
                                                    <div class="flex-grow-1 align-self-center">
                                                        <div class="text-muted">
                                                            <p class="mb-2">Welcome to Skote Dashboard</p>
                                                            <h5 class="mb-1">Henry wells</h5>
                                                            <p class="mb-0">UI / UX Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-lg-4 align-self-center">
                                                <div class="text-lg-center mt-4 mt-lg-0">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">Total Projects</p>
                                                                <h5 class="mb-0">48</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">Projects</p>
                                                                <h5 class="mb-0">40</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">Clients</p>
                                                                <h5 class="mb-0">18</h5>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-lg-4 d-none d-lg-block">
                                                <div class="clearfix mt-4 mt-lg-0">
                                                    <div class="dropdown float-end">
                                                        <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bxs-cog align-middle me-1"></i> Setting
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                    <i  class="bx bx-group"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-18 mb-0 me-3 ">الأساتذة</h5>
                                        </div>
                                        <div class="text-muted mt-4">
                                            <h4 class=" me-4">162 </h4>
                                            
                                            {{-- <div class="d-flex">
                                                <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ms-2 text-truncate">From previous period</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs me-3">
                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                            <i class="bx bx-copy-alt"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-18 mb-0  me-2">عدد الطلبة</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4>1,452 </h4>
                                                    {{-- <div class="d-flex">
                                                        <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">From previous period</span>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs me-3">
                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                            <i class="bx bx-archive-in"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-14 mb-0 me-2">البريد الوارد</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4> 282 </h4>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs me-3">
                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                            <i class="bx bx-archive-out"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-14 mb-0 me-2">البريد المرسل</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4> 92 
                                                        {{-- <i class="mdi mdi-chevron-up ms-1 text-success"></i> --}}
                                                    </h4>
                                                    
                                                    {{-- <div class="d-flex">
                                                        <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ms-2 text-truncate">From previous period</span>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <!-- end row -->
                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="clearfix">
                                            <div class="float-end">
                                                <div class="input-group input-group-sm">
                                                    <select class="form-select form-select-sm">
                                                        <option value="JA" selected>Jan</option>
                                                        <option value="DE">Dec</option>
                                                        <option value="NO">Nov</option>
                                                        <option value="OC">Oct</option>
                                                    </select>
                                                    <label class="input-group-text">Month</label>
                                                </div>
                                            </div>
                                            <h4 class="card-title mb-4">Earning</h4>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="text-muted">
                                                    <div class="mb-4">
                                                        <p>This month</p>
                                                        <h4>$2453.35</h4>
                                                        <div><span class="badge badge-soft-success font-size-12 me-1"> + 0.2% </span> From previous period</div>
                                                    </div>

                                                    <div>
                                                        <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Details <i class="mdi mdi-chevron-right ms-1"></i></a>
                                                    </div>
                                                    
                                                    <div class="mt-4">
                                                        <p class="mb-2">Last month</p>
                                                        <h5>$2281.04</h5>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-8">
                                                <div id="line-chart" class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Sales Analytics</h4>

                                        <div>
                                            <div id="donut-chart" class="apex-charts"></div>
                                        </div>

                                        <div class="text-center text-muted">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary me-1"></i> Product A</p>
                                                        <h5>$ 2,132</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i> Product B</p>
                                                        <h5>$ 1,763</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i> Product C</p>
                                                        <h5>$ 973</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- end row -->

                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                {{-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer> --}}
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        {{-- <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <hr class="mt-0" />
                   <h6 class="text-center mb-0">Choose Layouts</h6>
   
                   <div class="p-4">
                       <div class="mb-2">
                           <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images" >
                       </div>
   
                       <div class="form-check form-switch mb-3">
                           <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" >
                           <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                       </div>
       
                       <div class="mb-2">
                           <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                       </div>
                       <div class="form-check form-switch mb-3">
                           <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                           <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                       </div>
      
                       <div class="mb-2">
                           <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                       </div> 
                       <div class="form-check form-switch mb-3">
                           <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" checked>
                           <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                       </div>
   
                       <div class="mb-2">
                           <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                       </div>
                       <div class="form-check form-switch mb-5">
                           <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                           <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                       </div>
   
               
                   </div>
   
               </div> --}}
                <!-- Settings -->
             <!-- end slimscroll-menu-->
        {{-- </div> --}}
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        
        <!-- Saas dashboard init -->
        <script src="assets/js/pages/saas-dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
