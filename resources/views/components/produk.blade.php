@extends('layout.main')
@section('content')
@if (Request::is('produk'))
    <body style="overflow: auto">
      <h1 class="judul-produk mt-5">Products</h1>
<div class="container">
  <h1 class="judul-produk">PRODUK</h1>
  <div class="row kartu">
    <div class="col-md-4 ">
      <div class="card" style="width: 18rem;">
        <img src="/img/sc.webp" class="card-img-top gpr" alt="...">
        <div class="card-body">
          <h4 class="product-name">Gaming Chair</h4>
          <p class="card-text">#LIVEEVIL with the Secretlab Evil Geniuses Edition and pay tribute to one of North America’s oldest esports organizations. It’s time to embrace a future of dominance with EG</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 ">
      <div class="card" style="width: 16rem;">
        <img src="/img/js.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="product-name">Pro Jersey</h4>
          <p class="card-text">This jersey was made for EG players in the 2023 championship,in jerseys it means to win.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 ">
      <div class="card" style="width: 16rem;">
        <img src="/img/ms.webp  " class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="product-name">Mousepad</h4>
          <p class="card-text">This mouse pad is made specifically for playing games with a wide size to make playing comfortable</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 pt-5 ">
      <div class="card " style="width: 16rem;">
        <img src="/img/cap.webp  " class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="product-name">Cap</h4>
          <p class="card-text">This hat is made from comfortable material to protect the head from sunlight so that the head does not get hot</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 pt-5 ">
      <div class="card " style="width: 16rem;">
        <img src="/img/flag.jpg  " class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="product-name">Flag</h4>
          <p class="card-text">This flag was made to support the team when competing against opponents in matches so that the team would be more enthusiastic</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 pt-5 ">
      <div class="card " style="width: 16rem;">
        <img src="/img/hd.webp  " class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="product-name">Hoodie</h4>
          <p class="card-text">The hoodie is made from comfortable material to keep the body warm from the European cold and is suitable for wearing anywhere</p>
        </div>
      </div>
    </div>
  </div>
</div>
    </body>
@endif

@endsection