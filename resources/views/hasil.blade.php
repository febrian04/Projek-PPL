@extends('layouts/main')

@section('title','Edit Data Pemeriksaan')

@section('container')
    <div class="container">
    <div class="main-content">
      <div class="section__content section__content--p30">
      <h2 style="text-align:left">Edit Data Pemeriksaan</h2><br/>

        @foreach($hasildokter as $h)
            <form method="post" action="/update" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $h->id }}">
                <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-10">
                    <label for="Nama">Nama Pemanggil:</label>
                    <input type="text" class="form-control"  name="nama_pemanggil" value="{{ $h->nama_pemanggil }}">
                </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-10">
                    <label for="Namapeternakan">Nomor Telepon:</label>
                    <input type="number" class="form-control" name="no_telp" value="{{ $h->no_telp }}">
                </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-10">
                    <label for="Alamat">Alamat:</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $h->alamat}}">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-10">
                        <label for="Email">Jumlah Hewan:</label>
                        <input type="text" class="form-control" name="jumlah_hewan_sakit" value="{{ $h->jumlah_hewan_sakit }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-10">
                        <label for="Email">Jenis Hewan:</label>
                        <input type="text" class="form-control" name="jenis_hewan" value="{{ $h->jenis_hewan }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-10">
                        <label for="notel">Keluhan:</label><br>
                        <input type="text" class="form-control" name="keluhan" value="{{ $h->keluhan }}">
                    </div>
                </div>

                <div>
                    <label for="Alamat">Jenis Penyakit:</label>
                    </div>
                    <div class="form-group" >
                    <div class="radio" >
                        <label class="form-group col-md-10">
                        <input type="radio" value="Brucellosis" name="JenisPenyakit" > Brucellosis</label>
                    </div>

                    <div class="radio">
                        <label class="form-group col-md-10">
                        <input type="radio" value="Radang Ambing" name="JenisPenyakit" > Radang Ambing</label>
                    </div>

                    <div class="radio">
                        <label class="form-group col-md-10">
                        <input type="radio" value="Pink Eye" name="JenisPenyakit" > Pink Eye</label>
                    </div>

                    <div class="radio">
                        <label class="form-group col-md-10">
                        <input type="radio" value="Bloat" name="JenisPenyakit" > Bloat</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-10">
                        <label for="Alamat">Hasil:</label>
                        <input type="text" class="form-control" name="hasil" value="{{ $h->hasil }}" required>
                    </div>
                </div>

                <input type="submit" class="btn btn-info text-white py-3 px-5" value="Simpan Data">
            </form>
        @endforeach    
      </div>
      </div>
    </div>
@endsection