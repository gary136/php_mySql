<!DOCTYPE html>
<html>
  <head>
    <title>Showing pixel and tile coordinates</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 60%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    
    <script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgrOC3R0lD3-mCYWKMMk5x0FThs9a5dE4&libraries=visualization"></script>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: {
      lat: 25.0372552,
      lng: 121.5289301,
      mapTypeId:google.maps.MapTypeId.SATELLITE
    }
  });

  var heatmap = new google.maps.visualization.HeatmapLayer({
    map: map,
    data: [
      new google.maps.LatLng(25.038824, 121.523301),
      new google.maps.LatLng(25.032753, 121.5200025),
      new google.maps.LatLng(25.0402287, 121.530047),
      new google.maps.LatLng(25.0359927, 121.5319759),
      new google.maps.LatLng(25.0402287, 121.530047),
      new google.maps.LatLng(25.013346, 121.534352),
      new google.maps.LatLng(25.019635, 121.526682),
      new google.maps.LatLng(25.0343989, 121.5309384),
      new google.maps.LatLng(25.0425005, 121.5298391),
      new google.maps.LatLng(25.026073, 121.5191105),
      new google.maps.LatLng(25.025617, 121.516126),
      new google.maps.LatLng(25.025617, 121.516126)
    ],
    radius:65

  });
}
initMap();
    </script>
    
  </body>
</html>