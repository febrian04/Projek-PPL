@extends('layouts/main')

@section('title','Tambah Peternak')

@section('container')
    <div class="container">
    <div class="main-content">
      <div class="section__content section__content--p30">
      <h2 style="text-align:left">Tambah Peternak</h2><br/>
      <form method="post" action="/datadiri/store" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="Nama">Nama:</label>
            <input type="text" class="form-control" name="nama">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="Namapeternakan">Nama Pternakan:</label>
            <input type="text" class="form-control" name="namapeternakan">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-10">
              <label for="Alamat">Alamat:</label>
              <input type="text" class="form-control" name="alamat">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="Email">Email:</label>
            <input type="text" class="form-control" name="email">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="notel">No Telepon:</label><br>
            <input type="text" class="form-control" name="notel" value="">
          </div>
        </div>

        <input type="submit" class="btn btn-info text-white py-3 px-5" value="Simpan Data">
      </form>
      </div>
      </div>
    </div>
@endsection