<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/minimal/auth-signin-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 12:50:44 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Halaman Login PM PLI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://themesbrand.com/velzon/html/minimal/assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="https://themesbrand.com/velzon/html/minimal/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="https://themesbrand.com/velzon/html/minimal/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="https://themesbrand.com/velzon/html/minimal/assets/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden border-0">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100"  style="background-image: url({{asset('assets/images/employee.jpg')}});">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-0">
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">"Mari kerjasama dalam bekerja "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">"Jadikan tempat kerja menjadi tempat senyaman mungkin"</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Halaman Register</h5>
                                            <p class="text-muted">Pastikan semua data yang dimasukan benar</p>
                                        </div>

                                        @if (session()->has('success'))

                                            <div class="alert alert-primary" role="alert">
                                            {{session('success')}}    
                                            </div>  
                                            
                                        @endif

                                        <div class="mt-4">
                                            <form action="/add_employe" method="post">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nama</label>
                                                    <input type="text" name="name" class="form-control @error('name')
                                                        is-invalid
                                                @enderror" id="username" placeholder="Enter username" value="{{old('name')}}">
                                                    @error('name')
                                                    <div class="invalid-feedback">
                                                        {{$message}}  
                                                    </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input type="text" name="email" class="form-control @error('email')
                                                        is-invalid
                                                    @enderror" id="username" placeholder="Enter username" value="{{old('email')}}">
                                                    @error('email')
                                                    <div class="invalid-feedback">
                                                        {{$message}}  
                                                    </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    {{-- <div class="float-end">
                                                        <a href="" class="text-muted">Lupa pasword?</a>
                                                    </div> --}}
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input name="password" type="password" class="form-control pe-5 password-input @error('password')
                                                            is-invalid
                                                        @enderror" placeholder="Enter password" id="password-input">

                                                        @error('password')
                                                            <div class="invalid-feedback">
                                                                {{$message}}  
                                                            </div>
                                                        @enderror
                                                       
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Register</button>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Kembali ke halaman login? <a href="/" class="fw-semibold text-primary text-decoration-underline"> Login</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/node-waves/waves.min.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/libs/feather-icons/feather.min.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="https://themesbrand.com/velzon/html/minimal/assets/js/plugins.js"></script>

    <!-- password-addon init -->
    <script src="https://themesbrand.com/velzon/html/minimal/assets/js/pages/password-addon.init.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/minimal/auth-signin-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 12:50:44 GMT -->
</html>