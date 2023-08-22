var marker;
map.on('click', function (e) {
    if (marker) { // check
        map.removeLayer(marker); // remove
    }
    // marker = new L.Marker(e.latlng); // set
     marker = new L.marker(e.latlng, {draggable:'true'}).addTo(map);
    document.getElementById('latitude').value = marker.getLatLng().lat;
    document.getElementById('longitude').value = marker.getLatLng().lng;
});
function sConsole(event) {event.preventDefault();
var data = document.getElementById("name");
var data1 = document.getElementById("location");
var data2 = document.getElementById("comment");
var data3 = document.getElementById("cdate");
var data4 = document.getElementById("latitude");
var data5 = document.getElementById("longitude");
}
