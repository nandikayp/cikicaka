@extends('layout.main')
@section('content')
<div class="container">

<table class="table table-striped-column  table-bordered m-auto">
    <tr class="table-dark">
        <button class="btn-data btn btn-primary text-light mb-3 mt-5"><a href="/bukutamu/tambah" class="text-center text-white add d-block">Add Data</a></button>
        <th>#</th>
        <th>Nama</th>
        <th>No Telepon</th>
        <th>Pesanan</th>
        <th>Status</th>
        <th>Opsi</th>
        @foreach ($data as $b)
        <tr class="table-succsess">
            <td class="table-secondary">{{$loop->iteration}}</td>
            <td class="table-secondary">{{$b->nama}}</td>
            <td class="table-secondary">{{$b->no_telepon}}</td>
            <td class="table-secondary">{{$b->pesanan}}</td>
            <td class="table-secondary">{{$b->status}}</td>
            <td class="table-secondary d-flex">
              <a href="/bukutamu/edit/{{$b->id}}" class="badge rounded-pill text-bg-dark text-decoration-none">Edit</a>
              |
              <form action="/bukutamu/{{$b->id}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="badge rounded-pill text-bg-secondary text-decoration-none border-0">Hapus</button>
              </form>
            </td>
        </tr>
        @endforeach
    </tr>
</table>
</div>

@endsection