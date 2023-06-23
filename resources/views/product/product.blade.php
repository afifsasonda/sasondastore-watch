@extends('layouts.dashboard-main')

@section('title')
Product Pages
@endsection

@section('breadchumb')
Product
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
                    <h6>Product</h6>
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
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Category</th>
                    <th class="text-secondary opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            {{-- <img src="/photos/{{ $product->galleries->photos }}" class="avatar avatar-sm me-3" alt="user1"> --}}
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $product->name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $product->price }}</p>
                      </td>
                      <td>
                        <span class="badge badge-sm bg-gradient-success">{{ $product->status }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-xs font-weight-bold">{{ $product->category->name }}</span>
                        </td>
                        <td class="align-middle">
                        @if (Auth::user()->roles == 'Admin')
                      <a href="/product-edit/{{ $product->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                      <br>
                      <a href="/product-delete/{{ $product->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        delete
                      </a>
                      @endif
                    </td>
                    </tr>

                    @empty
                    <div class="col-12 col-lg-12">
                        <h2>Belum ada pengguna</h2>
                    </div>
                    @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
