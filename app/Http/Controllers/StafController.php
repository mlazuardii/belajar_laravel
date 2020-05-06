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
// menampilkan data guru yang sudah dihapus
public function trash()
{
    	// mengampil data guru yang sudah dihapus
    	$staf = Staf::onlyTrashed()->get();
    	return view('staf_trash', ['staf' => $staf]);
}
 // restore data guru yang dihapus
 public function kembalikan($id)
 {
         $staf = Staf::onlyTrashed()->where('id',$id);
         $staf->restore();
         return redirect('/staf/trash');
 }
 // restore semua data guru yang sudah dihapus
public function kembalikan_semua()
{
    		
    	$staf = Staf::onlyTrashed();
    	$staf->restore();

    	return redirect('/staf/trash');
}
// hapus permanen
public function hapus_permanen($id)
{
    	// hapus permanen data guru
    	$staf = Staf::onlyTrashed()->where('id',$id);
    	$staf->forceDelete();

    	return redirect('/staf/trash');
}
// hapus permanen semua guru yang sudah dihapus
public function hapus_permanen_semua()
{
    	// hapus permanen semua data guru yang sudah dihapus
    	$staf = Staf::onlyTrashed();
    	$staf->forceDelete();

    	return redirect('/staf/trash');
}
}