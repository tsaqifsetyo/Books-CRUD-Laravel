   @extends('layouts.master')

   @section('content')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif

            <div class="row">
                <div class=col-6>
                <h1>DATA BUKU</h1>
                </div>

                <div class=col-6>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data Buku
                </button>
                </div>
                <div class="table table-hover">   
                    <table>
                        <tr>
                            <th>JUDUL</th>
                            <th>PENERBIT</th>
                            <th>TAHUN TERBIT</th>
                            <th>PENGARANG</th>
                            <th>Tools</th>
                        </tr>
                    @foreach($data_buku as $buku)
                        <tr>
                            <td>{{$buku->judul}}</td>
                            <td>{{$buku->penerbit}}</td>
                            <td>{{$buku->tahun_terbit}}</td>
                            <td>{{$buku->pengarang}}</td>  
                            <td>
                            <a href="/buku/{{$buku->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/buku/{{$buku->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin di hapus?')">Delete</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/buku/create" method="POST">
      {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">JUDUL</label>
    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Judul Buku">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">PENERBIT</label>
    <input name="penerbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Penerbit">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">TAHUN TERBIT</label>
    <input name="tahun_terbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tahun Terbit">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">PENGARANG</label>
    <input name= "pengarang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pengarang">
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>  
  </div>
</div>
@endsection