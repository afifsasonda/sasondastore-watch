@extends('layouts.dashboard-main')

@section('title')
Product Edit
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
                <h6>Edit Products table</h6>
              </div>
            </div>
            <div class="card-body px-lg-3 pt-3 pb-2">
                <form action="/product-update" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label>Name Product</label>
                        <input type="hidden" class="form-control" name="id" value="{{ $products->id }}">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama" value="{{ $products->name }}">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                <p>Min 3 karakter</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Price" value="{{ $products->price }}">
                        @error('price')
                            <div class="alert alert-danger mt-2">
                                <p>inputkan dalam bentuk integer</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" value="{{ $products->description }}">
                    </div>
                    <div class="mb-3">
                        <label>Category</label>
                        <select name="categories_id" class="form-control @error('categories_id') is-invalid @enderror">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('categories_id')
                            <div class="alert alert-danger mt-2">
                                <p>Sesuaikan dengan kategori</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <input type="text" class="form-control" name="status" value="Pending" value="{{ $products->status }}">
                    </div>
                    <button type="submit" class="btn btn btn-primary" id="btn-submit">Save</button>
                    <button type="reset" class="btn btn-warning" name="reset">Reset</button>
                    <a href="{{ url('/product') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
