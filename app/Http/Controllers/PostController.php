<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illmuniate\Http\Requiest;

class PostController extends Controller
{

    public function index(): View
    {
        return view('posts.index');
    }
}
