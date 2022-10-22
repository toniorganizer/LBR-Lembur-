@extends('layout.main')
@extends('layout.header')

@section('container')
<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">HALAMAN DATA PEGAWAI AKTIF</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col">
        <div class="h-100">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Data Pegawai</h4>
                     <form action="/dataSiswa">
                            <div class="col-sm-auto">
                                
                                </div>
                            </div>
                        <!--end row-->
                    </form><!-- end card header -->
                   
                <div class="card-body">
                    @if (session()->has('success'))

                        <div class="alert alert-primary mb-3" role="alert">
                        {{session('success')}}    
                        </div>  
                        
                    @endif

                    <p class="text-muted mb-4">Tabel <code>Data Pegawai</code> menampilkan keseluruhan data pegawai yang terdaftar. <br> Gaji secara default bernilai 0 pada saat employee melakukan register. Admin bisa melakukan edit data pada kolom gaji.</p>
                    <div class="live-preview">
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-nowrap mb-4">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Pegawai</th>
                                        <th scope="col">Gaji</th>
                                        <th scope="col" style="width: 150px;text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                        @foreach ($data as $item)
                                        <?php $no++ ?>
                                    <tr>
                                    <td><a href="#" class="fw-medium">{{$no}}</a></td>
                                    <td>{{$item->name}}</td>
                                    <td>Rp. {{ number_format($item->salary,2,',','.') }}</td>
                                        <td>
                                            <a href="/detailPegawai/{{$item->id}}" class="btn btn-sm btn-light">Detail</a>
                                            <a href="/editPegawai/{{$item->id}}" class="btn btn-sm btn-info">Edit</a>
                                            
                                            <form action="/employee/destroy/{{$item->id}}" method="post" class="d-inline">
                                                @csrf
                                                <input type="hidden" name="foto" value="{{$item->foto}}">
                                                <button class="btn btn-sm btn-soft-danger" onclick="return confirm('Yakin Ingin Menghapus Data?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {{$data->links()}}
                            </div>
                        </div>
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