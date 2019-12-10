@extends('layouts/main')

@section('title','Data diri')

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
                                <h3 class="title-5 m-b-35">DATA DIRI PETERNAK</h3>
                                <form method="GET" action="{{ url('/datadiri/tambah') }}">
		                            <button type="submit" class="btn btn-info text-white">Tambah Data</button>
                                </form>
                                <br>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Nama Peternakan</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No Telepon</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pengguna as $user)
                                            <tr class="tr-shadow">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->nama }}</td>
                                                <td>{{ $user->namapeternakan }}</td>
                                                <td>{{ $user->alamat }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->notel }}</td>
                                                <td>
                                                    <a href="/datadiri/edit/{{$user->id}}" class="btn-sm btn-success text-white">edit</a>
                                                    <a href="/datadiri/destroy/{{$user->id}}" class="btn-sm btn-danger" onclick="return confirm('Hapus data {{ $user->nama }}?')">delete</a>
                                                </td>
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
