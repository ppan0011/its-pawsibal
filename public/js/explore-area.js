function initAutocomplete() {

    // Create the autocomplete object, restricting the search predictions to
    // geographical location types.
    autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {types: ['geocode']});

    // Avoid paying for data that you don't need by restricting the set of
    // place fields that are returned to just the address components.
    autocomplete.setFields(['geometry','address_component']);

    // When the user selects an address from the drop-down, populate the
    // address fields in the form.
    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        var suburb = null;

        if (place != null)
        {
            if (place.address_components != null)
            {
                for (var i = 0; i < place.address_components.length; i++)
                {
                    if (place.address_components[i].types != null)
                    {
                        if (place.address_components[i].types[0] == "locality")
                        {
                            suburb = place.address_components[i].long_name;
                            $('.suburbName').text(suburb);
                        }
                    }
                }
                // suburb = place.address_components[2];
            }

            if (place.geometry != null)
            {
                lat = place.geometry.location.lat();
                long = place.geometry.location.lng();
            }

            $.when(speciesDetails(lat,long), bushfireDetails(lat,long), suburbDetails(lat,long), distanceDetails(lat,long), chartDetails(suburb)).then(function(){
                 $('.resultsDetailSection').slideDown();
                $('html,body').animate({
                    scrollTop: $(".resultsDetailSection").position().top-20},
                    'slow');
            });

        //   $(document).ajaxComplete(function(){

        //     $('.detailsSection').show();
        //     $('.detailsSection').slideDown("slow");
        // });
    }
});
}

function navigatorFunction(position) 
{
    var lat = position.coords.latitude;
    var long = position.coords.longitude;
    var suburb = "Malvern East";

    $.when(speciesDetails(lat,long), bushfireDetails(lat,long), suburbDetails(lat,long), distanceDetails(lat,long), chartDetails(suburb)).then(function(){
                 $('.resultsDetailSection').slideDown();
                $('html,body').animate({
                    scrollTop: $(".resultsDetailSection").position().top-20},
                    'slow');
            });
}

function speciesDetails(lat,long) {
    $.ajax({
        url :"https://bushfire-victoria.herokuapp.com/species/"+long+" "+lat,
        dataType : "json",
        success : function(parsed_json) {
            console.log(parsed_json);
        }
    });
}

function bushfireDetails(lat,long) {
    $.ajax({
        url :"https://bushfire-victoria.herokuapp.com/bushfire/"+long+" "+lat,
        success : function(parsed_json) {
            var parsedArray = JSON.parse(parsed_json);
            var suburb = "";
            console.log(JSON.parse(parsed_json));

            for (var i = parsedArray.length - 1; i >= 0; i--) 
            {   
                suburb = parsedArray[i].message_key;
                console.log("gewt "+suburb);
            };
            $('.detailsSection').append("<h4>"+parsed_json+"</h4>");
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
        }  
    });
}

function suburbDetails(lat,long) {
    $.ajax({
        url :"https://bushfire-victoria.herokuapp.com/suburb/"+long+" "+lat,
        success : function(parsed_json) {
            var parsedArray = JSON.parse(parsed_json);
            var suburb = "";
            console.log(JSON.parse(parsed_json));

            for (var i = parsedArray.length - 1; i >= 0; i--) 
            {   
                suburb = parsedArray[i].suburb;
                console.log(suburb);
            };

            $('.detailsSection').append("<h4> You are in: <b>"+parsed_json+"</b> Suburb.</h4>");
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
        }  
    });
}

function distanceDetails(lat,long) {
    $.ajax({
        url :"https://bushfire-victoria.herokuapp.com/distance/"+long+" "+lat,
        success : function(parsed_json) {
            console.log(JSON.parse(parsed_json)[0].distance);

            var parsedArray = JSON.parse(parsed_json);
            var suburb = "";
            console.log(JSON.parse(parsed_json));

            for (var i = parsedArray.length - 1; i >= 0; i--) 
            {   
                suburb = parsedArray[i].distance;
            };

            $('.distanceDetails').text(suburb+" km(s).");
            // $('.detailsSection').append("<h4> "+parsed_json+"</h4>");
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
        }  
    });
}

function distanceDetailsLocation(position) {
    var lat = position.coords.latitude;
        var long = position.coords.longitude;
    $.ajax({
        url :"https://bushfire-victoria.herokuapp.com/distance/"+long+" "+lat,
        success : function(parsed_json) {
            console.log(JSON.parse(parsed_json)[0].distance);

            var parsedArray = JSON.parse(parsed_json);
            var suburb = "";
            console.log(JSON.parse(parsed_json));

            for (var i = parsedArray.length - 1; i >= 0; i--) 
            {   
                suburb = parsedArray[i].distance;
            };

            $('.distanceDetails').text(suburb+" km(s).");
            // $('.detailsSection').append("<h4> "+parsed_json+"</h4>");
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
        }  
    });
}

function chartDetails(suburb) {

    if (suburb != null)
    {
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Bushfire Affected Region in the Suburb'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            credits: {
                enabled: false
            },
            responsive: {  
                rules: [{  
                    condition: {  
                        maxWidth: 300,
                        maxHeight: 300
                    },  
                    chartOptions: {  
                        legend: {  
                            enabled: false  
                        }  
                    }  
                }]  
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: ['#84BD56', '#257229'],
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [getdata(suburb)]
        });
    }
}

function getdata(suburb) {

    var series = {
        type: 'pie',
        name: 'Percentage of Area:',
        data: [{"name":"Total Area of the Suburb","y":11.46},{"name":"Affected area","y":100 - 15.46}]
    };

    $.ajax({
        url: 'getRecordsBySuburbs',
        type: 'get',
        dataType: 'json',
        data: {
            suburb: suburb
        },
        success:function(response) {

            console.log("Response region: ");
            console.log(response[0].areaaffected);
        }
    });

    // console.log(series);
    // for (var i = 0; i < 25; i++) {

    //     series.data.push({
    //         name: "Total Area of the Suburb",
    //                 y: 100 
    //     },{
    //         name: "Total Area of the Suburb",
    //                 y: 100 
    //     });
    // }
    return series;
}

$(function() {
    $('.detailsSection').hide();

    $('.learnMore').click(function(){
        $('html,body').animate({
            scrollTop: $(".suburbDetails").offset().top},
            'slow');
    });
});