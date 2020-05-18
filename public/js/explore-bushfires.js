$( document ).ready(function() {

	// Firstly hide all the unimportant Divs
	$(".suburb-section").hide();
	$(".animal-section").hide();

	// Action: Trigger the select menu and load data using ajax
	$( ".custom-select" ).change(function() {

		$.ajax({
			url: 'getRecordsByRegion',
			type: 'get',
			dataType: 'json',
			success:function(response) {
				console.log("Response region: ");

				if (response != null)
				{		
					if (response.current_page == "1")
					{
						$('.previouspage').addClass('disabled');
					}

					if (response.data != null)
					{
						for (var i = 0; i < response.data.length; i++)
						{
							var suburbValue = response.data[i].suburbs;
							var suburbsLength = response.data[i].suburbs.split(" ").length;

							if ( suburbsLength > 1)
							{

							}
							else {
								$('.suburb-rows').append("<div class="+"col-md-4 d-flex ftco-animate"+"><div class="+"blog-entry"+"><a href="+"https://maps.google.com/maps?q=werribee"+" class="+"block-20 rounded"+"><iframe src="+"https://maps.google.com/maps?q='"+suburbValue+"'&t=&z=12&ie=UTF8&iwloc=&output=embed"+" frameborder=\"0 \" style=\"border:0; width: -webkit-fill-available; height: inherit;\" allowfullscreen></iframe></a><div class=\"text p-4 suburb-text\"><h3 style=\"text-align: center;\">"+suburbValue+"</h3><button class=\"btn animalButton\" value="+suburbValue+" style=\"margin-bottom: 5px;\" onMouseOver=\"this.style.color='#00bd56'\" onMouseOut=\"this.style.color='#000'\">View Affected Animals</button>						</div></div></div>");
							}
									// console.log(suburbsLength);
								}

								$('.suburb-section').show();
								$('html,body').animate({
									scrollTop: $(".suburb-section").offset().top},
									'slow');
								$('.know-more').show();
								$('.know-more').append("<button class=\"btn previouspage mr-2\"><a>Previous Page</a></button><button class=\"btn nextpage\"><a>Next Page</a></button>");

								$('.nextpageval').val(response.current_page);
							}
						}
					}
				});
				// $(".suburb-section").show();
				// $('html,body').animate({
				// 	scrollTop: $(".suburb-section").offset().top},
				// 	'slow');
		});

	// Action: Trigger the next page button to load data using AJAX
	$(document).on("click", ".nextpage" , function() {
		$('.animal-section').hide();
		var page = parseInt($('.nextpageval').val());
		page++;

		$.ajax({
			url: 'getRecordsByRegion?page='+page,
			type: 'get',
			dataType: 'json',
			success:function(response) {
				if (response != null)
				{		
					if (response.current_page == "1")
					{
						$('.previouspage').attr('disabled', 'disabled');
					}
					else
					{
						$('.previouspage').removeAttr('disabled');
					}

					$('.suburb-rows').html("");
					if (response.data != null)
					{
						for (var i = 0; i < response.data.length; i++)
						{
							var suburbValue = response.data[i].suburbs;
							var suburbsLength = response.data[i].suburbs.split(" ").length;

							if ( suburbsLength > 1)
							{

							}
							else {

								$('.suburb-rows').append("<div class="+"col-md-4 d-flex ftco-animate"+"><div class="+"blog-entry"+"><a href="+"https://maps.google.com/maps?q=werribee"+" class="+"block-20 rounded"+"><iframe src="+"https://maps.google.com/maps?q='"+suburbValue+"'&t=&z=12&ie=UTF8&iwloc=&output=embed"+" frameborder=\"0 \" style=\"border:0; width: -webkit-fill-available; height: inherit;\" allowfullscreen></iframe></a><div class=\"text p-4 suburb-text\"><h3 style=\"text-align: center;\">"+suburbValue+"</h3><button class=\"btn animalButton\" value="+suburbValue+" style=\"margin-bottom: 5px;\" onMouseOver=\"this.style.color='#00bd56'\" onMouseOut=\"this.style.color='#000'\">View Affected Animals</button>						</div></div></div>");
							}
									// console.log(suburbsLength);
								}

								$('.suburb-section').show();
								$('html,body').animate({
									scrollTop: $(".suburb-section").offset().top},
									'slow');

								$('.nextpageval').val(response.current_page);
							}
						}
					}
				});
	});

	// Action: Trigger the previous page button to load data using AJAX
	$(document).on("click", ".previouspage" , function() {
		$('.animal-section').hide();
		var page = parseInt($('.nextpageval').val());
		page--;

		$.ajax({
			url: 'getRecordsByRegion?page='+page,
			type: 'get',
			dataType: 'json',
			success:function(response) {
				if (response != null)
				{		
					$('.suburb-rows').html("");
					if (response.current_page == "1")
					{
						$('.previouspage').attr('disabled', 'disabled');
					}

					if (response.data != null)
					{
						for (var i = 0; i < response.data.length; i++)
						{
							var suburbValue = response.data[i].suburbs;
							var suburbsLength = response.data[i].suburbs.split(" ").length;

							if ( suburbsLength > 1)
							{

							}
							else {
								$('.suburb-rows').append("<div class="+"col-md-4 d-flex ftco-animate"+"><div class="+"blog-entry"+"><a href="+"https://maps.google.com/maps?q=werribee"+" class="+"block-20 rounded"+"><iframe src="+"https://maps.google.com/maps?q='"+suburbValue+"'&t=&z=12&ie=UTF8&iwloc=&output=embed"+" frameborder=\"0 \" style=\"border:0; width: -webkit-fill-available; height: inherit;\" allowfullscreen></iframe></a><div class=\"text p-4 suburb-text\"><h3 style=\"text-align: center;\">"+suburbValue+"</h3><button class=\"btn animalButton\" value="+suburbValue+" style=\"margin-bottom: 5px;\" onMouseOver=\"this.style.color='#00bd56'\" onMouseOut=\"this.style.color='#000'\">View Affected Animals</button>						</div></div></div>");
							}
									// console.log(suburbsLength);
								}

								$('.suburb-section').show();
								$('html,body').animate({
									scrollTop: $(".suburb-section").offset().top},
									'slow');

								$('.nextpageval').val(response.current_page);
							}
						}
					}
				});
	});

	// Action: Trigger the know more button to load data using AJAX for animal species
	$(document).on("click", ".animalButton" , function() {
		$('.animal-rows').html("");
		$('.animalButton').parent().css("background-color", "#fff");
		$(this).parent().css("background-color", "#71dda2");
				// $('.animal-section').css("margin-top", "-50px");
				$('.animal-section').show();
				$('html,body').animate({
					scrollTop: $(".animal-section").offset().top},
					'slow');

				$.ajax({
					url: 'getRecordsBySpecies',
					type: 'get',
					dataType: 'json',
					data: {
						suburb: $(this).attr('value')
					},
					success:function(response) {
						if (response != null)
						{
							if(response.data != null)
							{
								for (var i = 0; i < response.data.length; i++)
								{
									$('.animal-rows').append("<div class=\"col-md-4 d-flex\"><div class=\"blog-entry\"><a class=\"block-20 rounded widthOnHover\" style=\"background-image: url('/images/"+response.data[i].common_name+".jpg');\"></a><div class=\"text p-4 suburb-text\">	<h5 style=\"text-align: center;\">"+response.data[i].common_name+"</h5><div></div></div>");
								}
							}	
						}
					}
				});
			});

	// Action: Trigger info on know more in animal cards
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