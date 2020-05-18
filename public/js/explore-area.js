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

            // $.when(speciesDetails(lat,long), bushfireDetails(lat,long), suburbDetails(lat,long), distanceDetails(lat,long)).then(function(){
            //     console.log("in");
            // });

            $.when(chartDetails(suburb)).then(function(){
                
            });
        //   $(document).ajaxComplete(function(){

        //     $('.detailsSection').show();
        //     $('.detailsSection').slideDown("slow");
        // });
    }
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
            console.log(parsed_json);
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
            console.log(parsed_json);
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
            console.log(parsed_json);
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
        name: '',
        data: []
    };

    // $.ajax({
    //     url: 'getRecordsBySuburbs',
    //     type: 'get',
    //     dataType: 'json',
    //     data: {
    //         suburb: suburb
    //     },
    //     success:function(response) {
            
    //         console.log("Response region: ");
    //         console.log(response);
    //     }
    // });

    for (var i = 0; i < 25; i++) {
        series.data.push({
            name: i.toString(),
            y: 754 + i
        });
    }
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