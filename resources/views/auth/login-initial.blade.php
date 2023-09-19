@extends('dashboard.authBase')

<style>
  .content i {
  margin-bottom: 41px;
}

.container {
  border-radius: 1px;
  padding: 50px 40px 20px 40px;
  box-sizing: border-box;
  font-family: sans-serif;
  color: #737373;
  border: 1px solid rgb(219, 219, 219);
  text-align: center;
  background: white;
}

.container svg {
  width: 16px;
  height: auto;
}

.content__form {
  display: flex;
  flex-direction: column;
  row-gap: 14px;
}

.content__inputs {
  display: flex;
  flex-direction: column;
  row-gap: 8px;
}

.content__form label {
  border: 1px solid rgb(219, 219, 219);
  display: flex;
  align-items: center;
  position: relative;
  min-width: 268px;
  height: 38px;
  background: rgb(250, 250, 250);
  border-radius: 3px;
}

.content__form span {
  position: absolute;
  text-overflow: ellipsis;
  transform-origin: left;
  font-size: 12px;
  left: 8px;
  pointer-events: none;
  transition: transform ease-out .1s
}

.content__form input {
  width: 100%;
  background: inherit;
  border: 0;
  outline: none;
  padding: 9px 8px 7px 8px;
  text-overflow: ellipsis;
  font-size: 16px;
  vertical-align: middle;
}

.content__form input:valid+span {
  transform: scale(calc(10 / 12)) translateY(-10px);
}

.content__form input:valid {
  padding: 14px 0 2px 8px;
  font-size: 12px;
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

.content__forgot-buttons {
  display: flex;
  flex-direction: column;
  margin-top: 28px;
  row-gap: 21px;
}

.content__forgot-buttons button {
  display: flex;
  justify-content: center;
  align-items: center;
  column-gap: 8px;
  background: none;
  border: none;
  cursor: pointer;
  font-size: 12px;
}

.content__forgot-buttons button:first-child {
  color: white;
  font-size: 14px;
  font-weight: 600;
}

.content__form button {
  background: rgb(0, 149, 246);
  color: white;
  border: none;
  border-radius: 8px;
  font-weight: 700;
  font-size: 14px;
  padding: 7px 16px;
  cursor: pointer;
}

.content__form button:hover {
  background: rgb(24, 119, 242);
}

.content__form button:active:not(:hover) {
  background: rgb(0, 149, 246);
  opacity: .7;
}

</style>
@section('content')

<div class="container" style="width: 30%; background-color: #454332; border-radius: 20px;">
    <div class="content mx-4">
      <img src="{{ asset('assets/img/wealth_avatarr.png') }}" alt="Your Image" class="mb-4"style="height:%;">
      <form class="content__form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="content__inputs">
          <label>
            <input type="text" name="email" value="{{ old('email') }}" required autofocus>
            <span>Email</span>
          </label>
          <label>
            <input type="password" name="password" required>
            <span>Password</span>
          </label>
        </div>
        {{-- <button type="submit" class="btn btn-primary px-4">{{ __('Login') }}</button> --}}
        <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
      </form>
      <div class="content__or-text">
        <span></span>
        <span>OR</span>
        <span></span>
      </div>
      <div class="content__forgot-buttons">
        <button>Forgot password?</button>
        {{-- <a href="{{ route('password.request') }}" class="btn btn-link px-0">{{ __('Forgot Your Password?') }}</a> --}}
      </div>
    </div>
  </div>

@endsection

@section('javascript')

@endsection