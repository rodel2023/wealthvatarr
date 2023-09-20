@extends('layouts.premium')
<style>
</style>
@section('content')
<div style="background-color: #C1A460">
	<div class="container pt-2" style="background-color: white; height: 100%;">
			<div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header"><h4>{{ __('Change Password') }}</h4></div>

                    <div class="card-body">
						@if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif

						@if($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

                        <form method="POST" action="{{ route('password.change') }}">
                        {{-- <form method="POST"> --}}
                            @csrf

                            <div class="form-group">
                                <label for="old_password">{{ __('Old Password') }}</label>
                                <input id="old_password" type="password" class="form-control" name="old_password" required autocomplete="current-password">
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('New Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm New Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn">
                                {{ __('Change Password') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection