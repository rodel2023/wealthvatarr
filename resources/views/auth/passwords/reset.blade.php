@extends('dashboard.authBase')
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.reset-name{
    float: left;
    color: white;
}

.login-container {
  background-color: #454332;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  width: 90%;
  text-align: center;
}

.login-container h2 {
  margin-bottom: 20px;
  color: rgb(231, 228, 228);
}

.login-container input[type="email"],
.login-container input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.login-container input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

.login-container input[type="submit"]:hover {
  background-color: #0056b3;
}

.content__or-text {
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-transform: uppercase;
  font-size: 13px;
  column-gap: 18px;
  margin-top: 18px;
}

.content__or-text span:nth-child(3),
.content__or-text span:nth-child(1) {
  display: block;
  width: 100%;
  height: 1px;
  background-color: rgb(219, 219, 219);
}

</style>

@section('content')
<div class="login-container">
  {{-- <img src="{{ asset('assets/img/wealth_avatarr.png') }}" alt="Your Image" class="mb-4"style="height:5%;"> --}}
  <h2>Reset Password</h2>
    <form method="POST" class="content__form" novalidate="" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group">
        <label for="email" class="reset-name">Email</label>
        <input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="{{ $email ?? old('email') }}">
        <span class="text-danger">@error('email'){{$message}} @enderror</span>
    </div>
    <div class="form-group">
        <label for="password" class="reset-name">New Password</label>
        <input id="password" type="password" class="form-control" name="password" placeholder="Enter new password">
        <span class="text-danger">@error('password'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
        <label for="password-confirm" class="reset-name">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter confirm password">
        <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>
    </div>
    <button class="btn btn-primary px-4" type="submit">{{ __('Reset Password') }}</button>
  </form>

</div>
@endsection