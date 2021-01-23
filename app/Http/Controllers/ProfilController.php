<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ProfilController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){
		$cafe = DB::table('cafes')
                    ->join('daerahs','cafes.daerah','=','daerahs.id')
                    ->join('kategoris','cafes.kategori','=','kategoris.id')
                    ->select('cafes.*','daerahs.nama_daerah as daerah','kategoris.nama_kategori as kategori')
                    ->get();
		return view('profilKafe',['cafes' => $cafe]);
	}
	   //  public function edit()
    // {
    //     // $cafe = DB::table('cafes')->get();
    //     return view('editGambar');
    // }

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

     public function reservasi()
    {
        // $cafe = DB::table('cafes')->get();
        return view('layananKafe');
    }

    public function sewabarista()
    {
        // $cafe = DB::table('cafes')->get();
        return view('layananBarista');
    }

}