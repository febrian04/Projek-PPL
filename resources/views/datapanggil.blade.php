@extends('layouts/main')

@section('title','Panggil Dokter')

@section('container')
<div class="container">
        
    <div class="main-content">
        @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
        @endif
                <div class="section__content section__content--p30">
                    
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">DATA PANGGIL DOKTER</h3>
                                <br>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Pemanggil</th>
                                                <th>No Telepon</th>
                                                <th>Alamat</th>
                                                <th>Jumlah Hewan Sakit</th>
                                                <th>Jenis Hewan</th>
                                                <th>Keluhan</th>
                                                @if (Auth::user()->hasAnyRole('admin'))
                                                <th>Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($panggil as $user)
                                            <tr class="tr-shadow">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->nama_pemanggil }}</td>
                                                <td>{{ $user->no_telp }}</td>
                                                <td>{{ $user->alamat }}</td>
                                                <td>{{ $user->jumlah_hewan_sakit }}</td>
                                                <td>{{ $user->jenis_hewan }}</td>
                                                <td>{{ $user->keluhan }}</td>
                                                @if (Auth::user()->hasAnyRole('admin'))
                                                <td>
                                                    <a href="/destroy/{{$user->id}}" class="btn-sm btn-danger" onclick="return confirm('Hapus data {{ $user->nama_pemanggil }}?')">delete</a>
                                                </td>
                                                @endif

                                                @if (Auth::user()->hasAnyRole('dokter'))
                                                <td>
                                                    <a href="/edit/{{$user->id}}" class="btn btn-info text-white" >Input Hasil</a>
                                                </td>
                                                @endif
                                            </tr>
                                            <tr class="spacer"></tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        </div>                              
    </div>
  @endsection
 