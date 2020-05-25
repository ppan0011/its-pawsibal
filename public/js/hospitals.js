var map;
var service;
var infowindow;
var lat;
var long;
var radius = "5000";

function initAutocomplete() {

    // Create the autocomplete object, restricting the search predictions to
    // geographical location types.
    autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {types: ['geocode']});

    // Avoid paying for data that you don't need by restricting the set of
    // place fields that are returned to just the address components.
    autocomplete.setFields(['geometry']);

    // When the user selects an address from the drop-down, populate the
    // address fields in the form.
    autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();

      if (place.geometry != null)
      {
        lat = place.geometry.location.lat();
        long = place.geometry.location.lng();

        initialize(lat, long);
        $('.resultsDetailSection').slideDown();
      }
      else 
      {
        alert('Enter Location Again');
      }
    });
  }

  function initialize(lat, long) {
    $('.addDetails').html("");
    var pyrmont = new google.maps.LatLng(lat,long);

    infowindow = new google.maps.InfoWindow();

    map = new google.maps.Map(document.getElementById('map'), {
      center: pyrmont,
      zoom: 10
    });

    var request = {
      location: pyrmont,
      radius: parseInt(document.getElementById('inputarea').value, 10),
      type: ['veterinary_care'],
    };

    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);

  }

  function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        createMarker(results[i]);
      }
    }
  }

  function createMarker(place) {
    console.log("Place");
    console.log(place);
    var icon = {
    url: '../images/zoo.png', // url
    scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0),// anchor
    fillColor: '#6331AE',
  };
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    icon: icon
  });

  $('.addDetails').append("<div class=\"col-md-4 d-flex\"><div class=\"blog-entry\"><div class=\"text p-4 suburb-text d-flex\"><h3 style=\"text-align: center;\">"+place.name+"</h3><button class=\"btn animalButton placeLink mt-auto\" style=\"margin-bottom: 5px;\" onMouseOver=\"this.style.color='#00bd56'\" onMouseOut=\"this.style.color='#000'\"><a href=\"https://www.google.com/maps/place/"+place.vicinity+"\" target=\"blank\">View On Google Maps</a></button></div></div></div>");

  google.maps.event.addListener(marker, 'click', function() {

    infowindow.setContent("<b>Hospital Name: </b>"+place.name+"<br> <b>Location: </b>"+place.vicinity);
    infowindow.open(map, this);
    map.setZoom(14);
    map.setCenter(marker.getPosition());
  });
}

$('.custom-select').change(function() {
  if (lat == undefined || long == undefined)
  {
    alert("Please enter a Location");
    radius = $(this).val();
    $('#inputarea').val(radius);
  }
  else
  {
    radius = $(this).val();
    $('#inputarea').val(radius);
    initialize(lat, long);
  }
});