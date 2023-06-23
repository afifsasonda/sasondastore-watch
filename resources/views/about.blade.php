@extends('layouts.app')

@section('title')
About Page
@endsection

@section('content')

<div class="page-content page-home">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="breadcrumb-item active">
                    <a href="{{ url('/about') }}">About</a>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h3>About Me</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    <p><span style="color: blue">SNStore Watch</span> merupakan sebuah store yang menjual berbagai jenis product jam tangan mulai dari jam tangan
                    couple, jam tangan pria, wanita, olahraga hingga penjualan jam tangan smart watch</p>
                </div>
            </div>
            {{-- <div class="row">
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

            @endforelse --}}

            <div class="row">
                <div class="col-6 col-md-3 col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="component-categories d-block">
                      <p class="categories-text">+6281364335995</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
