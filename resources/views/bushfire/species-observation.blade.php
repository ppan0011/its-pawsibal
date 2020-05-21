@extends('layouts.master')

@section('title', 'Species Observation')
@section('content')
@parent

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/hiking.jpg'); background-size: 100%;" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs mb-2">
					<span class="mr-2"><a href="{{ url('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> / 
					<span>&nbsp;Species Observation <i class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Species Observation</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light suburbDetails">
		<div class="container">
			<div class="row justify-content-center">
				<!-- <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<p>View how the species have been observed relative to bushfire affected areas for this year</p>
				</div> -->

				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<p class="lead">
						<h4>
						Species observation trend this year with respect to the minimum distance from bushfires. Drag your mouse on one section to see species observations in that particular section.
						</h4>
					</p>
					<iframe src="https://rkoc0004.github.io/plotly_vis/index.html" width="100%" height="400" title="Species Observations"></iframe>
				</div>

				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated mt-3" >	
					<p class="lead">
						<h4>
						This map shows the area burnt in Victoria during bushfires and the species observations relative to those regions. Slider can be moved to adjust for the distance and checkboxes for animal species.
						</h4>
					</p>
					<iframe src="https://phoenix-rstudio-work.shinyapps.io/dashboard_shiny/" width="100%" height="400" title="Species Observations"></iframe>
				</div>
			</div>
		</div>
	</section>
	@endsection