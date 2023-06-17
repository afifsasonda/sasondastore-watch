@extends('layouts.dashboard-main')

@section('title')
Create User
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
                <h6>Create User table</h6>
              </div>
            </div>
            <div class="card-body px-lg-3 pt-3 pb-2">
                <form action="{{ url('/user-create-post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                <p>Min 5 karakter</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                <p>Harap masukkan email dengan benar!</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Role</label>
                        <select name="roles" class="form-control @error('roles') is-invalid @enderror">
                            <option selected aria-label="Disabled">Pilih Role</option>
                            <option>Admin</option>
                            <option>Staff</option>
                            <option>User</option>
                        </select>
                        @error('roles')
                            <div class="alert alert-danger mt-2">
                                <p>pilih role</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Avatar</label>
                        <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" name="avatar">
                        @error('avatar')
                            <div class="alert alert-danger mt-2">
                                <p>jpg,png,jpeg</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" id="editor" class="w-100 @error('alamat') is-invalid @enderror"></textarea>
                        @error('alamat')
                            <div class="alert alert-danger mt-2">
                                <p>Maksimum 200 karakter</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                            <div class="alert alert-danger mt-2">
                                <p>minimum karakter 6</p>
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn btn-primary" id="btn-submit" name="tambah">Save</button>
                    <button type="reset" class="btn btn-warning" name="reset">Reset</button>
                    <a href="{{ url('/user') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
