@extends('layouts.app')

@section('content') 
          <div class="section" data-aos="fade-up">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-8  text-center">
                <h2 class="mb-3">Sewa Barista</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum fuga, alias distinctio voluptatum magni voluptatibus.</p> -->
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form action="#">
                  <div class="row mb-4">
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Nama Kafe</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" class="form-control" name="cafe" required="required" value="{{$c->nama}}">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Nama Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" class="form-control" id="nama" placeholder="masukkan nama anda">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-email"></span>
                        <input type="email" class="form-control" id="email" placeholder="masukkan email anda">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Nomor Telpon Pemesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" class="form-control" id="nomor_telpon" placeholder="masukkan no telpon">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="date" class="label">Tanggal Pesan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-calendar"></span>
                        <input type="date" class="form-control" id="tanggal" placeholder="masukkan tanggal reservasi">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Acara</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" class="form-control" id="acara" placeholder="masukkan acara anda">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Jumlah Orang</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="number" class="form-control" id="jumlah_orang" placeholder="masukkan jumlah orang">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Keterangan</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="textarea" class="form-control" id="keterangan" placeholder="masukkan tambahan keperluan acara">
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