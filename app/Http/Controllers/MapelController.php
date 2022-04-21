<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function indexmapel(Request $request){

        if ($request->has('cari')) {
            $data_mapel = Mapel::where('nama_mapel', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $data_mapel = Mapel::all();
        }
        
      
        return view('mapel.homemapel', compact('data_mapel'));
    }

    public function tambahmapel(){
        return view('mapel.tambahmapel');
    }

    public function tambahdatamapel(Request $request){
        Mapel::create($request->all());
        return redirect()->route('index-mapel');
    }
    public function editmapel($id){
        $mapel = Mapel::where('id', $id)->first();
        return view('mapel.editmapel', compact('mapel'));
    }

    public function updatemapel(Request $request, $id){
        $mapel = Mapel::where('id', $id)->first();
        $mapel->update($request->all());
        return redirect()->route('index-mapel');
    }

    public function hapusmapel($id){
        $mapel = Mapel::where('id', $id)->first();
        $mapel->delete();
        return redirect()->route('index-mapel');
    }
}
