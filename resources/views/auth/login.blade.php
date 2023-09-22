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

.forgot-link {
  text-decoration: none;
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

.login-container input[type="text"],
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
  <img src="{{ asset('assets/img/wealth_avatarr.png') }}" alt="Your Image" class="mb-4"style="height:5%;">
  {{-- <h2>Login</h2> --}}
  <form class="content__form" method="POST" action="{{ route('login') }}">
    @csrf
      <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

      <input type="password" name="password" placeholder="Password" required>
      <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
  </form>
  <div class="content__or-text mb-2">
    <span></span>
    <span style="color:rgb(219, 219, 219);">OR</span>
    <span></span>
  </div>
    {{-- <a href="#" style="color:rgb(219, 219, 219);">Forgot password?</a> --}}
    <a href="{{ route('password.request') }}" class="forgot-link">{{ __('Forgot Your Password?') }}</a>
</div>

@endsection

@section('javascript')

@endsection