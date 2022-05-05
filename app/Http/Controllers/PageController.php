<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index() {
        $trains= Train::where('time', '>=', time())->get();
        return view('index');
    }
}