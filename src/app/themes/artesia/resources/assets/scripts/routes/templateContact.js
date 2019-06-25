/*global google*/

export default {
    init() {
        // JavaScript to be fired on the home page
    },
    finalize() {

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googleMap');
        var lat = $(mapElement).data('lat');
        var lng = $(mapElement).data('lng');
        var zoom = $(mapElement).data('zoom');
        
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: zoom,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(lat, lng), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#6195a0",
                                },
                            ],
                        },
                        {
                            "featureType": "administrative.province",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "visibility": "off",
                                },
                            ],
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "lightness": "0",
                                },
                                {
                                    "saturation": "0",
                                },
                                {
                                    "color": "#f5f5f2",
                                },
                                {
                                    "gamma": "1",
                                },
                            ],
                        },
                        {
                            "featureType": "landscape.man_made",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "lightness": "-3",
                                },
                                {
                                    "gamma": "1.00",
                                },
                            ],
                        },
                        {
                            "featureType": "landscape.natural.terrain",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off",
                                },
                            ],
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off",
                                },
                            ],
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#bae5ce",
                                },
                                {
                                    "visibility": "on",
                                },
                            ],
                        },
                        {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100,
                                },
                                {
                                    "lightness": 45,
                                },
                                {
                                    "visibility": "simplified",
                                },
                            ],
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "simplified",
                                },
                            ],
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#fac9a9",
                                },
                                {
                                    "visibility": "simplified",
                                },
                            ],
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "color": "#4e4e4e",
                                },
                            ],
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#787878",
                                },
                            ],
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off",
                                },
                            ],
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "simplified",
                                },
                            ],
                        },
                        {
                            "featureType": "transit.station.airport",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "hue": "#0a00ff",
                                },
                                {
                                    "saturation": "-77",
                                },
                                {
                                    "gamma": "0.57",
                                },
                                {
                                    "lightness": "0",
                                },
                            ],
                        },
                        {
                            "featureType": "transit.station.rail",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#43321e",
                                },
                            ],
                        },
                        {
                            "featureType": "transit.station.rail",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "hue": "#ff6c00",
                                },
                                {
                                    "lightness": "4",
                                },
                                {
                                    "gamma": "0.75",
                                },
                                {
                                    "saturation": "-68",
                                },
                            ],
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#eaf6f8",
                                },
                                {
                                    "visibility": "on",
                                },
                            ],
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#c7eced",
                                },
                            ],
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "lightness": "-49",
                                },
                                {
                                    "saturation": "-53",
                                },
                                {
                                    "gamma": "0.79",
                                },
                            ],
                        },
            ],
        };

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        new google.maps.Marker({
            position: new google.maps.LatLng(lat, lng),
            map: map,
            title: 'Artesia',
        });

    },
};
