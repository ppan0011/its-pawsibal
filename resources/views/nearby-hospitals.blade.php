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
					<span class="mr-2"><a href="{{ url('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> / 
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

	<section class="ftco-section ftco-no-pt ftco-no-pb bg-light resultsDetailSection">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 pb-3" >
					<div id="map"></div>
				</div>
				<div class="col-md-6 pl-md-5">
					<div class="heading-section">
						<h2 class="mb-4">General Advice</h2>
						<!-- <h5 class="mb-5">Details</h5> -->
					</div>
					<div class="row">
						<div class="col-md-12 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-buildings"></span></div>
							<div class="text pl-3">
								<h4>Ensure your own safety</h4>
								<p class="suburbName"><a type="button" data-placement="right" data-toggle="popover" title="Your Safety is a must!" data-content="If you find a species in a dangerous place, such as near the edge of a cliff, please make sure you are safe! Make sure you can be seen for any traffic or people. If the animal is not dangerous and you are confident in handling the animal, try to move it to a safer location if and when you can do so safely. Remember that even small animals can bite or scratch so be careful, and try to use gloves or a towel to protect you, and the animal from further injury." style="margin: 0;cursor:pointer;">Click to see details</a></p>
							</div>
						</div>
						<div class="col-md-12 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-signs"></span></div>
							<div class="text pl-3">
								<h4>Don't make species uncomfortable</h4>
								<p class="distanceDetails"><a type="button" data-placement="right" data-toggle="popover" title="Do not make animals nervous!" data-content="If you find a bushfire-affected species in the wild, it may help to cover the animal with a towel or blanket which can keep them warm and reduce visual stimulus that may spook them. If you find a small species, you can keep it in a warm, dark covered and quiet place, don’t place it near other species. Do not offer food! But you can offer them some water, but please don’t pour water from a container into an animal's mouth!" style="margin: 0;cursor:pointer;">Click to see details</a></p>
							</div>
						</div>
						<div class="col-md-12 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-animals"></span></div>
							<div class="text pl-3">
								<h4>Transport</h4>
								<p><a type="button" data-placement="right" data-toggle="popover" title="Keep in mind while transporting an injured animal." data-content="Even though these species are cute, it is illegal to hold these species (including rescued ones) without a license in most states. If you need to transport species, you need to be very careful. When you transport an animal, it needs to be positioned in such a way that it can stand normally, but have limited movement. It must have adequate ventilation, and be kept warm, dark and quiet. And don’t let these species close to your children and pets!" style="margin: 0;cursor:pointer;">Click to see details</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row addDetails">
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
			$('[data-toggle="popover"]').popover({
				placement: 'right',
				delay : {
            hide : 5000 // doesn't do anything
        }
    }).on('shown.bs.popover', function () {
    	setTimeout(function (a) {
    		a.popover('hide');
    	}, 5000, $(this));
    });
    $('.resultsDetailSection').hide();
});
</script>
@endsection