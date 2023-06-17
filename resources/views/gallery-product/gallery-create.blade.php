@extends('layouts.dashboard-main')

@section('title')
Gallery Page
@endsection

@section('content')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger mb-3 m-auto" role="alert">Whoops! <strong>There were some problems with your input. </strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container py-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <h6>Create Gallery Product</h6>
              </div>
            </div>
            <div class="card-body px-lg-3 pt-3 pb-2">
                <form action="{{ url('/product-gallery-create-post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Product_ID</label>
                        <select name="products_id" class="form-control @error('products_id') is-invalid @enderror">
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        @error('products_id')
                            <div class="alert alert-danger mt-2">
                                <p>Sesuaikan dengan Product</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Photos</label>
                        <input type="file" class="form-control-file @error('photos') is-invalid @enderror" name="photos">
                        @error('photos')
                            <div class="alert alert-danger mt-2">
                                <p>jpg,png,jpeg</p>
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn btn-primary" id="btn-submit" name="tambah">Save</button>
                    <button type="reset" class="btn btn-warning" name="reset">Reset</button>
                    <a href="{{ url('/product-gallery') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
