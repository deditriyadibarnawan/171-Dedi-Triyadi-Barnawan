<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/kategori', function(){
    return view('master.kategori');

});

Route::get('/produk', function(){
    return view('master.produk');

});

Route::get('/supplier', function(){
    return view('master.supplier');

});

Route::get('/pembelian', function(){
    return view('transaksi.pembelian');

});

Route::get('/penjualan', function(){
    return view('transaksi.penjualan');

});


Route::get('/laporan', function(){
    return view('report.laporan');

});


