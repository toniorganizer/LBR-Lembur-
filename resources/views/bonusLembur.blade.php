@extends('layout.main')
@extends('layout.header')

@section('container')
<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Hasil Bonus Lembur Yang Dilaksanakan</h4>
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
                    <h4 class="card-title mb-0 flex-grow-1">Jumlah total bonus lembur</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted mb-2">Jumlah total <code>bonus lembur</code> menampilkan hasil kalkulasi untuk menghasilkan bonus lembur.<br> Tekan tombol <code>Refresh</code> di bahah untuk melihat hasil bonus lembur terbaru</p>
                  <form action="/add_jam" method="post">
                    @csrf
                    <input type="hidden" name="jam" value="{{$jam}}">
                    @if ($data == null)
                        <input type="hidden" name="created_at" value="0">
                    @else
                        <input type="hidden" name="created_at" value="{{$data->created_at}}">
                    @endif
                    <button class="btn btn-primary">Refresh</button>
                  </form>
                    <h2 class="card-title mb-0 mt-4 flex-grow-1">Bonus Lembur Anda : 
                        @if ($bonus == 'Maaf, Anda belum Pernah Lembur')
                            {{$bonus}}
                        @else
                           Rp. {{ number_format($bonus,2,',','.') }}</h2>
                        @endif
                    
                </div>
            </div>

                </div> <!-- end .h-100-->
            </div> <!-- end col -->
        </div>
    </div>
</div>
    <!-- container-fluid -->
@endsection