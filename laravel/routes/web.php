<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/only_update_laravel', function () {
    return '？DAdasdas';
});










Route::get('/love/{name}', function ($name) {
    return view('love', ['name' => $name]);
});

Route::get('/redis-test', function () {
    Redis::set('key', '爱你哟老婆');
    return Redis::get('key');
});

Route::get('/mysql-test', function () {
//    DB::table('users')->insert(['a' => 1, 'b' => 2, 'c' => 3]);
//    create table users
//    (
//        id                bigint unsigned auto_increment
//        primary key,
//    name              varchar(255) not null,
//    email             varchar(255) not null,
//    email_verified_at timestamp    null,
//    password          varchar(255) not null,
//    remember_token    varchar(100) null,
//    created_at        timestamp    null,
//    updated_at        timestamp    null,
//    constraint users_email_unique
//        unique (email)
//)
//    collate = utf8mb4_unicode_ci;
    $res = DB::table('users')->insert([
        'name' => 'dada',
        'email' => 'admin@admin.com',
        'email_verified_at' => date("Y-m-d H:i:s"),
        'password' => Hash::make('123456'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")

    ]);
    return $res;
});
