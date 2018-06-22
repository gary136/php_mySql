<!DOCTYPE html>
<html>
    <head>
        <title>Introduction to Google Maps Javascript API</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <style>
            html, body{
                height:100%;   
            }
            #map{
                height:60%; 
                  
            }
        </style>
    </head>
    
    <body>
        <div id="map"></div>
        
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgrOC3R0lD3-mCYWKMMk5x0FThs9a5dE4"></script>
<script>
// set map option
    var myLatLng = {lat: 25.04, lng:121.53}
    var mapOptions = {
        center: myLatLng,
        zoom: 15,
        mapTypeId:google.maps.MapTypeId.SATELLITE
    }

//create map
    var map = new google.maps.Map(document.getElementById('map'), mapOptions)

//setting the mapTypeId upon construction
    map.setMapTypeId(google.maps.MapTypeId.ROADMAP)
    
</script>
    </body>

</html>