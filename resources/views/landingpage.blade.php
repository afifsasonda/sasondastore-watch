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
                @foreach ($sliders as $slider)
                <li class="{{ $loop->first ? 'active' : '' }}" data-target="#storeCarousel" data-slide-to="{{ $loop->iteration - 1 }}"></li>
                {{-- <li data-target="#storeCarousel" data-slide-to="1"></li>
                <li data-target="#storeCarousel" data-slide-to="2"></li> --}}
                @endforeach
              </ol>

              <div class="carousel-inner">
                @foreach ($sliders as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    @if ($slider->banner)
                    <img src="/banner/{{ $slider->banner }}" alt="carousel Image" class="d-block w-100"/>
                    @else
                    <img src="{{ asset('images/banner1.jpg') }}" alt="carousel Image" class="d-block w-100"/>
                    @endif
                </div>
                @endforeach

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
            {{-- <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="component-categories d-block">
                    <p class="categories-text">Pria</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="component-categories d-block">
                    <p class="categories-text">Wanita</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="component-categories d-block">
                    <p class="categories-text">Olahraga</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                <a href="#" class="component-categories d-block">
                    <p class="categories-text">Anak</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="component-categories d-block">
                    <p class="categories-text">SmartWatch</p>
                </a>
            </div> --}}
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
                        <input type="number" class="form-control" placeholder="Min Price" name="min_price" value="{{ request('min_price') }}">
                    </div>
                    {{-- <div class="col-sm-2">
                        <input type="number" class="form-control" placeholder="Max" name="max_price" value="{{ request('max_price') }}">
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
            <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
            @php $increamentproducts @endphp
            {{-- @foreach ($products as $product) --}}
            @if ($approvedProducts->isEmpty())
                <p>Tidak ada produk yang tersedia saat ini.</p>
            @else
            @foreach ($approvedProducts as $product)
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <a href="{{ route('detail', $product->id) }}" class="component-products d-block">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image: url('/photos/{{ $product->galleries->photos }}');"></div>
                </div>
                <div class="products-text">{{ $product->name }}</div>
                <div class="products-price">{{ $product->price }}</div>
              </a>
            </div>
            @endforeach
            @endif
        </div>
      </div>
    </section>
  </div>
@endsection
