<?php

use Src\Route;

Route::add('GET', '/go', [Controller\Site::class, 'index']) -> middleware('auth');

Route::add('GET', '/hello', [Controller\Site::class, 'hello']) -> middleware('auth');

Route::add('GET', '/signup', [Controller\Site::class, 'signup']) -> middleware('auth');

Route::add('GET', '/login', [Controller\Site::class, 'login']) -> middleware('auth');

Route::add('GET', '/logout', [Controller\Site::class, 'logout']) -> middleware('auth');
