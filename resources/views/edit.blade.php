@extends('layouts.app')
@section('title','Carikafe')
@section('content')
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Edit kafe</div>
                @foreach($cafes as $cf)
                <form action="/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $cf->id}}"><br/>
                    <div class="form-group"></div>
                    <label>Nama Kafe</label>
                    <input type="text" required="required" name="nama" class="form-control" value="{{ $cf->nama}}"  >
                    <div class="form-group"></div>
                    <label>Alamat</label>
                    <input type="text" required="required" name="alamat" class="form-control" value="{{ $cf->alamat}}"  >
                    <div class="form-group"></div>
                    <label>Daerah</label><br>
                    <select name="daerah">
                    <option value="1"> Kota Yogyakarta
                    <option value="2"> Sleman
                    <option value="3"> Bantul
                    <option value="4"> Gunungkidul
                    <option value="5"> Kulon Progo
                    </select> <br/>
                    <div class="form-group"></div>
                    <label>Nomor Telepon</label>
                    <input type="text" required="required" name="nomor_telpon" class="form-control" value="{{ $cf->nomor_telpon}}"  >
                    <div class="form-group"></div>
                    <label>Kategori</label><br>
                    <select name="kategori">
                    <option value="1" selected> Instagenic
                    <option value="2"> 24 Jam
                    <option value="3"> Acara
                    <option value="4"> Wifi kencang
                    <option value="5"> Lainnya
                    </select> <br/>
                    <div class="form-group"></div>
                    <label>Barista</label>
                    <input type="text" required="required" name="barista" class="form-control" value="{{ $cf->barista }}"  >
                    <div class="form-group"></div>
                    <label>Keterangan</label>
                    <input type="text" required="required" name="keterangan" class="form-control" value="{{ $cf->keterangan }}"  >
                    <input type="submit" value="Simpan Data">
                    <a href="/index/eyJpdiI6IkJsSEdsKzVrNG1Qb05nZU9LZ1FRSXc9PSIsInZhbHVlIjoiXC9mQVpWZkJmVGhMMnlaN0NPZmFEM2c9PSIsIm1hYyI6ImI5OWE0OTZiODI0M2QwMDJiYWFiOTdiZTRlZGEyMWM5MzhmNWNhNjY2OThiMzZjZGU1ODA2ZDllODc2YjEzMWYifQ==">Kembali</a><br/>
                </form>
                @endforeach

        </div>
    </div>
</div> </div>

@endsection
<!-- @section('title', 'Data Cafe');

@section('container') -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-10">
                <a href="/index">Kembali</a><br/>
                <h1 class="mt-3">Edit data kafe</h1>
                <br/><br/>
                @foreach($cafes as $cf)
                <form action="/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $cf->id}}"><br/>
                    Nama            : <input type="text" required="required" name="nama" value="{{ $cf->nama}}"><br/>
                    Alamat          : <textarea required="required" name="alamat">{{ $cf->alamat }}</textarea> <br/>
                    Daerah          : <br/> 
                    <select name="daerah">
                    <option value="1"> Kota Yogyakarta
                    <option value="2"> Sleman
                    <option value="3"> Bantul
                    <option value="4"> Gunungkidul
                    <option value="5"> Kulon Progo
                    </select> <br/>
                    Nomor Telpon    : <input type="text" required="required" name="nomor_telpon" value="{{ $cf->nomor_telpon }}"> <br/>
                    Kategori        : <br/> <select name="kategori">
                    <option value="1" selected> Instagenic
                    <option value="2"> 24 Jam
                    <option value="3"> Acara
                    <option value="4"> Wifi kencang
                    <option value="5"> Lainnya
                    </select> <br/>
                    Barista         : <input type="text" required="required" name="barista" value="{{ $cf->barista }}"> <br/>
	                Keterangan      : <textarea required="required" name="keterangan">{{ $cf->keterangan }}</textarea> <br/>
                    <input type="submit" value="Simpan Data">
                </form>
                @endforeach
            </div>
        </div>
    </div> -->

<!-- @endsection -->