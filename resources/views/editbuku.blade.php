@extends('layout.main')
@section('content')
<h2 class="text-center mt-5 fw-light">Halaman Edit Data Golongan</h2>
<a href="/bukutamu" class="text-center d-block">Kembali</a>

<div class="container mt-5">
    

    <form method="POST" action="/bukutamu/update">
        @csrf
        <input type="hidden" name="id" id="id" value="{{$bukutamu->id}}">
        <div class="mb-3">
          <label for="" class="form-label">Nama</label>
          <input type="text" class="form-control" name ="nama" value="{{old('nama',$bukutamu->nama)}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">No Telepon</label>
            <input type="text" class="form-control" name ="no_telepon" value="{{old('no_telepon',$bukutamu->no_telepon)}}" >
          </div>

        <div class="mb-3">
          <label for="" class="form-label">Pesanan</label>
          <input type="text" class="form-control" name ="pesanan" value="{{old('pesanan',$bukutamu->pesanan)}}" >
        </div>

        <label class="form-label">Status</label>
        <select class="form-select" name="status" aria-label="Default select example">
          <option selected>....</option>
          <option value="Pending">Pending</option>
          <option value="Berhasil">Berhasil</option> 
          <option value="Proses">Proses</option>
          <option value="Dibatalkan">Dibatalkan</option>
        </select>



        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
      
</div>
@endsection