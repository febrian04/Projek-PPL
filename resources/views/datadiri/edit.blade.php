@extends('layouts/main')

@section('title','Edit Data Peternak')

@section('container')
    <div class="container">
    <div class="main-content">
      <div class="section__content section__content--p30">
      <h2 style="text-align:left">Edit Data Peternak</h2><br/>

        @foreach($pengguna as $p)
            <form method="post" action="/datadiri/update" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $p->id }}">
                <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-10">
                    <label for="Nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" value="{{ $p->nama }}">
                </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-10">
                    <label for="Namapeternakan">Nama Pternakan:</label>
                    <input type="text" class="form-control" name="namapeternakan" value="{{ $p->namapeternakan }}">
                </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-10">
                    <label for="Alamat">Alamat:</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $p->alamat}}">
                    </div>
                </div>
                
                <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-10">
                    <label for="Email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ $p->email }}">
                </div>
                </div>

                <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-10">
                    <label for="notel">No telepon:</label><br>
                    <input type="text" class="form-control" name="notel" value="{{ $p->notel }}">
                </div>
                </div>

                <input type="submit" class="btn btn-info text-white py-3 px-5" value="Simpan Data">
            </form>
        @endforeach    
      </div>
      </div>
    </div>
@endsection