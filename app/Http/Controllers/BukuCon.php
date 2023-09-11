<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuCon extends Controller
{
   public function index(){
    $data = DB::table('tb_buku')->get();
    return view('components.bukutamu',[
        'data' => $data
    ]);
   }

   public function tambah(){
        
    return view('tambahbuku');
}
public function store(Request $request){
    // insert data ke table tbpegawai
DB::table('tb_buku')->insert([
'nama' => $request->nama,
'no_telepon' => $request->no_telepon,
'pesanan' => $request->pesanan,
'status' => $request->status
]);
// alihkan halaman ke route pegawai
return redirect('/bukutamu');
}

public function destroy(string $id) 
{
    DB::table('tb_buku')->delete($id);
    return redirect('/bukutamu');
}

public function edit($id)
{
    //mengambil data pegawai berdasarkan id yang dipilih
    $data = DB::table('tb_buku')->find($id);

    //passing data pegawai yang didapat ke view editpegawai.blade.php
    return view('editbuku',['bukutamu' => $data]);
}
public function storeupdate(Request $request){
    $edit = $request->validate([
        "nama" => "required",
        "no_telepon" => "required",
        "pesanan" => "required",
        "status" => "required",
    ]);
    DB::table('tb_buku')->where('id',$request->id)->update($edit);
    return redirect('/bukutamu');
}
}
