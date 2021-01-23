@section('title', 'sewa barista');

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <a href="/sewabarista">Kembali</a><br/>
                <h1 class="mt-3">Sewa Barista</h1>
                <br/><br/>
                
                <form action="/sewabarista/index" method="post">
                    {{csrf_field()}}
                    
                    <!-- BELOM -->
                    <!-- pake dropdown yang value nya diambil dari table cafes -->
                    Kafe            : <input type="number" required="required" name="cafe"><br/>
                    
                    Nama            : <input type="text" required="required" name="nama"><br/>
                    Email           : <input type="text" required="required" name="email"><br/>
                    Nomor Telpon    : <input type="text" required="required" name="nomor_telpon"> <br/>
                    Tanggal         : <input type="date" required="required" name="tanggal"> <br/>
                    Acara           : <input type="text" required="required" name="acara"><br/>
                    Tempat          : <input type="text" required="required" name="tempat"><br/>
	                Keterangan      : <textarea name="keterangan"></textarea> <br/>
		            
                    <!-- BELOM -->
                    <!-- detect id user yang login -->
                    Id user         : <input type="number" required="required" name="id_user"><br/>
		            <input type="submit" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>