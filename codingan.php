<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="map_canvas" style="height: 600px; width: 800px"></div>

<script type="text/javascript">

	
	var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;
   
    function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();

   //Mengambil koordinat utama
   var latLng = new google.maps.LatLng(-6.183905,106.826838);

   //Membuat map utama
   var map = new google.maps.Map(document.getElementById('map_canvas'), {
   zoom: 11,
   center: latLng,
   mapTypeControl: false,
   mapTypeId: google.maps.MapTypeId.ROADMAP
   }); 
   //Mendapatkan koordinat device yang sekarang
   navigator.geolocation.getCurrentPosition(function(position) {
      //Membuat variabel untuk posisi     
      var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
      //Mengambil gambar
      //Membuat marker pada koordinat tersebut
      var marker = new google.maps.Marker({
         position: geolocate,
         map: map,
         animation:google.maps.Animation.BOUNCE,
         title: "here"

      });
   });

}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfPEyzhE27TUrMGysLGQDVvXzqldt56bw&callback=initialize"
    async defer></script>

</body>
</html>