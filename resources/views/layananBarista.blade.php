@extends('layouts.app')

@section('content')				
                <!-- Recently Favorited -->
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Data sewa barista</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kafe</th>
                            <th scope="col">Nama pemesan</th>
                            <th scope="col">Email pemesan</th>
                            <th scope="col">No telpon pemesan</th>
                            <th scope="col">Tanggal</th>   
                            <th scope="col">Acara</th>
                            <th scope="col">Tempat acara</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Jumlah Barista</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    </tbody>
                        @foreach($sewabaristas as $sb)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td> {{$sb->cafe}} </td>
                            <td> {{$sb->nama}} </td>
                            <td> {{$sb->email}} </td>
                            <td> {{$sb->nomor_telpon}} </td>
                            <td> {{$sb->tanggal}} </td>
                            <td> {{$sb->acara}} </td>
                            <td> {{$sb->tempat}} </td>
                            <td> {{$sb->keterangan}} </td>
                            <td> {{$sb->id_user}} </td>
                            <td>
                                <a href="/sewabarista/delete/{{ $sb->id }}" class="badge badge-danger">cancel</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
                <br/><br/>
                <a href="/profil">Kembali</a><br/>

<!--                 <a href="/sewabarista/tambah">Tambah data</a><br/>
 -->            </div>
        </div>
    </div>
    @endsection
