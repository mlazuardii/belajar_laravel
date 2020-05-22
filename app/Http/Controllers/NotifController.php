<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class NotifController extends Controller
{
    public function index(){
        return view('notifikasi');
    }
    public function sukses(){
        Session::flash('sukses','Ini flash sukses!');
        return redirect('pesan');
    }
    public function gagal(){
        Session::flash('gagal','Ini flash gagal!');
        return redirect('pesan');
    }
}
