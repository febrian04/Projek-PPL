@extends('layouts/main')

@section('title','Panggil Dokter')

@section('container')
<div class="container">
  <div class="main-content">
    <div class="section__content section__content--p30">
      <h2 style="text-align:left">Hasil Analisis Panggil Dokter</h2><br />
      
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Dokter yang disarankan : {{ $hasil->nama }}</h4>
              <p class="card-text">No Telpon Dokter : {{ $hasil->nomortelepon }} </p>
          </div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item">Jarak dari Rumah : {{ $hasil->jarak }} Km</li>
          <li class="list-group-item">Perkiraan Waktu Sampai : {{ $hasil->jarak/60 }} Jam </li>
          </ul>
      </div>
      <br>
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Pembayaran</h4>
          </div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item">lakukan pembayaran pada rekening 09812039786149619 A/N Febrian</li>
          </ul>
      </div>
      <form method="GET" action="{{ url('/pembayaran') }}">
      <br>
		<button type="submit" class="btn btn-info text-white">Pembayaran</button>
      </form>
    </div>
  </div>

  @endsection
 