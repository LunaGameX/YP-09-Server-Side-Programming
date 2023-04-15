<?php

namespace Controller;

use http\Message;
use Model\Post;
use Model\User;
use Src\View;
use Src\Request;
use Illuminate\Database\Capsule\Manager as DB;

class Site {

    public function index(Request $request): string {
        $posts = Post::where('id', $request -> id) -> get();
        return (new View()) -> render('site.post', ['posts' => $posts]);
    }

    public function hello(): string {
        return new View('site.hello', ['message' => 'hello отрабатывает штатно']);
    }

    public function signup(Request $request): string {
        if ($request -> method === 'POST' && User::create($request -> all())) {
            return new View(['message' => 'Вы успешно зарегистрировны']);
        }
        return  new View('site.signup');
    }
}