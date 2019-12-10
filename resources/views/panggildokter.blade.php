@extends('layouts/main')

@section('title','Panggil Dokter')

@section('container')
<div class="container">
  <div class="main-content">
    <div class="section__content section__content--p30">
      <h2 style="text-align:left">Panggil Dokter</h2><br />
      <form method="post" action="{{ route('panggil.dokter') }}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="Nama">Nama Pemanggil:</label>
            <input type="text" class="form-control" name="nama_pemanggil" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="Namapeternakan">Nomor Telepon:</label>
            <input type="number" class="form-control" name="no_telp" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="Alamat">Alamat:</label>
            <input type="text" class="form-control" name="alamat" required>
          </div>
        </div>

        <div>
          <label for="Alamat">Jenis Hewan:</label>
        </div>
        <div class="form-group">
          <div class="radio">
            <label class="form-group col-md-10">
            <input type="radio" value="Sapi" name="JenisHewan" > Sapi</label>
          </div>

          <div class="radio">
            <label class="form-group col-md-10">
            <input type="radio" value="Kambing" name="JenisHewan" > Kambing</label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="Username">Jumlah Hewan Sakit:</label><br>
            <input type="number" min="1" class="form-control" name="jumlah_hewan_sakit" value="" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="Password">Keluhan:</label>
            <input type="text" class="form-control" name="keluhan" value="" required>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-10">
            <label for="lokasi">Pilih Lokasi Anda</label>
            <input type="hidden" id="latitude" name="latitude" value="{{ old('latitude') }}" class="form-control">
            <input type="hidden" id="longitude" name="longitude" value="{{ old('longitude') }}" class="form-control">
            <div id="map" style="width:100%;height:500px;"></div>
          </div>
        </div>

        <input type="submit" class="btn btn-info text-white py-3 px-5" value="Simpan Data">
      </form>
    </div>
  </div>

  @endsection
  @section('custom')
  <script>
    var mapOptions, theMarker;
        mapOptions = {
                    center: [-8.173910, 113.695160],
                    zoom: 40
                }
         // Creating a map object
         var map = new L.map('map', mapOptions);
         
         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        
         // Adding layer to the map
         map.addLayer(layer);
         
         // Creating a Marker
         var markerOptions = {
            title: "MyLocation",
            clickable: true,
            draggable: true
         }
         // Creating a marker
         map.on('click', function(e) {
            if (theMarker != undefined) {
              map.removeLayer(theMarker);
        };
            theMarker = L.marker([e.latlng.lat, e.latlng.lng], markerOptions).addTo(map);
            $('#latitude').val(e.latlng.lat);
            $('#longitude').val(e.latlng.lng);
            alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
        });
         // Adding marker to the map
  </script>
  @endsection