<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        $all_dresses = Dress::all();

        $data = [
            'dresses' => $all_dresses
        ];
        return view('home', $data);
    }

    public function prodotti() {
        $data = [
            'testo' => 'Lista prodotti'
        ];
        return view('prodotti',$data);
    }
}
