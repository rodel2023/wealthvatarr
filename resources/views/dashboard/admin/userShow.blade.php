@extends('dashboard.admin')
@section('content')

  {{-- <h1 class="h3 mb-3"><strong>Users</strong> Dashboard</h1> --}}
  <div class="card flex-fill">
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-header">
                  <i class="fa fa-align-justify"></i> User {{ $user->name }}</div>
                <div class="card-body">
                    <h4>Name: {{ $user->name }}</h4>
                    <h4>E-mail: {{ $user->email }}</h4>
                    <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
  <script src="{{ asset('js/admin.js') }}"></script>
@endsection