@section('title', 'Sewa Kafe');

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <a href="/sewakafe/index">Kembali</a><br/>
                <h1 class="mt-3">Sewa Kafe</h1>
                <br/><br/>
                
                <form action="/sewakafe/index" method="post">
                    {{csrf_field()}}
                    
                    <!-- BELOM -->
                    <!-- pake dropdown yang value nya diambil dari table cafes -->
                      <div class="form-group"></div>
                    <label>Kafe yang dituju</label><br>
                    
                    <!-- <select name="nama">
                    @foreach($cafes as $c)
                    <option> {{ $c->nama }}
                    @endforeach
                    </select> -->

                    <input type="number" required="required" name="cafe"><br/>
                   <br>
                    Nama Pemesan    : <input type="text" required="required" name="nama"><br/>
                    Email           : <input type="text" required="required" name="email"><br/>
                    Nomor Telpon    : <input type="text" required="required" name="nomor_telpon"> <br/>
                    Tanggal         : <input type="date" required="required" name="tanggal"> <br/>
                    Acara           : <input type="text" required="required" name="acara"><br/>
                    Jumlah orang    : <input type="number" required="required" name="jumlah_orang"><br/>
	                Keterangan      : <textarea name="keterangan"></textarea> <br/>
		            
                    <!-- BELOM -->
                    <!-- detect id user yang login -->
                    Id user         : <input type="number" required="required" name="id_user"><br/>
                    <input type="submit" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>