<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DosenController extends Controller
{
    public function index(){
        $nama = "ardi";
        $pelajaran = ['baca','nyanyi'];
    	return view('biodata',['nama' => $nama,'pelajaran' => $pelajaran]);
    }
}