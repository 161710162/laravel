<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/about',function() {
	return '<h1>Halo</h1>'
	.'Selamat datang di web app saya<br>'
	.'Laravel,memang keren.';
});


Route::get('/about/1',function() {
	return '<h1>Halo Selamat datang di web app pertama saya</h1>';
});


Route::get('/about/2',function() {
	return '<h1>Halo Selamat Datang di Web App Kedua saya</h1>';
});


Route::get('/about/3',function() {
	return '<h1>Halo Selamat Datang di Web App ketiga saya</h1>';
});


Route::get('/about/4',function() {
	return '<h1>Halo Selamat Datang di Web App keempat saya</h1>';
});


Route::get('/about/5',function() {
	return '<h1>Halo Selamat Datang di Web App kelima saya</h1>';
});

Route::get('/about/{id}',function($a) {
	return '<h1>Halo Selamat Datang di Web App saya yang ke<b>'.$a.'</b></h1>';
});


Route::get('/kantin/{makanan}/{minum}/{cemilan}',function($a,$b,$c) {
	return '<h1>Makanan'.$a.'<br>Minuman'.$a.'<br>cemilan'.$a.'';
});



Route::get('/user/{name?}',function($name = 'Taufik') {
	return 'Nama saya'.$name;
});