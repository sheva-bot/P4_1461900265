<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControll extends Controller
{
   public function index(){
        return view('index0265');
    }
    public function databarang(){
        return view('databarang0265');
    }
    public function datapelanggan(){
        return view('datapelanggan0265');
    }   
        public function datatransaksi(){
        return view('datatransaksi0265');
    }  
        public function datauser(){
        return view('datauser0265');
    }    
}