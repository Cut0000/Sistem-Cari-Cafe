@extends('layouts.app')

@section('content')


			<div class="col-md-10 offset-md-1 col-lg-8 ">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">Keranjang Reservasi Kafe</h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
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
                            <th scope="col">Jumlah orang</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Waktu sewa(jam)</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    </tbody>
                        @foreach($sewakafes as $sk)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td> {{$sk->cafe}} </td>
                            <td> {{$sk->nama}} </td>
                            <td> {{$sk->email}} </td>
                            <td> {{$sk->nomor_telpon}} </td>
                            <td> {{$sk->tanggal}} </td>
                            <td> {{$sk->acara}} </td>
                            <td> {{$sk->jumlah_orang}} </td>
                            <td> {{$sk->keterangan}} </td>
                            <td> {{$sk->id_user}} </td>
                            <td>
                                <a href="/sewakafe/delete/{{ $sk->id }}" class="badge badge-danger">cancel</a>
                                
                            </td>
                        </tr>
                        @endforeach
					</table>
          <br/><br/>
                <a href="/profil">Kembali</a><br/>

<!--                 <a href="/sewakafe/tambah">Tambah data</a><br/>
 -->					
				</div>



	
@endsection