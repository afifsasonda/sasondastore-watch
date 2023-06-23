@extends('layouts.dashboard-main')

@section('title')
Update User
@endsection

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <h6>Edit User table</h6>
              </div>
            </div>
            <div class="card-body px-lg-3 pt-3 pb-2">
                <form action="{{ url('/user-update') }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="hidden" class="form-control" name="id" value="{{ $users->id }}">
                        <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                <p>Min 3 karakter</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $users->email }}">
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                <p>Harap masukkan email dengan benar!</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Role</label>
                        <select name="roles" class="form-control">
                            <option selected aria-label="Disabled">{{ $users->roles }}</option>
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
                        <input type="file" class="form-control-file" name="avatar" value="{{ $users->avatar }}">
                        @error('avatar')
                            <div class="alert alert-danger mt-2">
                                <p>format harus jpg,png,atau jpeg!</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" id="editor" class="w-100">{{ $users->alamat }}</textarea>
                        @error('alamat')
                            <div class="alert alert-danger mt-2">
                                <p>alamat harus dimasukkan</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" value="{{ $users->password }}">
                        @error('password')
                            <div class="alert alert-danger mt-2">
                                <p>Minumium 6 karakter</p>
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn btn-primary" id="btn-submit" name="edit">Save</button>
                    <button type="reset" class="btn btn-warning" name="reset">Reset</button>
                    <a href="{{ url('/user') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
