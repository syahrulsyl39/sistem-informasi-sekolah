<?php

namespace App\Http\Controllers;

use App\Models\AbsenGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AbsenGuruController extends Controller
{
    // fungsi absen guru

    public function tampilabsenguru(){
        $data_absen = AbsenGuru::all();
        return view('guru.AbsenGuru.HomeAbsenGuru', compact('data_absen'));
    }

    public function tambahabsen(){
        return view('guru.AbsenGuru.absenguru');
    }

    public function tambahdatag(Request $request){


        // dd($request->all());

        if ($request->file('gambar')) {
            $file1 = $request->file('gambar')->store('absen');
            
        }

        AbsenGuru::create([
            "jam_masuk" => $request->input('jam_masuk'),
            "jam_keluar" => $request->input('jam_keluar'),
            "materi" => $request->input('materi'),
            "tugas" => $request->input('tugas'),
            "jumlahmhs_hadir" => $request->input('jumlahmhs_hadir'),
            "jumlahmhs_tdkhadir" => $request->input('jumlahmhs_tdkhadir'),
            "gambar" => $file1,
        ]);

        return redirect()->route('tampil-absen-guru');
    }

    public function editabsen($id){
        $absen_guru=AbsenGuru::where('id', $id)->first();
        // dd($absen_guru);
        return view('guru.AbsenGuru.editabsen', compact('absen_guru'));
    }

    public function updateabsen(Request $request, $id){
        $absen_guru = AbsenGuru::where('id', $id)->first();

        // $absen_guru->update($request->all());

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('absen');
            if ($absen_guru->gambar && file_exists(storage_path('app/public/', $absen_guru->gambar))) {
                Storage::delete('public/', $absen_guru->gambar);
                $file = $request->file('gambar')->store('absen');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $absen_guru->gambar;
        }

        $absen_guru->update([
            "jam_masuk" => $request->input('jam_masuk'),
            "jam_keluar" => $request->input('jam_keluar'),
            "materi" => $request->input('materi'),
            "tugas" => $request->input('tugas'),
            "jumlahmhs_hadir" => $request->input('jumlahmhs_hadir'),
            "jumlahmhs_tdkhadir" => $request->input('jumlahmhs_tdkhadir'),
            "gambar" => $file,
        ]);
        return redirect()->route('tampil-absen-guru');
    }

    public function deleteabsen($id){
        $absen_guru = AbsenGuru::where('id', $id)->first();


        if ($absen_guru->gambar && file_exists(storage_path('app/public/', $absen_guru->gambar))) {
            Storage::delete('public/', $absen_guru->gambar);
        }

        $absen_guru->delete();
        return redirect()->route('tampil-absen-guru');
    }
}
