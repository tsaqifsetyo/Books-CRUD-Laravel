@extends('layouts.master')

@section('content')
        <h1>Edit Data Siswa</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif

            <div class="row">
                <div class="col-lg-12">
            <form action="/buku/{{$buku->id}}/update" method="POST">
      {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">JUDUL</label>
    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Judul Buku" value="{{$buku->judul}}">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">PENERBIT</label>
    <input name="penerbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Penerbit" value="{{$buku->penerbit}}">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">TAHUN TERBIT</label>
    <input name="tahun_terbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tahun Terbit"value="{{$buku->tahun_terbit}}">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">PENGARANG</label>
    <input name= "pengarang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pengarang"value="{{$buku->pengarang}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
    </div>
@endsection