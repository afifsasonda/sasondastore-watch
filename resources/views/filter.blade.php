@extends('layouts.app')

@section('title')
Home Page
@endsection

@section('content')
{{-- page content home --}}
<div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="storeCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                <li data-target="#storeCarousel" data-slide-to="1"></li>
                <li data-target="#storeCarousel" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner">
                @forelse ($sliders as $slider)
                <div class="carousel-item active">
                  <img src="/banner/{{ $slider->banner }}" alt="carousel Image" class="d-block w-100"/>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    No Banners Found
                </div>
                @endforelse

                {{-- <div class="carousel-item">
                  <img src="/images/banner2.jpg" alt="carousel Image" class="d-block w-100"/>
                </div>

                <div class="carousel-item">
                  <img src="/images/banner3.jpg" alt="carousel Image" class="d-block w-100"/>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="store-trend-categories">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>Trend Categories</h5>
                </div>
            </div>
            <div class="row">
                @forelse ($categories as $category)
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="component-categories d-block">
                <p class="categories-text">{{ $category->name }}</p>
              </a>
            </div>

            @empty
            <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                No Categories Found
            </div>

            @endforelse
            </div>
        </div>
    </section>

    <section class="filter-page py-3">
        <div class="container px-4 px-lg-5">
            <form action="{{ url('/filter') }}" method="GET">
                @csrf
                <div class="row g-3 my-5">
                    <div class="col-sm-3 form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="name" value="{{ request('name') }}">
                        {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                    </div>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" placeholder="Min" name="min_price" value="{{ request('min_price') }}">
                    </div>
                    {{-- <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="Max" name="max_price" value="{{ request('max_price') }}">
                    </div> --}}
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary">Terapkan</button>
                    </div>
                </div>
            </form>
    </section>

    <section class="store-new-product">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Products</h5>
          </div>
        </div>
        <div class="row">
            @php $increamentproducts @endphp
            @if ($filterProducts->isEmpty())
                <p>Tidak ada produk yang cocok dengan filter yang diterapkan.</p>
            @else
            @foreach ($filterProducts as $filter)
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('detail', $filter->id) }}" class="component-products d-block">
                    <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('/photos/{{ $filter->galleries->photos }}');"></div>
                    </div>
                    <div class="products-text">{{ $filter->name }}</div>
                    <div class="products-price">{{ $filter->price }}</div>
                </a>
            </div>
            @endforeach

            @endif
        </div>
      </div>
    </section>
  </div>

@endsection
