@extends('dashboard.admin')
@section('content')
  <h1 class="h3 mb-3"><strong><a href="/users" class="user-dashboard">Users Dashbard</strong></a> - Edit</h1>

  <div class="card flex-fill">
    <div class="card-header">
      <h5 class="card-title mb-0 ms-2">{{ __('Edit') }} - {{ $user->name }}</h5>
    </div>
    <div class="card-body">
      <form method="POST" action="/users/{{ $user->id }}">
          @csrf
          @method('PUT')
          <div class="input-group mb-3 ms-2">
              <input class="form-control" type="text" placeholder="{{ __('Name') }}" name="name" value="{{ $user->name }}" required autofocus>
          </div>
          <div class="input-group mb-3 ms-2">
              <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
              </div>
              <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ $user->email }}" required>
          </div>
          <button class="btn btn-block btn-success ms-2" type="submit">{{ __('Save') }}</button>
          <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
      </form>
    </div>
  </div>

@endsection