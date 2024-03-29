@extends('layouts.admin_dashboard')

@section('css.ext')
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('sidebar')
    <title>User | List Peminjaman</title>
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ml-0 mr-0 " style="width:100%">
            <img src="{{asset('img/logoBI2.png')}}" style="width: 30%">                
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="../user_dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="nav-item active">
        <a class="nav-link" href="../listpinjam">
            <i class="fas fa-fw fa-table"></i>
            <span>List Peminjaman</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../ajukanpinjam">
            <i class="fas fa-fw fa-folder"></i>
            <span>Ajukan Peminjaman</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../komplain">
            <i class="fas fa-fw fa-warehouse"></i>
            <span>Ajukan Komplain</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Peminjaman</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Peminjaman</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No. Pengajuan</th>
                        <th>Nama Pengaju</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Pinjaman</th>
                        <th style="width: 25%">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>11111</td>
                        <td>Nama Pengaju 1</td>
                        <td>1 Juni 2019</td>
                        <td>Ruang</td>
                        <td class="text-center">
                            <a href="../admin_detail_peminjaman" class="btn btn-primary btn-icon-split">
                                <span class="text"> <i class="fas fa-search"></i> Lihat Detail</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>11112</td>
                        <td>Nama Pengaju 2</td>
                        <td>1 Juni 2019</td>
                        <td>Mobil</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-icon-split">
                                <span class="text"> <i class="fas fa-search"></i> Lihat Detail</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection

@section('script.ext')
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@endsection
