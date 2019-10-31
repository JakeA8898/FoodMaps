//This file loads google maps data
var map;
//labels for the markers
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var infowindow;
//This data will be pulled from the database, for now it is hardcoded in.
var markers = [
    ["The Keg Steakhouse + Bar", 43.218760, -79.887384,'<div id="content">' +
    '<div id="siteNotice">' +
    '</div>' +
    '<h1 id="firstHeading" class="firstHeading">' + 'The Keg Steakhouse + Bar' + '</h1>' +
    '<div id="bodyContent">' +
    '<p>The Keg Steakhouse + Bar serves the finest cuts of succulent steak,' +
    'aged for tenderness and grilled to perfection. Prime rib is a Keg specialty,' +
    'slow roasted, hand carved and perfectly seasoned with special Keg spices. ' +
    'The restaurant also serves delicious seafood, memorable appetizers, crisp salads'+ 
    '+and decadent desserts</p>' +
    '<p> <a href="singleResults.html">' +
    'Click here for more information</a> ' +
    '</p>' +
    '</div>' +
    '</div>'],
    ["Spring Sushi", 43.207204, -79.891384,"Spring Shushi"],
    ["Turtle Jack's Upper James", 43.216936, -79.887433,"Turtle Jack's Upper James"],
    ["Spring Grill House", 43.208011, -79.889954, 'Spring Grill House']
]

//This function loads a map for the single result page
function initMapSmall(){
    map = new google.maps.Map(document.getElementById('map'),{
        center: {lat: 43.218760, lng:-79.887384},
        title: markers[0][0],
        zoom: 15
    });

    var marker = new google.maps.Marker({
        position: {lat: markers[0][1], lng: markers[0][2]},
        title: markers[0][0],
        map:map
    });
}
//This function pulls up the map for the regular result page
function initMapLarge() {
    infowindow = new google.maps.InfoWindow();
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 43.211085, lng: -79.889201 },
        zoom: 14
    });
    //This adds each item in the list above to the database
    for (var i = 0; i < markers.length; i++) {
        var marker = new google.maps.Marker({
            position: { lat: markers[i][1], lng: markers[i][2] },
            title: markers[i][0],
            label: labels[i],
            zIndex: markers.length - i,
            url: markers[i][3],
            map: map
        });

        
        //Adds a listiner to each marker that brings up a description
        marker.addListener('click', (function(marker,i) {
            return function() {
                infowindow.setContent(markers[i][3]);
                infowindow.open(map,marker);
            };
        })(marker,i));
    }
}



