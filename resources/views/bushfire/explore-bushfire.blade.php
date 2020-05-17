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
					<span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> / 
					<span>&nbsp;Explore Bushfire Regions <i class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Explore Bushfire Regions</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated" style="margin: -60px;">
					<h2>Select a region you want to view:</h2>
					<select class="custom-select">
						<option value="">Select a region</option>
						<option value="Victoria">Victoria</option>
					</select>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light suburb-section" >
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3"  style="margin-top: -100px !important;">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h4 class="checksss">These are the suburbs affected in Victoria</h4>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="https://maps.google.com/maps?q=werribee" class="block-20 rounded"><iframe src="https://maps.google.com/maps?q=werribee&t=&z=12&ie=UTF8&iwloc=&output=embed" frameborder="0"
							style="border:0; width: -webkit-fill-available; height: inherit;" allowfullscreen></iframe>
						</a>
						<div class="text p-4 suburb-text">
							<h3 style="text-align: center;">Werribee</h3>
							<button class="btn animalButton" style="margin-bottom: 5px;" onMouseOver="this.style.color='#00bd56'" onMouseOut="this.style.color='#000'">View Affected Animals</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="https://maps.google.com/maps?q=mount+waverly" class="block-20 rounded"><iframe src="https://maps.google.com/maps?q=Mount+Waverly&t=&z=12&ie=UTF8&iwloc=&output=embed" frameborder="0"
							style="border:0; width: -webkit-fill-available; height: inherit;" allowfullscreen></iframe>
						</a>
						<div class="text p-4 suburb-text">
							<h3 style="text-align: center;">Mount Waverly</h3>
							<button class="btn animalButton" style="margin-bottom: 5px;" onMouseOver="this.style.color='#00bd56'" onMouseOut="this.style.color='#000'">View Affected Animals</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="https://maps.google.com/maps?q=malvern+east" class="block-20 rounded"><iframe src="https://maps.google.com/maps?q=malvern+east&t=&z=12&ie=UTF8&iwloc=&output=embed" frameborder="0"
							style="border:0; width: -webkit-fill-available; height: inherit;" allowfullscreen></iframe>
						</a>
						<div class="text p-4 suburb-text">
							<h3 style="text-align: center;">Malvern East</h3>
							<button class="btn animalButton" style="margin-bottom: 5px;" onMouseOver="this.style.color='#00bd56'" onMouseOut="this.style.color='#000'">View Affected Animals</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light animal-section" >
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3"  style="margin-top: -100px !important;">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h4 class="checksss">The following animals were affected in the Suburb</h4>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="https://maps.google.com/maps?q=werribee" class="block-20 rounded widthOnHover" style="background-image: url('/images/Heath Mouse.jpg');">
						</a>
						<div class="text p-4 suburb-text">
							<h3 style="text-align: center;">Heath Mouse</h3>
							<button class="btn infoButton" style="margin-bottom: 5px;" onMouseOver="this.style.color='#00bd56'" onMouseOut="this.style.color='#000'">Know More</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="https://maps.google.com/maps?q=mount+waverly" class="block-20 rounded widthOnHover" style="background-image: url('/images/Bridled Nailtail Wallaby.jpg');">
						</a>
						<div class="text p-4 suburb-text">
							<h4 style="text-align: center;">Bridled Nailtail Wallaby</h4>
							<button class="btn infoButton" style="margin-bottom: 5px;" onMouseOver="this.style.color='#00bd56'" onMouseOut="this.style.color='#000'">Know More</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="https://maps.google.com/maps?q=malvern+east" class="block-20 rounded widthOnHover" style="background-image: url('/images/Eastern Quoll.jpg');">
						</a>
						<div class="text p-4 suburb-text">
							<h3 style="text-align: center;">Eastern Quoll</h3>
							<button class="btn infoButton" style="margin-bottom: 5px;" onMouseOver="this.style.color='#00bd56'" onMouseOut="this.style.color='#000'">Know More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	@endsection

	@section('scripts')
	@parent
	<script type="text/javascript">
		$( document ).ready(function() {
			$(".suburb-section").hide();
			$(".animal-section").hide();

			$( ".custom-select" ).change(function() {
				$(".suburb-section").show();
				$('html,body').animate({
					scrollTop: $(".suburb-section").offset().top},
					'slow');
			});

			$('.animalButton').click(function(){
				$('.animalButton').parent().css("background-color", "#fff");
				$(this).parent().css("background-color", "#71dda2");
				$('.animal-section').css("margin-top", "-50px");
				$('.animal-section').show();
				$('html,body').animate({
					scrollTop: $(".animal-section").offset().top},
					'slow');

				$.ajax({
					url: 'getRecordsByRegion',
					type: 'get',
					dataType: 'json',
					success:function(response) {
						console.log("Response region: ");
						console.log(response);
					}
				});
			});

			$('.infoButton').click(function(){

				$.ajax({
					url: 'getRecordsBySpecies',
					type: 'get',
					dataType: 'json',
					success:function(response) {
						console.log("Response species: ");
						console.log(response);
					}
				});
			});

			$('.bushfireslink').addClass( "active" );
			$('.homelink').removeClass( "active" );
		});
	</script>
	@endsection