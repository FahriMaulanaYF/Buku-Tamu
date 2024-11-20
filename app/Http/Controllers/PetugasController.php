<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{

    function tampil()  {
        $petugas = Petugas::paginate(5); 
        return view('petugas.tampil', compact('petugas'));
        
        
    }

    function tambah() {
        return view('petugas.tambah');
    }

   


    function sumbit(Request $request) {
        // dump()
        $petugas = new petugas();
        $petugas->username = $request->username;
        $petugas->password = $request->password;
        $petugas->created_at = $request->created_at;
        $petugas->level = $request->level;
        $petugas->save();

        // echo $petugas->jeniskelamin->value;
        return redirect()->route('petugas.tampil');
        
    }

    function edit($id) {
        $petugas = petugas::find($id);
        return view('petugas.edit', compact('petugas'));
        
    }

    function update(Request $request, $id) {
        $petugas = petugas::find($id);
        $petugas->username = $request->username;
        $petugas->password = $request->password;
        $petugas->level = $request->level;
        $petugas->update();

        return redirect()->route('petugas.tampil');
    }

    function delete($id) {
        $petugas = petugas::find($id);
        $petugas->delete();
        return redirect()->route('petugas.tampil')->with('hapus','kamu menghapus data');
        
    }

    function Search(Request $request) {
        $petugas = petugas::query();
        if($request->has('search')) {
           $petugas->where(function($query)use($request) {
            $query->whereAny(['username'],'LIKE','%' .$request->input('search').'%');
           });
        }
        $petugas = $petugas->paginate();
        return view('petugas.tampil', ['petugas' => $petugas]);
    }

}
