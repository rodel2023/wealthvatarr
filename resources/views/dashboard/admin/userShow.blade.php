@extends('dashboard.admin')
@section('content')
  <h1 class="h3 mb-3"><strong><a href="/users" class="user-dashboard">Users Dashbard</strong></a> - Show</h1>

  <div class="card flex-fill">
    <div class="card-header">
      <h5 class="card-title mb-0 ms-2">View User - {{ $user->name }}</h5>
    </div>
    <div class="card-body">
      <h4 class="ms-2">Name: <b>{{ $user->name }}</b> </h4>
      <h4 class="ms-2 mt-3">E-mail: <b>{{ $user->email }}</b></h4>
      <a href="{{ route('users.index') }}" class="btn btn-block btn-primary ms-2 mt-2">{{ __('Return') }}</a>
    </div>
  </div>

@endsection