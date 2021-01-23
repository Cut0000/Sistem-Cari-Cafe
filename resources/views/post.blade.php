@extends('main.main')
@section('content')

        @foreach($cafes as $c)


         <div class="container">
          <div class="row">
            

            <div class="col-lg-8 mx-auto">

              <div class="modal-body">
                

                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">{{$c->nama}}</h2>
                <p class="item-intro text-muted">Daerah: {{$c->daerah}}</p>
                <img class="img-fluid d-block mx-auto" src="{{url('/data_file/'.$c->gambar)}}">
                <p>Alamat : {{$c->alamat}}</p>
                <ul class="list-inline">
                  <li>Waktu buka: {{$c->keterangan}}</li>
                  <li>Kategori: {{$c->kategori}}</li>
                  <li>Id Kafe: {{$c->id}}</li>
                </ul>
                <left>
                <a href="/"><button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Tutup</button></a>
                </left>
                

              </div>


            </div>

             
        </div></div>
<br \>

        <div class="section" data-aos="fade-up">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-8  text-center">
                <h2 class="mb-3">Reservasi Kafe</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">

                <form action="/sewakafe/index" method="post">
                                      {{csrf_field()}}

                  <div class="row mb-4">
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Id Kafe </label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="number" required="required" name="cafe" placeholder="masukkan id kafe '{{$c->id}}'" class="form-control"><br/>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Nama Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" required="required" name="nama"placeholder="masukkan nama anda" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-email"></span>
                        <input type="text" required="required" name="email" placeholder="masukkan email anda" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Nomor Telpon Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" required="required" name="nomor_telpon" placeholder="masukkan no telpon" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="date" class="label">Tanggal Pesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-calendar"></span>
                        <input type="date" required="required" name="tanggal" placeholder="masukkan tanggal reservasi" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Acara</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" required="required" name="acara" placeholder="masukkan acara anda" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Jumlah Orang</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="number" required="required" name="jumlah_orang" placeholder="masukkan jumlah orang" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Keterangan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input textarea name="keterangan" placeholder="masukkan tambahan keperluan acara" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Selama(jam)</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="number" required="required" name="id_user" placeholder="masukkan berapa jam reservasi" class="form-control">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Simpan Data" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> <!-- .section -->

<br \>
        <div class="section" data-aos="fade-up">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-8  text-center">
                <h2 class="mb-3">Sewa Barista</h2>
                
              </div>
            </div>

                    <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">

                <form action="/sewabarista/index" method="post">
                                      {{csrf_field()}}

                  <div class="row mb-4">
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Id Kafe </label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="number" required="required" name="cafe" placeholder="masukkan id kafe '{{$c->id}}'" class="form-control"><br/>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Nama Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" required="required" name="nama" placeholder="masukkan nama anda" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-email"></span>
                        <input type="text" required="required" name="email" placeholder="masukkan email anda" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Nomor Telpon Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" required="required" name="nomor_telpon" placeholder="masukkan no telpon" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="date" class="label">Tanggal Pesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-calendar"></span>
                        <input type="date" required="required" name="tanggal" placeholder="masukkan tanggal reservasi" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Acara</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" required="required" name="acara" placeholder="masukkan acara anda" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Tempat Acara</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" required="required" name="tempat" placeholder="masukkan tempat acara anda" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Keterangan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input textarea name="keterangan" placeholder="masukkan tambahan lain" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Jumlah Barista</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="number" required="required" name="id_user" placeholder="masukkan jumlah barista" class="form-control">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Simpan Data" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> <!-- .section -->

        @endforeach


