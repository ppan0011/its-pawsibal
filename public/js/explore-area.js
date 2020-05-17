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
        if (place != null)
        {
          lat = place.geometry.location.lat();
          long = place.geometry.location.lng();

            $.when(speciesDetails(lat,long), bushfireDetails(lat,long)).then(function(){
                console.log("in");
            });
            $(document).ajaxComplete(function(){
                console.log("insdfs");
                });
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
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
        }  
    });
}