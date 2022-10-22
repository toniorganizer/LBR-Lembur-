@extends('layout.main')
@extends('layout.header')

@section('container')
           <div class="page-content">
                <div class="container-fluid">
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg">
                            <img src="{{asset('assets/images/employee.jpg')}}" alt="" class="profile-wid-img" />
                        </div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                        <div class="row g-4">
                            
                            <!--end col-->
                            <div class="col">
                                <div class="p-2">
                                <h3 class="text-white mb-1">{{$data->name}}</h3>
                                    {{-- <p class="text-white-75">{{$siswa->role}}</p> --}}
                                   
                                </div>
                            </div>

                        </div>
                        <!--end row-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="d-flex">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Profil</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex-shrink-0">
                                        <a href="/dataPegawai" class="btn btn-success">Kembali</a>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-xxl-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3">Info</h5>
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Nama :</th>
                                                                    <td class="text-muted">{{$data->name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Total jam Lembur :</th>
                                                                    <td class="text-muted">{{$jam}} Jam</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Upah Lembur :</th>
                                                                    <td class="text-muted">Rp. {{ number_format(($jam * (10000)),2,',','.') }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Gaji :</th>
                                                                        <td class="text-muted">Rp. {{ number_format($data->salary,2,',','.') }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Total Gaji</th>
                                                                        <td class="text-muted">Rp. {{ number_format(($jam * (10000)) + $data->salary,2,',','.') }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            
                                   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                                <!--end tab-content-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->
                
                        </div> <!-- end .h-100-->
                    </div> <!-- end col -->
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        @endsection