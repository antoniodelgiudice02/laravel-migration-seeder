<?php

namespace App\Http\Controllers;

use App\Models\trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){    
        $trains = trains::all();
        dump($trains);
        return view('home');
    }
}
