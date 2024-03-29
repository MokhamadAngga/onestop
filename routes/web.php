<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('masukuser');
});

Route::get('/admin', function () {
    return view('Login_admin');
});

Route::get('/admin_dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin_peminjaman', function () {
    return view('admin.peminjaman');
});

Route::get('/admin_detail_peminjaman', function () {
    return view('admin.detail_peminjaman');
});

Route::get('/admin_complaints', function () {
    return view('admin.complaints');
});

Route::get('/admin_detail_complaint', function () {
    return view('admin.detail_complaint');
});

Route::get('/user_dashboard', function () {
    return view('user.dashboard');
});

Route::get('/listpinjam', function () {
    return view('user.list_pinjam');
});

Route::get('/komplain', function () {
    return view('user.komplain');
});

Route::get('/ruang', function () {
    return view('user.pinjam_ruang');
});

Route::get('/mobil', function () {
    return view('user.pinjam_mobil');
});

Route::get('/vidcon', function () {
    return view('user.pinjam_vidcon');
});

Route::get('/rumah', function () {
    return view('user.pinjam_rumah');
});

Route::get('/ajukanpinjam', function () {
    return view('user.ajukan_pinjam');
});
