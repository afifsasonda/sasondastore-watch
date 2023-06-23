@extends('layouts.dashboard-main')

@section('title')
Profile Pages
@endsection

@section('breadchumb')
Profile
@endsection

@section('content')
<div class="container-fluid py-1">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-profile">
          <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
          <div class="row justify-content-center">
            <div class="col-4 col-lg-4 order-lg-2">
              <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                <a href="javascript:;">
                  <img src="../assets/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white">
                </a>
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="text-center mt-4">
              <h5>
                Mark Davis
              </h5>
              {{-- email --}}
              <div class="h6 font-weight-300">
                <i class="ni location_pin mr-2"></i>Bucharest, Romania
              </div>
              {{-- alamat --}}
              <div class="h6 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
              </div>
              {{-- role --}}
              <div>
                <i class="ni education_hat mr-2"></i>University of Computer Science
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
