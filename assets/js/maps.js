/*var map;
var gana = {lat:7.946527,lng:-1.023194};

function initMap() {
          map = new google.maps.Map(document.getElementById('ap'), {
          zoom: 7,
          center:gana,
          mapTypeControl: false,
          panControl: false,
          zoomControl: true,
          treetViewControl: false
        });
		5.624554988069233,-0.14538712799549103

	*/
 function initMap() {
	 var loc = {lat:5.624554,lng:-0.145387};
        map = new google.maps.Map(document.getElementById('map'), {
          center:loc,
		   mapTypeControl: false,

          zoom: 8
        });
		var marker = new google.maps.Marker({position:loc, map: map});
      }