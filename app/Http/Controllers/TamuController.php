<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    function tampil()  {
        $tamu = tamu::paginate(5); 
        return view('tamu.tampil', compact('tamu'));
        
        
    }

    function tambah() {
        return view('tamu.tambah');
    }

   


    function sumbit(Request $request) {
        $tamu = new Tamu();
        $tamu->nama = $request->nama;
        $tamu->jenkel = $request->jenkel;
        $tamu->no_hp = $request->no_hp;
        $tamu->jenistamu = $request->jenistamu;
        $tamu->tujuan = $request->tujuan;
        $tamu->keperluan = $request->keperluan;
        $tamu->save();

        // echo $tamu->jeniskelamin->value;
        return redirect()->route('tamu.tampil');
        
    }

    function edit($id) {
        $tamu = Tamu::find($id);
        return view('tamu.edit', compact('tamu'));
        
    }

    function update(Request $request, $id) {
        $tamu = Tamu::find($id);
        $tamu->nama = $request->nama;
        $tamu->jenkel = $request->jenkel;
        $tamu->no_hp = $request->no_hp;
        $tamu->jenistamu = $request->jenistamu;
        $tamu->tujuan = $request->tujuan;
        $tamu->keperluan = $request->keperluan;
        $tamu->update();

        return redirect()->route('tamu.tampil');
    }

    function delete($id) {
        $tamu = Tamu::find($id);
        $tamu->delete();
        return redirect()->route('tamu.tampil')->with('hapus','kamu menghapus data');
        
    }

    function Search(Request $request) {
        $tamu = tamu::query();
        if($request->has('search')) {
           $tamu->where(function($query)use($request) {
            $query->whereAny(['nama'],'LIKE','%' .$request->input('search').'%');
           });
        }
        $tamu = $tamu->paginate();
        return view('tamu.tampil', ['tamu' => $tamu]);
    }

    
  
}
