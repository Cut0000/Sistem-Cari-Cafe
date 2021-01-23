@section('title', 'Data sewa kafe');

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Data sewa kafe</h1>
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
                            <th scope="col">User</th>
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
                <a href="/sewakafe/tambah">Tambah data</a><br/>
            </div>
        </div>
    </div>