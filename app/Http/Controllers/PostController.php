<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Mon super premier titre',
            'Mon super second titre'
        ];
        return view('articles', compact('posts'));
    }

    public function show ($id)
    {
        $posts = [
            1 => 'Mon titre numero 1',
            2 => 'Mon titre numero 2'
        ];

        $post = $posts[$id] ?? 'Pas de titre !';

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact ()
    {
        return view('contact');
    }
}