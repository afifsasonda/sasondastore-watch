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
                        <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $users->email }}">
                    </div>
                    <div class="mb-3">
                        <label>Role</label>
                        <select name="roles" class="form-control">
                            <option selected aria-label="Disabled">{{ $users->roles }}</option>
                            <option>Admin</option>
                            <option>Staff</option>
                            <option>User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Avatar</label>
                        <input type="file" class="form-control-file" name="avatar" value="{{ $users->avatar }}">
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" id="editor" class="w-100">{{ $users->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" value="{{ $users->password }}">
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
