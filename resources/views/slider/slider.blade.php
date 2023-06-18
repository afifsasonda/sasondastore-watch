@extends('layouts.dashboard-main')

@section('title')
Product Pages
@endsection

@section('content')
{{-- {{ $products }} --}}
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-10">
                    <h6>Slider</h6>
                </div>
                @if (Auth::user()->roles == 'Admin')
                <div class="col-12 col-md-2 col-lg-2">
                    <a href="{{ url('/product-create') }}" class="btn btn-primary">Create</a>
                </div>
                @endif
                @if (Auth::user()->roles == 'Staff')
                <div class="col-12 col-md-2 col-lg-2">
                    <a href="{{ url('/product-create') }}" class="btn btn-primary">Create</a>
                </div>
                @endif

            </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="col-lg-5">
                <div class="card card-carousel overflow-hidden h-100 p-0">
                  <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner border-radius-lg h-100">
                      <div class="carousel-item h-100 active" style="background-image: url('/images/banner2.jpg'); background-size: cover;">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                          <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
