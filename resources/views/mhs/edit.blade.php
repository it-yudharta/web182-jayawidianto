@extends('layouts.master')

@section('content')
        <h1>Edit Data Mahasiswa</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
             {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
            <form action="/mhs/{{$mhs->id}}/update" method="POST">
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
@endsection