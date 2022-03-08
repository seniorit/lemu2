
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(
    function(position) {
      var currentLatitude = position.coords.latitude;
      var currentLongitude = position.coords.longitude;
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: new google.maps.LatLng(currentLatitude, currentLongitude),
      });

      //your dynamic markers
     // var markers = @Html.Raw(Json.Encode(Model.UpcomingLectureGigs));

      //default marker at current location
      //var markers = new google.maps.Marker({
      //position: new google.maps.LatLng(currentLatitude, currentLongitude),
      //map: map,
      //title: 'Hello World!'
      //});

       var userLatLng = new window.google.maps.LatLng(currentLatitude, currentLongitude);

      //your filter function
      var markersFiltered = markers.filter(function(markers, index, array, google) {
        var myLatlng = new window.google.maps.LatLng(markers.Latitude, markers.Longitude);
        return google.maps.geometry.spherical.computeDistanceBetween(userLatLng, myLatlng) < 10000;
      });

      window.onload = function(a) {
        var mapOptions = {
          center: new window.google.maps.LatLng(markers[0].Latitude, markers[0].Longitude),
          zoom: 8,
          mapTypeId: window.google.maps.MapTypeId.ROADMAP
        };

        var infoWindow = new window.google.maps.InfoWindow();
        var map = new window.google.maps.Map(document.getElementById("dvMap"), mapOptions);

        for (var i = 0; i < markersFiltered.length; i++) {
          var data = markers[i];
          var myLatlng = new window.google.maps.LatLng(data.Latitude, data.Longitude);
          var marker = new window.google.maps.Marker({
            position: myLatlng,
            draggable: true,
            animation: google.maps.Animation.DROP,
            get map() {
              return map;
            }
          });
          (function(marker, data) {
            window.google.maps.event.addListener(marker,
              "click",
              function(e) {
                infoWindow.setContent(data.Venue + " " + data.Genre.Name);
                infoWindow.open(map, marker);
              });
          })(marker, data);
        }

      };
    });
}; 