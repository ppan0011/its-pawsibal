@extends('layouts.master')

@section('title', 'Explore your area')

@section('content')
@parent

<!-- Section: Breadcrumb -->
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

	<!-- Section: Asking Suburb Details -->
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="jumbotron">
					<h1 class="display-4">Alas!</h1>
					<p class="lead">There are a lot of Suburbs that have been affected by the deadly bushfires.</p>
					<hr class="my-4">
					<p>We will help you to figure out if your suburb is one of them and help you find the animals that are affected in the region that you choose.</p>
					<p class="lead">
						<a class="btn learnMore" href="#" role="button">Learn more</a>
					</p>
				</div>
			</div>
			<div class="row justify-content-center suburbDetails">
				<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
					<h2>Enter the suburb details below</h2>
					<!-- Google Auto Complete field -->
					<input type="text" id="autocomplete" class="form-control" name="location" placeholder="Enter a suburb"><br>
					<p>OR</p>
					<button class="btn askLocation animalButton">Allow Automatic Location Tracking</button>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Ajax Details -->
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-light resultsDetailSection">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 pb-3" >
					<div id="container"></div>
				</div>
				<div class="col-md-6 pl-md-5">
					<div class="heading-section">
						<h2 class="mb-4">Results</h2>
						<!-- <h5 class="mb-5">Details</h5> -->
					</div>
					<div class="row">
						<div class="col-md-12 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-buildings"></span></div>
							<div class="text pl-3">
								<h4>Suburb</h4>
								<p class="suburbName">Malvern East</p>
							</div>
						</div>
						<div class="col-md-12 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-signs"></span></div>
							<div class="text pl-3">
								<h4>Distance from Nearest Bushfire:</h4>
								<p class="distanceDetails">20 km</p>
							</div>
						</div>
						<div class="col-md-12 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-animals"></span></div>
							<div class="text pl-3">
								<h4>Find Nearby Hospitals</h4>
								<p><a href="{{ url('nearby-hospitals') }}">Click here to begin</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@endsection
	
	@section('scripts')
	@parent

	<script src="{{ asset('js/explore-area.js') }}"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6NqKaeopGxcPNpfE8jEIF04J8Aa1nVT8&libraries=places&callback=initAutocomplete" async defer></script>
	<script type="text/javascript" src="{{ asset('js/highcharts.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/exporting.js') }}"></script>
	<script type="text/javascript">
		$('.exploreArealink').addClass( "active" );
		$('.homelink').removeClass( "active" );
		$('.bushfireslink').removeClass( "active" );
		$('.resultsDetailSection').hide();
	</script>
	@endsection