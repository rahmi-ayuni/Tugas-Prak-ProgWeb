<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'nama' => 'Rahmi Ayuni',
            'pekerjaan' => 'Batamindo',
        ];

        return view('home')->with($data);
    }
    public function contact(){
        $nama = 'Rahmi Ayuni';
        $pekerjaan = 'Batamindo';

        return view('contact', compact('nama', 'pekerjaan'));
    }
    public function welcome(){
        return view('welcome');
    }
}
