<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete Address Form</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
  </head>

  <body>
    <div id="locationField">
      <input id="autocomplete" placeholder="Enter your address" type="text"></input>
    </div>

    <script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('autocomplete')),
            {types: ['geocode']});
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        var place = autocomplete.getPlace();
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPmaFdA6QXTiAlVPgNIr4mZ-hwIyeI_qU&libraries=places&callback=initAutocomplete" async defer></script>
  </body>
</html>