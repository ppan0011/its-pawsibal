@extends('layouts.master')

@section('title', 'Explore Bushfire Regions')
@section('content')
@parent
<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/possum-lead.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs mb-2">
					<span class="mr-2"><a href="{{ url('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> / 
					<span>&nbsp;Explore Bushfire Regions <i class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Explore Bushfire Regions</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="jumbotron">
					<h1 class="display-4">Exploring is fun!</h1>
					<p class="lead">Do you want to know what animals were affected in your suburb or any nearby suburbs? The following activity will give you the information of the bushfire affected suburbs and the threatened species in those suburbs.</p>
					<hr class="my-4">
					<p>We will help you to figure out if your suburb is one of them and help you find the animals that are affected in the region that you choose.</p>
					<p class="lead">
						<a class="btn learnMore" href="#" role="button">Learn more</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light suburbDetails">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-4 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<h2>Select a region:</h2>
					<select class="custom-select regionSelect" style="height:50px;">
						<option value="">Select a region</option>
						<option value="Victoria">Victoria</option>
					</select>
				</div>
				<div class="col-md-4 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<h2>OR</h2>
				</div>
				<div class="col-md-4 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<h2>Search a suburb</h2>
					<select class="custom-select suburbSelect" style="height:50px;" >
						<option value="">Select a suburb</option>
					</select>
					<!-- <input type="text" name="suburbNameSearch" class="form-control suburbSearchText" placeholder="Enter a suburb name below"> -->
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light suburb-section" >
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3" >
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h4 class="checksss">These are the suburbs affected in Victoria</h4>
				</div>
			</div>
			<div class="row d-flex suburb-rows">

			</div>
			<div class="row justify-content-center mt-2 know-more">
				
			</div>
		</div>
	</section>
	<input type="hidden" name="nextpageval" class="nextpageval" value="">

	<section class="ftco-section bg-light animal-section" >
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3" >
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h4 class="checksss">The following threatened animals were affected</h4>
				</div>
			</div>
			<div class="row d-flex animal-rows">
				
			</div>
		</div>
	</section>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Species Name</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div style="display: flex;direction: row; justify-content: space-around;"> <p>Common Name:</p><p class="animalCommonName"></p></div>
					<div style="display: flex;direction: row; justify-content: space-around;"> <p>Scientific Name:</p><p class="animalScientificName"></p></div>
					<div style="display: flex;direction: row; justify-content: space-around;"> <p>Category:</p><p class="animalCategory"></p></div>
					<div style="display: flex;direction: row; justify-content: space-around;"> <p>Conservation Status:</p><p class="animalConservationStatus"></p></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	@endsection

	@section('scripts')
	@parent
	<script type="text/javascript" src="{{ secure_asset('js/explore-bushfires.js') }}"></script>
	@endsection