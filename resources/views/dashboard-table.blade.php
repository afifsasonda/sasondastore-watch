@extends('layouts.dashboard-main')

@section('title')
Tabel Pages
@endsection

@section('breadchumb')
Table
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-10">
                        <h6>Banner</h6>
                    </div>
                    @if (Auth::user()->roles == 'Admin')
                    <div class="col-12 col-md-2 col-lg-2">
                        <a href="{{ url('/banner-create') }}" class="btn btn-primary">Create</a>
                    </div>
                    @endif
                    @if (Auth::user()->roles == 'Staff')
                    <div class="col-12 col-md-2 col-lg-2">
                        <a href="{{ url('/banner-create') }}" class="btn btn-primary">Create</a>
                    </div>
                    @endif

                </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Banner</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                        <th class="text-secondary opacity-7">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($sliders as $slider)
                        <tr>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">{{ $loop->iteration }}</p>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="/banner/{{ $slider->banner }}" class=" bg-primary" style="width:200px;height:50px">
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">{{ $slider->name }}</p>
                            </td>
                            <td class="align-middle">
                            @if (Auth::user()->roles == 'Admin')
                                <a href="/banner-delete/{{ $slider->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                delete
                                </a>
                            @endif
                            </td>
                        </tr>

                        @empty
                        <div class="col-12 col-lg-12">
                            <h2>Belum ada Banner</h2>
                        </div>
                        @endforelse
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-10">
                    <h6>Pengguna</h6>
                </div>
            </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengguna</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                    {{-- <th class="text-secondary opacity-7"></th> --}}
                  </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="/avatar/{{ $user->avatar }}" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-sm bg-gradient-success">{{ $user->roles }}</span>
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
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-10">
                    <h6>Products table</h6>
                </div>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            {{-- <a href="/dashboard/table-"></a> --}}
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Category</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                              {{-- <img src="/photos/{{ $product->galleries-> }}" class="avatar avatar-sm me-3" alt="user1"> --}}
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{ $product->name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $product->price }}</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">{{ $product->status }}</span>
                      </td>
                      <td class="align-middle text-center">
                          <span class="text-xs font-weight-bold">{{ $product->category->name }}</span>
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
@endsection
