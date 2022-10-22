@extends('layout.main')
@extends('layout.header')

@section('container')
<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Halaman tambah data durasi lembur</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col">
        <div class="h-100">
                    <form action="/add_durasiLembur" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Durasi Lembur</h4>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">

                                        @if (session()->has('success'))

                                            <div class="alert alert-primary" role="alert">
                                            {{session('success')}}    
                                            </div>  
                                            
                                        @endif

                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <p class="text-muted">Masukan kegiatan yang dilakukan<br>    
                                        </p>
                                            
                                            <div class="col-xxl-3 col-md-12">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Tanggal Lembur</label>
                                                    <input type="date" name="date" class="form-control @error('date')
                                                        is-invalid
                                                    @enderror" id="exampleInputdate">
                                                    @error('date')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                    @enderror
                                                    </div>
                                            </div>
                                            
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleInputtime" class="form-label">Mulai</label>
                                                    <input type="time" name="time_started" class="form-control @error('time_started')
                                                        is-invalid
                                                    @enderror" id="exampleInputtime">
                                                @error('time_started')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleInputtime" class="form-label">Selesai</label>
                                                    <input type="time" name="time_ended" class="form-control @error('time_ended')
                                                        is-invalid
                                                    @enderror" id="exampleInputtime">
                                                @error('time_ended')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                            </div>
                                            <!--end col-->
                                                
                                            </div>
                                            <div class="col-lg-10"></div>
                                            <div class="col-lg-2">
                                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                            </div>
                                        </form>
                                        </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
              </div> <!-- end .h-100-->
            </div> <!-- end col -->
        </div>
    </div>
</div>
    <!-- container-fluid -->
@endsection