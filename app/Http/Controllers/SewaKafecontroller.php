<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SewaKafecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $cafes = DB::table('cafes')
      ->join('daerahs','cafes.daerah','=','daerahs.id')
                    ->join('kategoris','cafes.kategori','=','kategoris.id')
                    ->select('cafes.*','daerahs.nama_daerah as daerah','kategoris.nama_kategori as kategori')
                    ->get();
        //
        /* $sewakafe = DB::table('sewakafes')
                    ->join('cafes','sewakafes.cafe','=','cafes.id')
                    ->join('users','sewakafes.id_user','=','users.id')
                    ->select('sewakafes.*','cafes.nama as cafe','users.email as id_user')
                    ->get();
        return view('skindex',['sewakafes' => $sewakafe]); */

        $sewakafe = DB::table('sewakafes')
                    ->join('cafes','sewakafes.cafe','=','cafes.id')
                    ->select('sewakafes.*','cafes.nama as cafe')
                    ->get();
        return view('layananKafe',['sewakafes' => $sewakafe]);
    }
 
 
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('sewakafes')->insert([
            'cafe' => $request->cafe,
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_telpon' => $request->nomor_telpon,
            'tanggal' => $request->tanggal,
            'acara' => $request->acara,
            'jumlah_orang' => $request->jumlah_orang,
            'keterangan' => $request->keterangan,
            'id_user' => $request->id_user
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response   
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hapus($id)
    {
        DB::table('sewakafes')->where('id',$id)->delete();
	    return redirect('/sewakafe');
    }

    public function tambah()
    {
        $cafe = DB::table('cafes')->get('nama');
        return view('sktambah',['cafes' => $cafe]);
    }
}
