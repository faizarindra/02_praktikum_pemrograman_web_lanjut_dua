<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index(){
        echo "Ini adalah halaman home";
    }

    public function about(){
        echo "NIM   : 2041720068 <br> ";
        echo "Nama  : Faiz Arindra Maulana <br>";
        echo "Kelas : TI 2D <br>";
    }

    public function articles($id){
        echo "Ini merupakan halaman dengan ID : ".$id;
    }

}
