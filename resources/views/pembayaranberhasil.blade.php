@extends('layouts/main')

@section('title','Panggil Dokter')

@section('container')
<div class="row">
		<div class="container">
 
			<h2 class="text-center my-5">File Berhasil DI Upload</h2>
            <h3 class="text-center my-5">silahkan tunggu konfirmasi dokter</h3>
            <form class="text-center my-5" method="GET" action="{{ url('/datapanggil') }}">
		        <button type="submit" class="btn btn-info text-white">Data Pemeriksaan</button>
            </form>
			
		</div>
	</div>

  @endsection
 