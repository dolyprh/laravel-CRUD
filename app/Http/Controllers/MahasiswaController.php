<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function main(){
        $db_mahasiswa = \App\Models\Mahasiswa::all();
        return view('project.main',['db_mahasiswa'=>$db_mahasiswa]);
    }
        
    public function create(Request $request){
        \App\Models\Mahasiswa::create($request->all());
        return redirect('/project')->with('sukses', 'Data Berhasil di input');
    }

    public function edit($id){
        $data = \App\Models\Mahasiswa::find($id);
        return view('/project/edit',['data' => $data]); 
    }

    public function update(Request $request,$id){
        $data = \App\Models\Mahasiswa::find($id);
        $data->update($request->all());
        $data->save();
        return redirect('/project')->with('sukses', 'Data Berhasil di Update');
    }

    public function delete($id){
        $data = \App\Models\Mahasiswa::find($id);
        $data->delete($data);
        return redirect('/project')->with('sukses', 'Data Berhasil di Hapus');
    }
}    
