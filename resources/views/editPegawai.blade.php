@extends('layout.main')
@extends('layout.header')

@section('container')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Data Gaji Pegawai</h4>

                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Forms Validation</li>
                        </ol>
                    </div> --}}

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Edit data gaji pegawai</h4>
                    </div><!-- end card header -->

                    <div class="card-body">

                        @if (session()->has('success'))

                            <div class="alert alert-primary" role="alert">
                            {{session('success')}}    
                            </div>  
                            
                        @endif

                        <div class="live-preview">
                        <form class="row g-3" action="/editDataPegawai/{{$employee->id}}" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <label for="validationDefault01" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="validationDefault01" value="{{old('name', $employee->name)}}" disabled>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}  
                                    </div>                                            
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="validationDefault03" class="form-label">Gaji</label>
                                    <input type="number" name="salary" class="form-control @error('salary') is-invalid @enderror" id="validationDefault03" value="{{old('salary', $employee->salary)}}">
                                    @error('salary')
                                    <div class="invalid-feedback">
                                        {{$message}}     
                                    </div>                                            
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection