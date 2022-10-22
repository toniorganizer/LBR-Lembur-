<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/minimal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 12:50:25 GMT -->

<head>

    <meta charset="utf-8" />
        <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="https://themesbrand.com/velzon/html/minimal/assets/libs/jsvectormap/css/jsvectormap.min.css"
        rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="https://themesbrand.com/velzon/html/minimal/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Layout config Js -->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="https://themesbrand.com/velzon/html/minimal/assets/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="https://themesbrand.com/velzon/html/minimal/assets/css/icons.min.css" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="https://themesbrand.com/velzon/html/minimal/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="https://themesbrand.com/velzon/html/minimal/assets/css/custom.min.css" rel="stylesheet"
        type="text/css" />

        <script>
            function startCalc(){
            interval = setInterval("calc()", 1);}
            function calc(){
            one = document.autoSumForm.kehadiran.value;
            two = document.autoSumForm.kerapian.value;
            document.autoSumForm.jumlah.value = (one * 1) + (two * 1);}
            function stopCalc(){
            clearInterval(interval);}
        </script>


</head>

<body>

    <!-- Begin page -->
   
    @yield('header')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @yield('container')
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © LBR.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Admin
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/node-waves/waves.min.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/feather-icons/feather.min.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/js/app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/minimal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 12:50:26 GMT -->

</html>