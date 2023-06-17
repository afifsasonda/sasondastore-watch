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
                <div class="carousel-item active">
                  <img src="/images/banner1.jpg" alt="carousel Image" class="d-block w-100"/>
                </div>

                <div class="carousel-item">
                  <img src="/images/banner2.jpg" alt="carousel Image" class="d-block w-100"/>
                </div>

                <div class="carousel-item">
                  <img src="/images/banner3.jpg" alt="carousel Image" class="d-block w-100"/>
                </div>
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
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <p class="categories-text">Couple</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
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
          </div>
        </div>
      </div>
    </section>

    <section class="store-new-product">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('detail') }}" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('images/product-couple1.jpg');"></div>
              </div>
              <div class="products-text">Couple Quartz Watch</div>
              <div class="products-price">IDR.500000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product-couple2.jpg');"></div>
              </div>
              <div class="products-text">Luxury Lover's Watches</div>
              <div class="products-price">IDR.700000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product-pria2.jpg');"></div>
              </div>
              <div class="products-text">Casio Mens Black</div>
              <div class="products-price">IDR.300000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product-wanita1.jpeg');"></div>
              </div>
              <div class="products-text">OLEVS Watch</div>
              <div class="products-price">IDR.250000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product-olahraga2.jpg');"></div>
              </div>
              <div class="products-text">Garmin Instinct</div>
              <div class="products-price">IDR.900000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product-anak2.jpg');"></div>
              </div>
              <div class="products-text">Kids Dolphin Watch</div>
              <div class="products-price">IDR.100000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product-smartwatch1.jpg');"></div>
              </div>
              <div class="products-text">Fitbit Versa 2</div>
              <div class="products-price">IDR.4000000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product-smartwatch2.jpg');"></div>
              </div>
              <div class="products-text">Apple Watch 4</div>
              <div class="products-price">IDR.6000000</div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection
