@extends('layouts.premium')
<style>
	.p-email {
		color: black;
	}
	.bordered-content {
		border: 2px solid #ccc; /* Adjust border style and color as needed */
		padding: 20px; /* Add some padding for spacing */
		border-radius: 10px; /* Add rounded corners */
	}
</style>

@section('content')
<div style="background-color: #C1A460">
	<div class="container pt-2" style="background-color: white; height: 90%;">
			<div class="row justify-content-center mt-5">
				<div class="col-12 col-md-6 text-center bordered-content">
					<h1>Contact Us:</h1>
					<p class="text-center">Email: 
						<a href="mailto:support@wealthavatar.net">
							<span class="p-email">
								<u>
									support@wealthavatar.net
								</u>
							</span>
						</a>
					</p>
				</div>
			</div>
	</div>
</div>
@endsection