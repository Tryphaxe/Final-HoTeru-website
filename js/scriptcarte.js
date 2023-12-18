function initMap() {
    const selector = document.getElementById("carte")
    const center = { lat: 5.3423376, lng: -4.0599765 }
    const options = {
      center: center,
      zoom : 8,
    }
  
  const map = new google.maps.Map(selector, options);
  }
  
  const marker = new google.maps.Marker({
    position: { lat: 5.3423376, lng: -4.0599765 },
    title: 'Lieu',
    position: center,
    map: map,
    icon: "../im/hoteruicon.png"
  });