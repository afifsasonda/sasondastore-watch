@extends('layouts.dashboard-main')

@section('title')
User Pages
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-10">
                    <h6>Customer</h6>
                </div>
                @if (Auth::user()->roles == 'Admin')
                <div class="col-12 col-md-2 col-lg-2">
                    <a href="{{ url('/user-create') }}" class="btn btn-primary">Create</a>
                </div>
                @endif
                @if (Auth::user()->roles == 'Staff')
                <div class="col-12 col-md-2 col-lg-2">
                    <a href="{{ url('/user-create') }}" class="btn btn-primary">Create</a>
                </div>
                @endif
            </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengguna</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                    <th class="text-secondary opacity-7"></th>
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
                      <td class="align-middle">
                        @if (Auth::user()->roles == 'Admin')
                        <a href="/user-edit/{{ $user->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <br>
                        <a href="/user-delete/{{ $user->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
