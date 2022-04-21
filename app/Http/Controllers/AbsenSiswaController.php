<?php

namespace App\Http\Controllers;

use App\Models\AbsenSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AbsenSiswaController extends Controller
{
    public function homeabsen(Request $request)
    {

        if ($request->has('cari')) {
            $data_siswa = AbsenSiswa::where('materi', 'LIKE', '%'.$request->cari.'%')->get();
        }
        else {
            $data_siswa = AbsenSiswa::all();
        }

        
        return view('siswa.absensiswa.homeAsiswa', compact('data_siswa'));
    }

    public function tambahabsensiswa()
    {
        return view('siswa.absensiswa.tambahabsensiswa');
    }

    public function dataabsiswa(Request $request)
    {

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('absen');
        }

        AbsenSiswa::create([
            "jam_masuk" => $request->input('jam_masuk'),
            "jam_keluar" => $request->input('jam_keluar'),
            "materi" => $request->input('materi'),
            "tugas" => $request->input('tugas'),
            "jumlahmhs_hadir" => $request->input('jumlahmhs_hadir'),
            "jumlahmhs_tdkhadir" => $request->input('jumlahmhs_tdkhadir'),
            "gambar" => $file,

        ]);

        return redirect()->route('home-AB-siswa');
    }

    public function editabsiswa($id)
    {
        $siswa = AbsenSiswa::where('id', $id)->first();
        return view('siswa.absensiswa.editabsiswa', compact('siswa'));
    }

    public function updateabsiswa(Request $request, $id)
    {
        $siswa = AbsenSiswa::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('absen');
            if ($siswa->gambar && file_exists(storage_path('App/public/', $siswa->gambar))) {
                Storage::delete('public/', $siswa->gambar);
                $file = $request->file('gambar')->store('absen');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $siswa->gambar;
        }

        $siswa->update([
            "jam_masuk" => $request->input('jam_masuk'),
            "jam_keluar" => $request->input('jam_keluar'),
            "materi" => $request->input('materi'),
            "tugas" => $request->input('tugas'),
            "jumlahmhs_hadir" => $request->input('jumlahmhs_hadir'),
            "jumlahmhs_tdkhadir" => $request->input('jumlahmhs_tdkhadir'),
            "gambar" => $file,
        ]);

        return redirect()->route('home-AB-siswa');
    }

    public function deleteabsiswa($id)
    {
        $siswa =AbsenSiswa::where('id', $id)->first();
        $siswa->delete();

        if ($siswa->gambar && file_exists(storage_path('app/public', $siswa->gambar))) {
            Storage::delete('public/', $siswa->gambar);
        }

        return redirect()->route('home-AB-siswa');
    }
}
