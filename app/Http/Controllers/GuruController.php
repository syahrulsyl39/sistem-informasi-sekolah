<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function indexguru(Request $request){

        if ($request->has('cari')) {
            $data_guru = Guru::where('nama_guru', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $data_guru = Guru::all();
        }
    
        return view('guru.indexguru', compact('data_guru'));
    }

    public function tambahguru(){
        return view('guru.tambahguru');
    }

    public function tambahdata(Request $request){

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('gambar');
        }

        // Guru::create($request->all());
        Guru::create([
            'kode_guru'=>$request->input('kode_guru'),
            'nama_guru'=>$request->input('nama_guru'),
            'gender'=>$request->input('gender'),
            'tanggal_lahir'=>$request->input('tanggal_lahir'),
            'alamat'=>$request->input('alamat'),
            'gambar'=>$file,
        ]);

        return redirect()->route('index-guru');
    }

    public function editguru($id){
        $guru = Guru::where('id', $id)->first();
        return view('guru.editguru', compact('guru'));
    }

    public function updateguru(Request $request, $id){
        $guru = Guru::where('id', $id)->first();

        // dd($request->all());

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('gambar', 'public');
            if ($guru->gambar && file_exists(storage_path('app/public/', $guru->gambar))) {
                Storage::delete('public/', $guru->gambar);
                $file = $request->file('gambar')->store('gambar', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $guru->gambar;
        }

        $guru->update([
            "kode_guru" => $request->input('kode_guru'),
            "nama_guru" => $request->input('nama_guru'),
            "gender" => $request->input('gender'),
            "tanggal_lahir" => $request->input('tanggal_lahir'),
            "alamat" => $request->input('alamat'),
            "gambar" => $file,
        ]);
        return redirect()->route('index-guru');
    }

    public function deleteguru($id){
        $guru = Guru::where('id', $id)->first();


        if ($guru->gambar && file_exists(storage_path('app/public/', $guru->gambar))) {
            Storage::delete('public/' , $guru->gambar);
        }

        $guru->delete();
        return redirect()->route('index-guru');
    }
}
