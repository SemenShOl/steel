//---------------------------------
//	Helpers
//---------------------------------

export const helpers = {
    getUrlParameter: function(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    },
    yandexMapInit: function(mapEl, mapObjects, mapCenter, mapZoom = 12){
        if (typeof ymaps === 'object') {
            ymaps.ready(init);
        }
        
        function init(){

            // Создание карты.
            if (mapEl !== undefined) {

                var myMap = new ymaps.Map(mapEl, {
                    center: mapCenter, 
                    zoom: mapZoom !== undefined ? mapZoom : 14,
                    type: 'yandex#map',
                    controls: []
                }),
                geoObjects = [],
                controlOptions = {};


                controlOptions = {
                    float: 'none',
                    position: {
                        right: 30,
                        bottom: 65
                    }
                }
               


                myMap.controls.add('zoomControl', controlOptions);
                myMap.behaviors.disable('scrollZoom');


                var fullscreenControl = new ymaps.control.FullscreenControl({
                    options: {
                        position: {
                            top: 30,
                            right: 30
                        }
                    }
                });
                myMap.controls.add(fullscreenControl);
                
                let mapMarkersArr = mapObjects;

                if (mapObjects !== undefined && mapObjects.length > 0) {

                    mapMarkersArr.forEach(item => {
                        myMap.geoObjects
                            .add(new ymaps.Placemark([item.coords[0], item.coords[1]], {
                                balloonContent: item.infoWindowText
                            }, {
                                iconLayout: 'default#image',
                                iconImageHref: item.iconUrl,
                                iconImageSize: item.iconSize,
                                iconImageOffset: item.iconOffset
                            }))
                    });

                }
                
            }
            
        }
    },

    googleMapInit: function(mapEl, mapMarkers, mapCenter, mapZoom = 12) {

        if (typeof google !== 'undefined') {
          if (google !== null && google !== undefined) {
            initMap();
          }
        }

        function ZoomControl(controlDiv, map) {
            // Creating divs & styles for custom zoom control
            controlDiv.classList.add('google-map-control');
            controlDiv.style.top = '0px';
            controlDiv.style.bottom = '0px';
            controlDiv.style.margin = 'auto';
            controlDiv.style.height = '160px';
            controlDiv.style.padding = '15px 50px 15px 50px';
          
            // Set CSS for the control wrapper
            var controlWrapper = document.createElement('div');
            // controlWrapper.style.backgroundColor = '#E0FC65';
            // controlWrapper.style.borderStyle = 'solid';
            // controlWrapper.style.borderColor = '#E0FC65';
            // controlWrapper.style.borderWidth = '1px';
            controlWrapper.style.cursor = 'pointer';
            controlWrapper.style.textAlign = 'center';
            // controlWrapper.style.width = '50px'; 
            // controlWrapper.style.height = '110px';
            controlDiv.appendChild(controlWrapper);
            
            // Set CSS for the zoomIn
            var zoomInButton = document.createElement('div');
            zoomInButton.style.width = '60px'; 
            zoomInButton.style.height = '60px';
            zoomInButton.style.marginBottom = '10px';
            /* Change this to be the .png image you want to use */
            zoomInButton.style.backgroundRepeat = 'no-repeat';
            zoomInButton.style.backgroundPosition = 'center';
            zoomInButton.style.backgroundColor = '#343434';
            zoomInButton.style.backgroundImage = 'url(' + globalParams.theme_url + '/assets/images/svg/plus-white.svg' + ')';
            zoomInButton.style.backgroundSize = '30px';
            controlWrapper.appendChild(zoomInButton);
              
            // Set CSS for the zoomOut
            var zoomOutButton = document.createElement('div');
            zoomOutButton.style.width = '60px'; 
            zoomOutButton.style.height = '60px';
            /* Change this to be the .png image you want to use */
            zoomOutButton.style.backgroundRepeat = 'no-repeat';
            zoomOutButton.style.backgroundPosition = 'center';
            zoomOutButton.style.backgroundColor = '#fff';
            zoomOutButton.style.backgroundImage = 'url(' + globalParams.theme_url + '/assets/images/svg/minus-black.svg' + ')';
            zoomOutButton.style.backgroundSize = '30px';
            controlWrapper.appendChild(zoomOutButton);
          

            zoomInButton.addEventListener('click', function() {
                map.setZoom(map.getZoom() + 1);
            });

            zoomOutButton.addEventListener('click', function() {
                map.setZoom(map.getZoom() - 1);
            });

        }

       
        function setMapMarker(map, item, infowindow) {
          const marker = new google.maps.Marker({
              position: { lat: item.coords[0], lng: item.coords[1] },
              map,
              icon: {
                  url: item.iconUrl,
                  size: new google.maps.Size(item.iconSize[0], item.iconSize[1]),
                  anchor: new google.maps.Point(item.iconOffset[0], item.iconOffset[1]), // offset
                  scaledSize: new google.maps.Size(item.iconSize[0], item.iconSize[1]),
              }
          });

          marker.addListener("click", () => {
              infowindow.open({
                  anchor: marker,
                  map,
              });
          });
        }

        function initMap(markersType = 'all') {
            if (mapEl !== undefined) {
                const styledMapType = new google.maps.StyledMapType(
                    [
                        {
                          "elementType": "geometry",
                          "stylers": [
                            {
                              "color": "#212121"
                            }
                          ]
                        },
                        {
                          "elementType": "labels.icon",
                          "stylers": [
                            {
                              "visibility": "off"
                            }
                          ]
                        },
                        {
                          "elementType": "labels.text.fill",
                          "stylers": [
                            {
                              "color": "#757575"
                            }
                          ]
                        },
                        {
                          "elementType": "labels.text.stroke",
                          "stylers": [
                            {
                              "color": "#212121"
                            }
                          ]
                        },
                        {
                          "featureType": "administrative",
                          "elementType": "geometry",
                          "stylers": [
                            {
                              "color": "#757575"
                            }
                          ]
                        },
                        {
                          "featureType": "administrative.country",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            {
                              "color": "#9e9e9e"
                            }
                          ]
                        },
                        {
                          "featureType": "administrative.land_parcel",
                          "stylers": [
                            {
                              "visibility": "off"
                            }
                          ]
                        },
                        {
                          "featureType": "administrative.locality",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            {
                              "color": "#bdbdbd"
                            }
                          ]
                        },
                        {
                          "featureType": "poi",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            {
                              "color": "#757575"
                            }
                          ]
                        },
                        {
                          "featureType": "poi.park",
                          "elementType": "geometry",
                          "stylers": [
                            {
                              "color": "#181818"
                            }
                          ]
                        },
                        {
                          "featureType": "poi.park",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            {
                              "color": "#616161"
                            }
                          ]
                        },
                        {
                          "featureType": "poi.park",
                          "elementType": "labels.text.stroke",
                          "stylers": [
                            {
                              "color": "#1b1b1b"
                            }
                          ]
                        },
                        {
                          "featureType": "road",
                          "elementType": "geometry.fill",
                          "stylers": [
                            {
                              "color": "#2c2c2c"
                            }
                          ]
                        },
                        {
                          "featureType": "road",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            {
                              "color": "#8a8a8a"
                            }
                          ]
                        },
                        {
                          "featureType": "road.arterial",
                          "elementType": "geometry",
                          "stylers": [
                            {
                              "color": "#373737"
                            }
                          ]
                        },
                        {
                          "featureType": "road.highway",
                          "elementType": "geometry",
                          "stylers": [
                            {
                              "color": "#3c3c3c"
                            }
                          ]
                        },
                        {
                          "featureType": "road.highway.controlled_access",
                          "elementType": "geometry",
                          "stylers": [
                            {
                              "color": "#4e4e4e"
                            }
                          ]
                        },
                        {
                          "featureType": "road.local",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            {
                              "color": "#616161"
                            }
                          ]
                        },
                        {
                          "featureType": "transit",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            {
                              "color": "#757575"
                            }
                          ]
                        },
                        {
                          "featureType": "water",
                          "elementType": "geometry",
                          "stylers": [
                            {
                              "color": "#000000"
                            }
                          ]
                        },
                        {
                          "featureType": "water",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            {
                              "color": "#3d3d3d"
                            }
                          ]
                        }
                    ]
                );
                
                const directionsService = new google.maps.DirectionsService();
                const directionsRenderer = new google.maps.DirectionsRenderer();

                
                
                let mapCenterInit = { lat: 55.0262998, lng: 82.9143595}; 


                if (mapCenter) {
                    mapCenterInit = { lat: mapCenter[0], lng: mapCenter[1]}; 
                }
                
                

                const map = new google.maps.Map(mapEl, {
                    zoom: mapZoom,
                    center: mapCenterInit,
                    scaleControl: false,
                    mapTypeControl: false,
                    fullscreenControl: false,
                    zoomControl: false,
                    streetViewControl: false,
                    scrollwheel: false,
                });

                map.mapTypes.set("styled_map", styledMapType);
                map.setMapTypeId("styled_map");

                directionsRenderer.setMap(map);
                


                var zoomControlDiv = document.createElement('div');
                var zoomControl = new ZoomControl(zoomControlDiv, map);

                zoomControlDiv.index = 1;
                map.controls[google.maps.ControlPosition.BOTTOM_RIGHT].push(zoomControlDiv);


                if (mapMarkers !== undefined && mapMarkers.length > 0) {
                    let mapMarkersArr = mapMarkers;

                    // if (markersType !== 'all') {
                    //     mapMarkersArr = [];
                    //     mapMarkers.forEach(item => {
                    //         mapMarkersArr.push(mapMarkers[0]);
                    //         if (item.type.search(markersType) !== -1) {
                    //             mapMarkersArr.push(item);
                    //         }
                    //     });
                    // }

                    

                    mapMarkersArr.forEach(async (item) => {
                        const infowindow = new google.maps.InfoWindow({
                            content: '<div style="font-size: 14px; line-height: 1.2; padding: 5px; color: #222;">' + item.infoWindowText + '</div>',
                        });

                        let scaledSize = null;

                        // Объекты портфолио на карте 
                        if (item.type === 'portfolio-object') {
                          var geocoder = await new google.maps.Geocoder();
                          geocoder.geocode({
                              "address": item.address
                          }, async function(results) {
                            if (results) {
                              let coordsArr = [results[0].geometry.location.lat(), results[0].geometry.location.lng()];

                              item.coords = coordsArr;

                              setMapMarker(map, item, infowindow);
                            }
                          });
                        } else if (item.type === 'portfolio-object-single') {
                          var geocoder = await new google.maps.Geocoder();
                          geocoder.geocode({
                              "address": item.address
                          }, async function(results) {
                            if (results) {
                              let coordsArr = [results[0].geometry.location.lat(), results[0].geometry.location.lng()];

                              item.coords = coordsArr;

                              map.setCenter(new google.maps.LatLng(coordsArr[0], coordsArr[1]), mapZoom);

                              setMapMarker(map, item, infowindow);
                            }
                          });
                        } else {

                          // map.setCenter(new google.maps.LatLng(mapCenter[1], mapCenter[0]), mapZoom);

                          setMapMarker(map, item, infowindow);
                        }
                        


                        
                    });
                }

            }
            
            
        }
    },

    innerHoverChange: function(el = '.images-hover-change') {

      jQuery(el).each(function(){
          const self = jQuery(this);
  
          self.find('.list .line').on('mouseover', function() {
              self.find('.dots .dot').removeClass('is-active');
              self.find('.dots .dot[data-id="' + jQuery(this).data('id') + '"]').addClass('is-active');
              self.find('.bg').css('background-image', 'url(' + jQuery(this).data('src') + ')')
          });
      });
  },
}
