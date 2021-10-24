//create a google map
var mapCenter = {
    lat: 51.5,
    lng: -0.1
};
var mapOptions = {
    center: mapCenter,
    zoom: 7,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById("map"), mapOptions);

//create google map autocomplete, directionsService, and directionsRenderer
var autocompleteOptions = {
    types: ['(cities)']
};
var originInput = document.getElementById("origin");
var destinationInput = document.getElementById("destination");
var autocomplete = new google.maps.places.Autocomplete(originInput, autocompleteOptions);
var autocomplete = new google.maps.places.Autocomplete(destinationInput, autocompleteOptions);
var directionsService = new google.maps.DirectionsService();
var directionsRenderer = new google.maps.DirectionsRenderer();
directionsRenderer.setMap(map);

//calculate route and display route on map
$("#submit").click(function(){
    //if users miss origin or destination
    if(!originInput.value || !destinationInput.value)
    {
        directionsRenderer.setDirections(null);
        map.panTo(mapCenter);
        $("#message").removeClass("alert alert-info");
        $("#message").addClass("alert alert-danger");
        $("#message").html("<p>Missing origin input or destination input!</p>");
    }
    else
    {
        //display route's information and render route on map
        var origin = originInput.value;
        var destination = destinationInput.value;
        var request = {
            origin: origin,
            destination: destination,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, (result, status) => {
            if(status == google.maps.DirectionsStatus.OK)
            {
                var message = `<p>From: ${origin}</p>`;
                message += `<p>To: ${destination}</p>`;
                message += `<p>Driving distance: ${result.routes[0].legs[0].distance.text}</p>`;
                message += `<p>Duration: ${result.routes[0].legs[0].duration.text}</p>`;
                $("#message").removeClass("alert alert-danger");
                $("#message").addClass("alert alert-info");
                $("#message").html(message);
                directionsRenderer.setDirections(result);
                map.setZoom(15);
            }
            else
            {
                directionsRenderer.setDirections(null);
                map.panTo(mapCenter);
                $("#message").removeClass("alert alert-info");
                $("#message").addClass("alert alert-danger");
                $("#message").html("<p>Could not retrieve driving distance.</p>")
            }
        });
    }
});