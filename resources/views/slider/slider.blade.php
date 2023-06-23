@extends('layouts.dashboard-main')
@section('title')
Slider Page
@endsection

@section('content')
<p>hallo</p>
{{-- <div class="container-fluid py-4">
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
                                    @forelse ($banners as $banner)
                                    <tr>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">{{ $loop->iteration }}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="/photos/{{ $banner->banner }}" class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">{{ $banner->name }}</p>
                                        </td>
                                        <td class="align-middle">
                                        @if (Auth::user()->roles == 'Admin')
                                            <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                            </a>
                                            <br>
                                            <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
    </div>
</div> --}}
@endsection
