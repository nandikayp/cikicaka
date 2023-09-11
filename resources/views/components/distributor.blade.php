@extends('layout.main')
@section('content')
<div class="container  my-5">
    <div class="row  p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Our <span class="text-evil">Distributor</span></h1>
        <p class="lead">Our products sell various kinds of apparel with unique packaging. We have sold around Europe and also abroad, namely Singapore and we have attractive and quality packaging when sent overseas the product will remain safe and not easily damaged.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="/"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Profil</button></a>
          <a href="/produk"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Product</button></a>
        </div>
      </div>
      <div class="col-lg-4  p-0 overflow-hidden ">
          <img class="rounded-lg-3 img-ds" src="/img/egh.jpg" alt="" width="300">
      </div>
    </div>
  </div>
@endsection