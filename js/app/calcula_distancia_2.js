<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry"></script> 

<script> 
var p1 = new google.maps.LatLng(-29.444605, -66.867157); 
var p2 = new google.maps.LatLng(-29.445284, -66.858714); 

alert(calcDistance(p1, p2)); 

//calculates distance between two points in km's 
function calcDistance(p1, p2) { 
    return (google.maps.geometry.spherical.computeDistanceBetween(p1, p2)/1000).toFixed(2); 
} 

</script>