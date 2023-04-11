<?php

namespace Controller;

use http\Message;
use Src\View;

class Site {

    public function index(): string {
        $view = new View();
        return $view -> render('site.hello', ['message' => 'index отрабатывает штатно']);
    }

    public function hello(): string {
        return new View('site.hello', ['message' => 'hello отрабатывает штатно']);
    }
}