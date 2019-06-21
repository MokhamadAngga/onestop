@extends('layouts.admin_dashboard')

@section('sidebar')
    <title>User| Home</title>
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ml-0 mr-0 " style="width:100%">
            <img src="{{asset('img/logoBI2.png')}}" style="width: 30%">                
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="../user_dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="nav-item">
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
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Halaman Utama</h1>
        </div>
    </div>
@endsection
