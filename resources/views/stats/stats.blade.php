@extends('layouts.master')

@section('title', 'Statistics of Bushfires')
@section('content')
@parent

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/hiking.jpg'); background-size: 100%;" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs mb-2">
					<span class="mr-2"><a href="{{ url('home') }}">Home<i class="ion-ios-arrow-forward"></i></a></span> / 
					<span>&nbsp;Bushfire Statistics <i class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Bushfire Statistics</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light suburbDetails">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<h4 class="checksss">Threatened Species Distribution in Victoria</h4>
				</div>
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated mt-2" style="text-align: center;">
					<p>Recent bushfires have been very detrimental to an already threatened species population.</p>
					<p>Below is the distribution of threatened species in Victoria both by category and their conservation status.</p>
				</div>
				<div class="col-md-6 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<div id="pie_chart_div"></div>
				</div>

				<div class="col-md-6 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<div id="bar_chart_div"></div>
				</div>
			</div>

			<div class="row justify-content-center mt-5">
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<h4 class="checksss">Impact of Bushfires by Suburbs in Victoria</h4>
				</div>
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated mt-2" style="text-align: center;">
					<p>Approximately 15000 km square of area has come under bushfires(2019-2020) in Victoria.</p>
					<p>This is approximately 6.6% of all area in Victoria and 80% of the area of all the affected suburbs.</p>
					<p><em> Choose any suburb out of the bushfire affected regions to assess the bushfire impact.</em></p>
					<p></p>
				</div>
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					
					<iframe src="https://rkoc0004.shinyapps.io/suburb_visualization/" width="80%" height="700" style="border:1px solid black;"></iframe>
				</div>
			</div>
			<div class="row justify-content-center" style="margin-top: 30px;">
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<h4 class="checksss">Number of fires burning in Victoria(Nov 21st 2019 to Dec 31st 2019)</h4>
				</div>
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<p>Bushfires in Victoria for <b>season 2019-2020 started</b>  around <b>21st November 2019</b>.</p>
					<p>All <b>significant fires</b> in Victoria were declared <b>contained on 27 February 2020</b>.</p>
					<p><b>Maximum Number of fires:</b> 2563. <b>Date:</b> December 30th 2019.</p>	
					<p><b>Maximum Number of fires:</b> 1. <b>Date:</b> December 3rd 2019.</p>
					<p><em>The below time series graph shows the number of fires burning in the state in the month of Nov 2019-Dec 2019.</em></p>
				</div>
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated mb-4" >
					<div  id="myDiv_1"></div>
				</div>

				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<h4 class="checksss">Bushfire Affected locations in Victoria</h4>
				</div>
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<p>Below map gives the <b>distribution of 2019-2020 bushfires</b> across <b>Victoria</b>.</p>

					<p><b>Air temperature</b> was recorded by the <b>NASA Terra satellite</b> at the time of fire detection.</p>

					<p><b>Click on any cluster</b> to <b>interact</b> with the <b>individual locations affected by bushfires</b>.</p>

					<p><em>   Mouse hover over the individual locations will display the Suburb and the recorded Air temperature.</em></p>
				</div>
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated mb-4" >
					<iframe src="https://rkoc0004.shinyapps.io/bushfire_locations/" width="80%" height="600" style="border:1px solid black;"></iframe>
				</div>
				<!-- <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated"><div id="myDiv_2"></div></div> -->
			</div>
		</div>
	</section>
	@endsection