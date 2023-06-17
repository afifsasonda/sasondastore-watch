@extends('layouts.app')

@section('title')
Detail Page
@endsection

@section('content')
<!-- page content detail-->
<div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  <a href="">Product Details</a>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4" data-aos="zoom-in">
            <img src="/images/product-couple1" class="w-100 main-image" alt="">
          </div>
        </div>
      </div>
    </section>

    <div class="store-details-container" data-aos="fade-up">
      <section class="store-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h1>Sofa Ternyaman</h1>
              <div class="owner">By Afif Dwi Sasonda</div>
              <div class="price">$1,409</div>
            </div>
            <div class="col-lg-2" data-aos="zoom-in">
              <a href="/cart.html" class="btn btn-success px-4 text-white btn-block mb-3">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="store-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-12" style="text-align: justify;">
              <p>
                The Nike Air Max 720 SE goes bigger than ever before with Nike's
                tallest Air unit yet for unimaginable, all-day comfort. There's super
                breathable fabrics on the upper, while colours add a modern edge.
              </p>
              <p>
                Bring the past into the future with the Nike Air Max 2090, a bold look
                inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air
                cushioning underfoot adds unparalleled comfort while transparent
                mesh and vibrantly coloured details on the upper are blended with
                timeless OG features for an edgy, modernised look.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="store-review">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8 mt-3 mb-3">
               <h5>Customer Review(3)</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-12">
              <ul class="list-unstyled">
                <li class="media">
                  <img src="/images/icon-review-1.png" alt="" class="mr-3 rounded-circle">
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Hazza Risky</h5>
                    I thought it was not good for living room. I really happy
                    to decided buy this product last week now feels like homey.
                  </div>
                </li>
                <li class="media">
                  <img src="/images/icon-review-2.png" alt="" class="mr-3 rounded-circle">
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                    Color is great with the minimalist concept. Even I thought it was
                    made by Cactus industry. I do really satisfied with this.
                  </div>
                </li>
                <li class="media">
                  <img src="/images/icon-review-3.png" alt="" class="mr-3 rounded-circle">
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Dakimu Wangi</h5>
                    When I saw at first, it was really awesome to have with.
                    Just let me know if there is another upcoming product like this.
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
