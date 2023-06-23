@extends('layouts.dashboard-main')

@section('title')
Product create
@endsection

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
                <h6>Add Banner</h6>
              </div>
            </div>
            <div class="card-body px-lg-3 pt-3 pb-2">
                <form action="/banner-create-post" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Banners</label>
                        <input type="file" class="form-control-file @error('banner') is-invalid @enderror" name="banner">
                        @error('banner')
                            <div class="alert alert-danger mt-2">
                                <p>jpg,png,jpeg ukuran 1904 X 720</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="ex : banner 1">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                <p>Minimal 5 karakter</p>
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn btn-primary" id="btn-submit" name="tambah">Save</button>
                    <button type="reset" class="btn btn-warning" name="reset">Reset</button>
                    <a href="{{ url('/banner') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
