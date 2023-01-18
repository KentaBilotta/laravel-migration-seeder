<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $trains = Train::all();
        // dump($trains);

        return view('home', compact('trains'));
    }
}
