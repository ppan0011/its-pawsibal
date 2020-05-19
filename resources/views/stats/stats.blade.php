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
					<span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> / 
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
					<p >Recent bushfires have been very detrimental to an already threatened species population. Below is the distribution of current threatened species in Victoria both by category and their conservation status.</p>
				</div>
				<div class="col-md-6 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<div id="pie_chart_div"></div>
				</div>

				<div class="col-md-6 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<div id="bar_chart_div"></div>
				</div>
			</div>

			<!-- <div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<p >Approximately 15000 km square of area has come under fire in Victoria. This is approximately 6.6% of all area in Victoria and 80% of all the suburbs that have been affected. Choose any suburb out of the bushfire affected regions to assess the bushfire impact.</p>
				</div>
			</div> -->

			<div class="row justify-content-center" style="margin-top: 30px;">
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
					<p >Bushfires in Victoria for season 2019-2020 started around 21st November 2019. The below time series graph shows the number of fires burning in the state in the month of Nov 2019-Dec 2019. All significant fires in Victoria were declared contained on 27 February 2020.</p>
				</div>
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated mb-4" >
					<div  id="myDiv_1"></div>
				</div>
				<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated"><div id="myDiv_2"></div></div>
			</div>
		</div>
	</section>

	<!--Div that will hold the dashboard-->
	<!-- <br><br>
	<div id="dashboard_div"> -->
		<!--Divs that will hold each control and chart-->
		<!-- <div id="filter_div" style="margin-left: 80px; float: left;"></div>
		<br><br>
		<div id="chart_div" style="margin-left: 10px;"></div>
	</div>
	<div class = "container" id="myDiv_1" style = "margin-left: 80px;"></div>
	<div class = "container" id="myDiv_2" style = "margin-left: 80px;"></div> -->


	@endsection