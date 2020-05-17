@extends('layouts.master')

@section('title', 'Explore your area')

@section('content')
@parent
<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/hiking.jpg'); background-size: 100%;" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs mb-2">
					<span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> / 
					<span>&nbsp;Explore Your Area <i class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Explore Your Area</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated" style="margin: -60px;">
					<h2>Access your location</h2>
					<input type="text" id="autocomplete" class="form-control" name="location" placeholder="Enter a suburb"><br>
					<p>OR</p>
					<button class="btn askLocation animalButton">Allow Automatic Location Tracking</button>
				</div>
			</div>
		</div>
	</section>


	@endsection
	
	@section('scripts')
	@parent
	<script type="text/javascript">
		$( document ).ready(function() {
			console.log( "ready!" );
		});
	</script>
	@endsection