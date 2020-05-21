@extends('layouts.master')

@section('title', 'Nearby Animal Relief Centers')

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
					<span>&nbsp;Emergency Services <i class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Emergency Services</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center suburbDetails">
				<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
					<h2>Enter you location</h2>
					<!-- Google Auto Complete field -->
					<div style="display: flex;flex-direction: row;">
						<input type="text" id="autocomplete" class="form-control" name="location" placeholder="Enter a suburb">
						<select class="form-control custom-select" style="margin-left: 10px;">
							<option value="none" selected disabled hidden> 
								Set a radius for your search
							</option>
							<option value="5000">5 Km</option>
							<option value="10000">10 Km</option>
							<option value="20000">20 Km</option>
							<option value="50000">50 Km</option>
						</select>
					</div>
					<input type="hidden" name="radiusVal" id="inputarea" value="5000">
					<br>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section bg-light mapDetails" style="margin-top: -40px;">
		<div class="container">
			<div class="row justify-content-center suburbDetails">
				<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</section>
	@endsection

	@section('scripts')
	@parent

	<script src="{{ secure_asset('js/hospitals.js') }}"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6NqKaeopGxcPNpfE8jEIF04J8Aa1nVT8&libraries=places&callback=initAutocomplete"></script>

	<script src="{{ secure_asset('js/map-icons.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.mapDetails').hide();
		});
	</script>
	@endsection