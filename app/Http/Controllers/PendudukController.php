<?php

namespace App\Http\Controllers;

use App\Models\penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $model = penduduk::all();
        return view('penduduk.form', compact('model'));
    }

    public function create()
    {
        $model = new penduduk;
        return view('penduduk.form', compact('model'));
    }

    public function store(Request $request)
    {
        $tambahpenduduk = penduduk::create([
            'nik' => $request -> nik,
            'nama' => $request-> nama,
            'kelamin' => $request -> kelamin,
            'alamat' => $request -> alamat,
            'status' => $request -> status,
            'pekerjaan' => $request -> pekerjaan,
            'kewarganegaraan' => $request -> kewarganegaraan,
            'tempat_lahir' => $request -> tempat_lahir,
            'tanggal_lahir' => $request -> tanggal_lahir,
            'golongan' => $request -> golongan,

        ]);
        if($tambahpenduduk){
            return redirect('penduduk');
        }else{
            return 'gagal';
        }
    }
    
    public function edit($id)
    {
        $model = penduduk::all();
        $edit = penduduk::find($id);
        return view('penduduk.edit', compact('model','edit'));
    }

    public function update(Request $request, $id)
    {
        $editpenduduk = penduduk::where('id', $id)->update
        ([
            'nik' => $request -> nik,
            'nama' => $request-> nama,
            'kelamin' => $request -> kelamin,
            'alamat' => $request -> alamat,
            'status' => $request -> status,
            'pekerjaan' => $request -> pekerjaan,
            'kewarganegaraan' => $request -> kewarganegaraan,
            'tempat_lahir' => $request -> tempat_lahir,
            'tanggal_lahir' => $request -> tanggal_lahir,
            'golongan' => $request -> golongan,
        ]);
        if($editpenduduk){
            return redirect('penduduk');
        }else{
            return 'gagal';
        }
    }

    public function destroy($id){
        $hapuspenduduk = penduduk::where('id',$id)-> delete();
        if($hapuspenduduk){
            return redirect('penduduk');
        }else{
            return 'gagal';
        }
    }
}
