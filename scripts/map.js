// Initialize and add the map
// function initMap() {
//     // The location of Uluru
//     const uluru = { lat: 24.868353856378757, lng: 67.0816387829692 };
//     // The map, centered at Uluru
//     const map = new google.maps.Map(document.getElementById("map"), {
//       zoom: 18,
//       center: uluru,
//     });
//     // The marker, positioned at Uluru
//     const marker = new google.maps.Marker({
//       position: uluru,
//       map: map,
//     });
//   }

function initMap() {
  // The location of Uluru
  const uluru = [
    { lat: 24.868353856378757, lng: 67.0816387829692 },
    { lat: 24.858019779309796, lng: 67.0830798694745 },
  ];
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 18,
    center: uluru[0],
  });
  // The marker, positioned at Uluru
  for (let i = 0; i < uluru.length; i++) {
    let marker = new google.maps.Marker({
      position: uluru[i],
      map: map,
    });
  }
}

window.initMap = initMap;
