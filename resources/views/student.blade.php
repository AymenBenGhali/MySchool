<!doctype html>
<html lang="en">

<head >
        
    <meta charset="utf-8" />
    <title>المشرفين</title>
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
   {{-- <link href="assets/css/app.css" id="app-style" rel="stylesheet" type="text/css" /> --}}

<!-- Bootstrap Css -->
<link href="assets/css/bootstrap-rtl.min.css.map" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="assets/css/icons-rtl.min.css.map" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="assets/css/app-rtl.min.css.map" id="app-style" rel="stylesheet" type="text/css" />

</head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
           

            <!-- ========== Left Sidebar Start ========== -->
          
            <!-- Left Sidebar End -->
            <div>
                <x-share.heder></x-share.heder>
                </div>
            <div>
                <x-share.Sidebare></x-share.Sidebare>
            </div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row" >
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between" dir="rtl">
                                    <h2 class="mb-sm-0 font-size-18" >جدول الطلبة</h2>
                                    {{-- <div class="col-sm-6">
                                        <h2 dir="rtl">
                                        <div  role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio4"  autocomplete="off" checked>
                                        <label class="btn btn-outline-success" for="btnradio4"  style="border-radius:25px;font-size:15px;width:115px;height:35px">الكل</label>
                                      
                                        <input type="radio" class="btn-check"  name="btnradio" id="btnradio5" autocomplete="off">
                                        <label class="btn btn-outline-success" for="btnradio5"  style="border-radius:25px;font-size:15px;width:115px;height:35px">الإدارة</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                                        <label class="btn btn-outline-success" for="btnradio6"  style="border-radius:25px;font-size:15px;width:115px;height:35px">الإخصائيين </label>
                                    </div> --}}
                                </h2>
                                </div>
                            </div>
                        </div>
                        <!-- start page title -->
                      
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="row mb-2">
                                          
                                            <div class="col-sm-8">
                                                <div >
                                                    
                                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" id="btn-new-event" style="font-size:15px" ><i class="mdi mdi-plus me-1"></i> إضــافة طالب </button>
                                                
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <div class="search-box me-2 mb-2 d-inline-block" >
                                                    <div class="position-relative"  style="margin-left: 80px">
                                                        <input type="text" class="form-control" placeholder="Search...">
                                                        <i class="bx bx-search-alt search-icon"></i>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                           
                                        </div>
                                        </div>
                                            <!-- end col-->
                                        
                
                                        <div class="table-responsive" dir="rtl">
                                            <table class="table align-middle table-nowrap table-check">
                                                <thead class="table-light">
                                                    <tr >
                                                        <th class="text-center" style="width: 20px;" class="align-middle">
                                                            <div class="form-check font-size-16">
                                                                <input class="form-check-input" type="checkbox" id="checkAll">
                                                                <label class="form-check-label" for="checkAll"></label>
                                                            </div>
                                                        </th>
                                                        <th class="text-center">اسم الطالب</th>
                                                        <th class="text-center" >رقم الهاتف</th>
                                                        <th class="text-center"> الإيميل</th>
                                                        <th class="text-center"> رقم هاتف ولي الأمر</th>
                                                        <th class="text-center"> العنوان</th>
                                                        <th class="text-center"> الصف</th>
                                                        <th class="text-center"> الصورة</th>
                                                        <th class="text-center"> التعديل</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>
                                                            <div  class="form-check font-size-16">
                                                                <input class="form-check-input" type="checkbox" id="orderidcheck01">
                                                                <label class="form-check-label" for="orderidcheck01"></label>
                                                            </div>
                                                        </td>
                                                        <td>عبد العظيم المصراتي</td>
                                                        <td>09222222222 </td>
                                                        <td>
                                                        aaaaa
                                                        </td>
                                                        <td>
                                                            رياضيات
                                                        </td>
                                                        <td>
                                                            رياضيات
                                                        </td>
                                                        <td>
                                                            img
                                                        </td>
                                                        <td>
                                                            img
                                                        </td>
                                                        <td >
                                                            <a href="javascript:void(0);"   class="text-success"><i class="bx bx-edit" style="font-size:25px;margin-top:5px"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <ul class="pagination pagination-rounded justify-content-end mb-2"  style="margin-right: 35%;" >
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                    </div>
                </div>
                <!-- end modal -->
                
                 
               
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <div class="row" dir="rtl">
            <div class="col-12">
               
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-grid" >
                                    <button class="btn font-16 btn-primary" id="btn-new-event" hidden><i class="mdi mdi-plus-circle-outline"></i> Create
                                        New Event</button>
                                </div>
                            
                               
                                
                                <div id="external-events" class="mt-2" hidden>
                                    <br>
                                    <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                    <div class="external-event fc-event bg-success" data-class="bg-success">
                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event Planning
                                    </div>
                                    <div class="external-event fc-event bg-info" data-class="bg-info">
                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                    </div>
                                    <div class="external-event fc-event bg-warning" data-class="bg-warning">
                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating Reports
                                    </div>
                                    <div class="external-event fc-event bg-danger" data-class="bg-danger">
                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create New theme
                                    </div>
                                </div>

                                <div class="row justify-content-center mt-5" hidden>
                                    <img src="assets/images/verification-img.png" alt="" class="img-fluid d-block">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-9" hidden>
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                </div> 

                <div style='clear:both'></div>


                <!-- Add New Event MODAL -->
                <div class="modal fade" id="event-modal" tabindex="-1" style="width: 1500px">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header py-3 px-4 border-bottom-0">
                                <h4 class="modal-title" > إضافة طالب'</h4>    
                                <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>

                            </div>
                            <div class="modal-body p-4">
                                <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">اسم الطالب</label>
                                                <input class="form-control" placeholder="الرجاءإدخال اسم الطالب "
                                                    type="text" name="title" id="event-title" required oninvalid="this.setCustomValidity('الرجاء ادخال اسم الطالب')" oninput="this.setCustomValidity('')" autocomplete="name" autofocus />
                                                <div class="invalid-feedback" >  </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">الهاتف</label>
                                                <input class="form-control" placeholder="الرجاء إدخال رقم الهاتف  "
                                                    type="number" name="title" id="event-title" required oninvalid="this.setCustomValidity('الرجاء ادخال رقم الهاتف')" oninput="this.setCustomValidity('')" autocomplete="name" autofocus />
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">العنوان</label>
                                                <input class="form-control" placeholder="الرجاءإدخال العنوان  "
                                                    type="text" name="title" id="event-title" required oninvalid="this.setCustomValidity('الرجاء ادخال العنوان')" oninput="this.setCustomValidity('')" autocomplete="name" autofocus />
                                                <div class="invalid-feedback" >  </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">هاتف ولي الأمر</label>
                                                <input class="form-control" placeholder="الرجاء إدخال رقم الهاتف  "
                                                    type="number" name="title" id="event-title" required oninvalid="this.setCustomValidity('الرجاء ادخال رقم الهاتف')" oninput="this.setCustomValidity('')" autocomplete="name" autofocus />
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">الصف الدراسي</label>
                                                <select class="form-control form-select" name="category" id="event-category">
                                                    <option  selected> إختيار صف </option>
                                                    <option value="bg-danger">1</option>
                                                    <option value="bg-success">2</option>

                                                </select>
                                                <div class="invalid-feedback">Please select a valid event category</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label"> الإيميل</label>
                                                <input class="form-control" placeholder="الرجاء إدخال الايميل  "
                                                    type="email" name="title" id="event-title" required oninvalid="this.setCustomValidity('الرجاء ادخال الإيميل')" oninput="this.setCustomValidity('')" autocomplete="name" autofocus />
                                                <div class="invalid-feedback"> </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">الصــورة</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-success" id="btn-save-event">حفظ</button>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">إغلاق</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end modal-content-->
                    </div> <!-- end modal dialog-->
                </div>
                <!-- end modal-->

            </div>
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
       
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- plugin js -->
        <script src="assets/libs/moment/min/moment.min.js"></script>
        <script src="assets/libs/jquery-ui-dist/jquery-ui.min.js"></script>
        <script src="assets/libs/@fullcalendar/core/main.min.js"></script>
        <script src="assets/libs/@fullcalendar/bootstrap/main.min.js"></script>
        <script src="assets/libs/@fullcalendar/daygrid/main.min.js"></script>
        <script src="assets/libs/@fullcalendar/timegrid/main.min.js"></script>
        <script src="assets/libs/@fullcalendar/interaction/main.min.js"></script>

        <!-- Calendar init -->
        <script src="assets/js/pages/calendars-full.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>


    </body>
</html>
