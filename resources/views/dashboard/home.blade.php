@extends('templates.main')

@push('style')
@endpush

@section('content')
Dashboard
@endsection

@section('container')
<section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Menu</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jumlahMenu }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Stok</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jumlahStok }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pelanggan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jumlahMember }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @foreach ($latestMenus as $menu)
                    <div class="col-lg-4 col-3">
                        <!-- small box -->
                        <div class="small-box bg-white">
                            <div class="inner">
                                <h3>{{ $menu->nama_menu }}</h3>
                                <p>Berikut Menu Terbaru</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>
    </section>

@endsection

@push('script')
@endpush