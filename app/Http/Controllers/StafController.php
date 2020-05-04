<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staf;

class StafController extends Controller
{
    public function index()
    {
    	$staf = Staf::all();
    	return view('staf', ['staf' => $staf]);
    }
    public function tambah()
    {
    	return view('staf_tambah');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required'
    	]);
 
        Staf::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat
    	]);
 
    	return redirect('/staf');
    }
    public function edit($id) {
        $staf = Staf::find($id);
        return view('staf_edit', ['staf' => $staf]);
    }
    public function update($id, Request $request)
{
    $this->validate($request,[
	   'nama' => 'required',
	   'alamat' => 'required'
    ]);

    $staf = Staf::find($id);
    $staf->nama = $request->nama;
    $staf->alamat = $request->alamat;
    $staf->save();
    return redirect('/staf');
}
public function delete($id)
{
    $staf = Staf::find($id);
    $staf->delete();
    return redirect('/staf');
}
}