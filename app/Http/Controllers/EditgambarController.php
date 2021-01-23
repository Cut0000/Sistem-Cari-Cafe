<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditgambarController extends Controller
{
	public function index(){
		$cafe = DB::table('cafes')
                    ->join('daerahs','cafes.daerah','=','daerahs.id')
                    ->join('kategoris','cafes.kategori','=','kategoris.id')
                    ->select('cafes.*','daerahs.nama_daerah as daerah','kategoris.nama_kategori as kategori')
                    ->get();
		return view('profilKafe',['cafes' => $cafe]);
	}

	    public function edit($id)
    {
        $cafe = DB::table('cafes')->where('id',$id)->get();
        return view('editGambar',['cafes' => $cafe]);
    }

    public function update(Request $request)
    {
        //untuk tambah ke database
        $this->validate($request,['gambar'=>'required|file|image']);

        $file = $request->file('gambar');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';

        $file->move($tujuan_upload,$nama_file);

        $cafe = DB::table('cafes')->get();

        DB::table('cafes')->where('id',$request->id)->update([
            'gambar' => $nama_file

        ]);
        return redirect('/profil');
    }

}