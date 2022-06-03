/* eslint-disable no-unused-vars */
/* eslint-disable no-undef */

import $ from 'jquery'

global.mapStyle = [{
  elementType: 'geometry',
  stylers: [{
    color: '#666666'
  }]
},
{
  elementType: 'labels',
  stylers: [{
    visibility: 'off'
  }]
},
{
  elementType: 'labels.icon',
  stylers: [{
    visibility: 'off'
  }]
},
{
  elementType: 'labels.text.fill',
  stylers: [{
    color: '#757575'
  }]
},
{
  elementType: 'labels.text.stroke',
  stylers: [{
    color: '#666666'
  }]
},
{
  featureType: 'administrative',
  elementType: 'geometry',
  stylers: [{
    color: '#757575'
  },
  {
    visibility: 'off'
  }
  ]
},
{
  featureType: 'administrative.country',
  elementType: 'labels.text.fill',
  stylers: [{
    color: '#9e9e9e'
  }]
},
{
  featureType: 'administrative.land_parcel',
  stylers: [{
    visibility: 'off'
  }]
},
{
  featureType: 'administrative.locality',
  elementType: 'labels.text.fill',
  stylers: [{
    color: '#bdbdbd'
  }]
},
{
  featureType: 'administrative.neighborhood',
  stylers: [{
    visibility: 'off'
  }]
},
{
  featureType: 'poi',
  stylers: [{
    visibility: 'off'
  }]
},
{
  featureType: 'poi',
  elementType: 'labels.text.fill',
  stylers: [{
    color: '#757575'
  }]
},
{
  featureType: 'poi.park',
  elementType: 'geometry',
  stylers: [{
    color: '#181818'
  }]
},
{
  featureType: 'poi.park',
  elementType: 'labels.text.fill',
  stylers: [{
    color: '#616161'
  }]
},
{
  featureType: 'poi.park',
  elementType: 'labels.text.stroke',
  stylers: [{
    color: '#1b1b1b'
  }]
},
{
  featureType: 'road',
  stylers: [{
    visibility: 'off'
  }]
},
{
  featureType: 'road',
  elementType: 'geometry.fill',
  stylers: [{
    color: '#2c2c2c'
  }]
},
{
  featureType: 'road',
  elementType: 'labels.icon',
  stylers: [{
    visibility: 'off'
  }]
},
{
  featureType: 'road',
  elementType: 'labels.text.fill',
  stylers: [{
    color: '#8a8a8a'
  }]
},
{
  featureType: 'road.arterial',
  elementType: 'geometry',
  stylers: [{
    color: '#373737'
  }]
},
{
  featureType: 'road.highway',
  elementType: 'geometry',
  stylers: [{
    color: '#3c3c3c'
  }]
},
{
  featureType: 'road.highway.controlled_access',
  elementType: 'geometry',
  stylers: [{
    color: '#4e4e4e'
  }]
},
{
  featureType: 'road.local',
  elementType: 'labels.text.fill',
  stylers: [{
    color: '#616161'
  }]
},
{
  featureType: 'transit',
  stylers: [{
    visibility: 'off'
  }]
},
{
  featureType: 'transit',
  elementType: 'labels.text.fill',
  stylers: [{
    color: '#757575'
  }]
},
{
  featureType: 'water',
  elementType: 'geometry',
  stylers: [{
    color: '#111111'
  }]
},
{
  featureType: 'water',
  elementType: 'labels.text.fill',
  stylers: [{
    color: '#3d3d3d'
  }]
}
]

export const appendMaps = () => {
  var mapScript = document.createElement('script')
  mapScript.setAttribute('src', 'https://maps.googleapis.com/maps/api/js?key=' + $('.acf-map').data().key + '&callback=initMap')
  document.getElementsByClassName('acf-map')[0].parentNode.appendChild(mapScript)
}

export const initMap = () => {
  const mapData = $('.acf-map').data()
  const markerData = $('.marker').data()

  var map = new google.maps.Map(document.getElementsByClassName('acf-map')[0], {
    styles: mapStyle,
    disableDefaultUI: true,
    center: { lat: 43.370216, lng: 20.644 },
    zoom: 4,
    minZoom: 3,
    restriction: {
      latLngBounds: {
        north: 85,
        south: -85,
        west: -150,
        east: 150
      }
    }
  })
  var marker = new google.maps.Marker({
    position: markerData,
    map: map,
    icon: {
      url: '/wp-content/uploads/2022/05/markerorange-1.svg',
      scaledSize: new google.maps.Size(10, 20)
    }
  })
}
