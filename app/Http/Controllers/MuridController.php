<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid;

class MuridController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$murid = Murid::paginate(5);
 
    	// mengirim data pegawai ke view pegawai
    	return view('murid', ['murid' => $murid]);
    }
}
