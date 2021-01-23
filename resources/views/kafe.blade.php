@extends('layouts.app')

@section('content') 
@foreach($cafes as $c)
<div class="section" data-aos="fade-up">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-8  text-center">
                <h2 class="mb-3">Reservasi Kafe</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum fuga, alias distinctio voluptatum magni voluptatibus.</p> -->
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form action="/sewakafe/index">
                  <div class="row mb-4">
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Nama Kafe</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
<!--                         <input type="number" required="required" name="cafe" value="{{$c->nama}}"><br/>
 -->                        <input disabled type="text" class="form-control" name="cafe" required="required" value="{{$c->nama}}">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Nama Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" class="form-control" name="nama" placeholder="masukkan nama anda">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-email"></span>
                        <input type="email" class="form-control" name="email" placeholder="masukkan email anda">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Nomor Telpon Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" class="form-control" name="nomor_telpon" placeholder="masukkan no telpon">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="date" class="label">Tanggal Pesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-calendar"></span>
                        <input type="date" class="form-control" name="tanggal" placeholder="masukkan tanggal reservasi">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Acara</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" class="form-control" name="acara" placeholder="masukkan acara anda">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Jumlah Orang</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="number" class="form-control" name="jumlah_orang" placeholder="masukkan jumlah orang">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Keterangan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="textarea" class="form-control" name="keterangan" placeholder="masukkan tambahan keperluan acara">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Submit">
                      <!-- <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> <!-- .section -->
@endforeach

 @endsection
