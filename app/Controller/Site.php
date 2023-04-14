<?php

namespace Controller;

use http\Message;
use Src\View;
use Illuminate\Database\Capsule\Manager as DB;

class Site {

    public function index(): string {
        $posts = DB::table('posts') -> get();
        return (new View()) -> render('site.hello', ['message' => 'index отрабатывает штатно']);
    }

    public function hello(): string {
        return new View('site.hello', ['message' => 'hello отрабатывает штатно']);
    }
}