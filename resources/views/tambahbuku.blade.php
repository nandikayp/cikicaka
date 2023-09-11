@extends('layout.main')
@section('content')
<div class="container mt-5 ">
    <br/>

    <form method="POST" action="/bukutamu/store">
       @csrf
        <div class="mb-3">
          <label class="form-label" >Nama</label>
          <input type="" class="form-control" name="nama">
        </div>
   
        <div class="mb-3">
          <label class="form-label" >No Telepon</label>
          <input type="" class="form-control" name="no_telepon">
        </div>
   

          <div class="mb-3">
          <label class="form-label" >Pesanan</label>
          <input type="" class="form-control" name="pesanan">
         </div>

         <label class="form-label">Status</label>
         <select class="form-select" name="status" aria-label="Default select example">
           <option selected>....</option>
           <option value="Pending">Pending</option>
           <option value="Berhasil">Berhasil</option> 
           <option value="Proses">Proses</option>
           <option value="Dibatalkan">Dibatalkan</option>
         </select>

     
        <button type="submit" class="btn btn-warning mt-3">Tambah</button>
      </form>
</div>
@endsection