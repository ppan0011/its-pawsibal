@extends('layouts.master')

@section('title', 'Local Rules')

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

<section class="ftco-section ftco-no-pt ftco-no-pb">
<div class = "container">
    <div class="row d-flex no-gutters">
        <h3><a href='https://files-em.em.vic.gov.au/public/EMV-web/State-Bush-Fire-Plan-2014.pdf'>State bushfire plan 2014</a></h3>
        <p>All people, no matter where they live, must understand the bushfire risk. They have a
        responsibility to learn about bushfire and to undertake measures to mitigate their own exposure
        to it. They must act to ensure their own safety.
        </p>
    </div>

    <div class="row d-flex no-gutters">
        <h3><a href='https://www.environment.gov.au/epbc/publications/factsheet-bushfire-management-and-national-environment-law'>Environment Protection and Biodiversity Conservation Act 1999</a></h3>
        <p>Some fire prevention activities might need to be referred for approval.
        </p>
        <p>One-off fuel reduction burns in remnant forest that is important habitat for nationally threatened species and has not been previously subject to burning regimes</p>
        <p>Constructing substantial new fire breaks, asset protection zones, access roads or tracks on a significant scale, in habitat for nationally threatened species or areas that form part of a nationally threatened ecological community</p>
        <p>Trial or experimental ecological burns, on a significant scale, in habitat for nationally threatened species or areas that form part of a nationally threatened ecological community</p>
    </div>

    <div class="row d-flex">
        <h3><a href='https://www.legislation.gov.au/Details/F2016L00043/Html/Text#_TOC_250007'>Environment Protection and Biodiversity Conservation Act 1999 - Section 285</a></h3>
        <p>Disturbance from human activities has a high energetic cost to shorebirds and may compromise their capacity to build sufficient energy reserves to undertake migration.</p>
        <p>Migratory shorebirds are most susceptible to disturbance during daytime roosting and foraging periods. As an example, disturbance of migratory shorebirds in Australia is known to result from aircraft over-flights, industrial operations and construction, artificial lighting, and recreational activities such as fishing, off-road driving on beaches, unleashed dogs and jet-skiing.</p>
    </div>

    <div class="row d-flex ">
        <h3><a href='https://www.legislation.gov.au/Details/C2013C00301'>Environment Protection and Biodiversity Conservation Act 1999 - 207B</a></h3>
        <p>A person is guilty of an offence if the person takes an action and knows action significantly damages or will significantly damage critical habitat for a listed threatened species or of a listed threatened ecological community and the habitat is in or on a Commonwealth area.</p>
        <p>Penalty: The offence is punishable on conviction by imprisonment for not more than 2 years or a fine not exceeding 1,000 penalty units, or both.</p>
    </div>

     <div class="row d-flex">
        <h3><a href='http://classic.austlii.edu.au/au/legis/vic/consol_act/wa197593/s87.html'>WILDLIFE ACT 1975 - Sect 87</a></h3>
        <p>Prohibiting absolutely the taking or hunting, of any particular kind of wildlife at large and the possession keeping or control of any wildlife so taken;</p>
        <p>Prohibiting or regulating the handling, keeping, possession, controlling, or releasing of wildlife, prescribing the conditions under which wildlife may be kept in captivity, and prescribing enclosure and cage sizes for the keeping of any kind of wildlife;</p>
        <p>Regulating and controlling the taking of wildlife at large in an open season therefor, fixing and enforcing bag limits for any kind of wildlife and regulating the taking of protected wildlife on wildlife farms licensed</p>
    </div>

    <div class="row d-flex ">
        <h3><a href='https://www.legislation.gov.au/Details/C2004A00849'>Environment Protection and Biodiversity Conservation Amendment (Wildlife Protection) Act 2001</a></h3>
        <p>"Just because you find a wild animal doesn't mean you own it"</p>
        <p>A person is guilty of an offence if the person exports a live animal in a manner that subjects the animal to cruel treatment, or the person knows that, or is reckless as to whether, the export subjects the animal to cruel treatment, or the animal is a regulated native specimen</p>
        <p>Penalty: Imprisonment for 2 years</p>
    </div>

    <div class="row ">
        <h3><a href='http://classic.austlii.edu.au//au/legis/vic/hist_act/poaa1966227/'>Protection of Animals Act 1966</a></h3>
        <!-- <br><br><p>"Don't release animals into the wild at random"</p> -->
        <p>Causes or procures the release of an animal in such circumstances that it will be or is likely to be pursued injured or killed by a dog</p>
        <p>Penalty: Imprisonment for twelve months.</p>
    </div>
</div>
</section>
@endsection