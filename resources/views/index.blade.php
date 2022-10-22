@extends('layout.main')
@extends('layout.header')

@section('container')
<div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>



                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col">

                        <div class="h-100">
                            <div class="row mb-3 pb-1">
                                <div class="col-12">
                                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                        <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Selamat Datang {{auth()->user()->name}}</h4>
                                        <p class="text-muted mb-0">Halaman dashboard sistem perhitungan jam lembur</p>
                                        </div>

                                                                                 
                                        </div>
                                        <div class="mt-3 mt-lg-0">

                                        </div>
                                    </div><!-- end card header -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div> <!-- end .h-100-->
                    </div> <!-- end col -->
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        @endsection