<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesiController extends Controller
{
    public function tampil(Request $request){
        if($request->session()->has('nama')){
            echo $request->session()->get('nama');
        } else {
            echo 'tidak ada data';
        }
    }

    public function buat(Request $request){
        $request->session()->put('nama','nama saya kesel');
        echo 'data berhasil disimpan kesel';
    }

    public function hapus(Request $request){
        $request->session()->forget('nama');
        echo 'data dihapus';
    }
}
