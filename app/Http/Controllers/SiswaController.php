<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request){

        if ($request->has('cari')) {
            $data_siswa = Siswa::where('nama_depan', 'LIKE', '%'.$request->cari.'%' )->get();
        } else {
            $data_siswa = Siswa::all();
        }
        
      
        return view('siswa.index', compact('data_siswa'));
    }

    public function tambahs(Request $request){
        Siswa::create([
            "nama_depan" => $request->input('nama_depan'),
            "nama_belakang" => $request->input('nama_belakang'),
            "jenis_kelamin" => $request->input('jenis_kelamin'),
            "agama" => $request->input('agama'),
            "alamat" => $request->input('alamat'),
        ]);

        return redirect()->route('dasboar-siswa')->with('sukses', 'Data Berhasil Di Tambahkan!');
    }

    public function edits($id){
        
        $edit_siswa=Siswa::where('id',$id)->first();
        // dd($edit_siswa);
        return view('siswa.editsiswa', compact('edit_siswa'));
    }

    public function updates(Request $request, $id){
        $edit_siswa=Siswa::where('id', $id)->first();
        $edit_siswa->update($request->all());
        return redirect()->route('dasboar-siswa');

    }

    public function deletes($id){
        $edit_siswa=Siswa::where('id',$id)->first();
        $edit_siswa->delete();
        return redirect()->route('dasboar-siswa');
    }

    public function detailsiswa($id){
        $edit_siswa = Siswa::where('id', $id)->first();
        return view('siswa.detailsiswa', compact('edit_siswa'));
    }
    
}
