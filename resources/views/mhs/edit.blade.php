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
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Anda"value="{{$mhs->absensi}}">
                    </div>
                    <div class="form-group">
                         <label for="exampleFormControlSelect1">Jenis kelamin</label>
                         <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                         <option value="L" @if($mhs->jenis_kelamin == 'L')selected @endif>Laki-Laki</option>
                         <option value="p" @if($mhs->jenis_kelamin == 'p')selected @endif>Perempuan</option>
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan"value="{{$mhs->absensi}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> semester</label>
                        <input name="semester" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Semester"value="{{$mhs->absensi}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> alamat</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat"value="{{$mhs->absensi}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> umur</label>
                        <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Umur"value="{{$mhs->absensi}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> absensi</label>
                        <input name="absensi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isi Nomor Absen" value="{{$mhs->absensi}}">
                    </div>
                    </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                         </form>
                         </div>
                    </div>
@endsection