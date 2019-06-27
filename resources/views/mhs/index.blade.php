@extends('layouts.master')

@section('content')
<div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
             {{session('sukses')}}
            </div>
            @endif
    <div class="container">
    <div class="row">
    <div class="col-6">
    <h1>Data Mahasiswa</h1>
    </div>
    <div class="col-6">
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
        Tambah data
        </button>        
    </div>

<table class="table table-hover">
    <tr>
        <th>Nama</th>
        <th>Jenis kelamin</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Absensi</th>
    </tr>
    @foreach($data_mhs as $mhs)
    <tr>
        <td>{{$mhs->nama}}</td>
        <td>{{$mhs->jenis_kelamin}}</td>
        <td>{{$mhs->jurusan}}</td>
        <td>{{$mhs->semester}}</td>
        <td>{{$mhs->alamat}}</td>
        <td>{{$mhs->umur}}</td>
        <td>{{$mhs->absensi}}</td>
        <td>
        <a href="/mhs/{{$mhs->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
        <a href="/mhs/{{$mhs->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Mau Dihapus ?')">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>

    </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="mhs/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jenis kelamin</label>
                        <input name="jenis_elamin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kelas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> semester</label>
                        <input name="semester" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat yang mau dipinjam">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> alamat</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat yang mau dipinjam">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> umur</label>
                        <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat yang mau dipinjam">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> absensi</label>
                        <input name="absensi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat yang mau dipinjam">
                    </div>
                    
                    
                    
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary onclick="return confirm('Data Berhasil di simpan')">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        @endsection
