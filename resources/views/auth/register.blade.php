@extends('dashboard.authBase')

@section('css')
	<!-- Telephone Input CSS -->
	<!-- <link href="{{ asset('intl-tel-input/build/css/intlTelInput.css')}}" rel="stylesheet" > -->
@endsection

@section('content')

<style>
    .iti { 
        display: block !important; 
        }
</style>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
            <div class="card-body p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1>{{ __('Register') }}</h1>
                    <p class="text-muted">Create your account</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                            </svg>
                          </span>
                        </div>
                        <input class="form-control" type="text" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
                            </svg>
                          </span>
                        </div>
                        <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="input-group mb-3">           							
                        <!-- <label for="mobile_number" class="fs-12 font-weight-bold text-md-right">{{ __('Mobile Number') }}</label> -->
                        <input type="hidden"  id="country_code" name ="country_code" value="1" >
                        <input  type="tel" class="form-control" placeholder="{{ __('Mobile Number') }}" name="mobile_number"  id="mobile-number" value="{{ old('mobile_number') }}" required>

                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                            </svg>
                          </span>
                        </div>
                        <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                            </svg>
                          </span>
                        </div>
                        <input class="form-control" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required>
                    </div>
                    <button class="btn btn-block btn-success" type="submit">{{ __('Register') }}</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('js')

    <script src="{{asset('intl-tel-input/build/js/intlTelInput.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            "use strict";

            var input = document.querySelector("#mobile-number");
            var iti = window.intlTelInput(input, {
                separateDialCode: true,
            });
            
            input.addEventListener("countrychange", function() {
                var countryData = iti.getSelectedCountryData();
                $("#country_code").val(countryData["dialCode"]);
            });
        });
    </script>

@endsection