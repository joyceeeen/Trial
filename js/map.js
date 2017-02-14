$(document).ready(function(){
  var geocoder;
  var map;
  var marker;

  //navigation.geolocation.getCurrentPosition(successFunction,failedFunction,{timeout:10000});

  // function successFunction(position){
  var lat = 14.562921; //position.coords.latitude;
  var lng = 121.0228591; //position.coords.longitude;

  var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+lng+'&key=AIzaSyBlbfgiXejCsBBpDWR3WedpCkdSNbS6ZXc';
  $.getJSON(GEOCODING).done(function(location) {

    var city = location.results[0].address_components[2].long_name;
    var country = location.results[0].address_components[5].long_name;

  });

  // }
  // function failedFunction(){
  //   alert("Geocoder failed");
  // }
  codeAddress = function () {
    geocoder = new google.maps.Geocoder();
      var address = document.getElementById('city_country').value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map = new google.maps.Map(document.getElementById('mapCanvas'), {
          zoom: 16,
          streetViewControl: false,
          mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            mapTypeIds:[google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.ROADMAP]
          },
          center: results[0].geometry.location,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        map.setCenter(results[0].geometry.location);
        marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          draggable: true,
          title: 'My Title'
        });
        updateMarkerPosition(results[0].geometry.location);
        geocodePosition(results[0].geometry.location);

        // Add dragging event listeners.
        google.maps.event.addListener(marker, 'dragstart', function() {
          updateMarkerAddress('Dragging...');
        });

        google.maps.event.addListener(marker, 'drag', function() {
          updateMarkerStatus('Dragging...');
          updateMarkerPosition(marker.getPosition());
        });

        google.maps.event.addListener(marker, 'dragend', function() {
          updateMarkerStatus('Drag ended');
          geocodePosition(marker.getPosition());
          map.panTo(marker.getPosition());
        });

        google.maps.event.addListener(map, 'click', function(e) {
          updateMarkerPosition(e.latLng);
          geocodePosition(marker.getPosition());
          marker.setPosition(e.latLng);
          map.panTo(marker.getPosition());
        });

      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }

  function geocodePosition(pos) {
    geocoder.geocode({
      latLng: pos
    }, function(responses) {
      if (responses && responses.length > 0) {
        updateMarkerAddress(responses[0].formatted_address);
      } else {
        updateMarkerAddress('Cannot determine address at this location.');
      }
    });
  }

  function updateMarkerStatus(str) {
    document.getElementById('markerStatus').innerHTML = str;
  }

  function updateMarkerPosition(latLng) {
    document.getElementById('info').innerHTML = [
      latLng.lat(),
      latLng.lng()
    ].join(', ');
  }

  function updateMarkerAddress(str) {
    document.getElementById('address').innerHTML = str;
  }

});
