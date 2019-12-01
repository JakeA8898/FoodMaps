//This file loads google maps data
var map;
//labels for the markers
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var infowindow;
var descs = document.getElementsByClassName("descr");
var lats = document.getElementsByClassName("lat");
var lngs = document.getElementsByClassName("lng");
var names = document.getElementsByClassName("name");
var ids = document.getElementsByClassName("locID");
var usrLat = parseFloat(document.getElementById("userLAT").innerHTML);
var usrLng = parseFloat(document.getElementById("userLNG").innerHTML);



//This data will be pulled from the database, for now it is hardcoded in.
// var markers = [
//     ["The Keg Steakhouse + Bar", 43.218760, -79.887384,'<div id="content">' +
//     '<div id="siteNotice">' +
//     '</div>' +
//     '<h1 id="firstHeading" class="firstHeading">' + 'The Keg Steakhouse + Bar' + '</h1>' +
//     '<div id="bodyContent">' +
//     '<p>The Keg Steakhouse + Bar serves the finest cuts of succulent steak,' +
//     'aged for tenderness and grilled to perfection. Prime rib is a Keg specialty,' +
//     'slow roasted, hand carved and perfectly seasoned with special Keg spices. ' +
//     'The restaurant also serves delicious seafood, memorable appetizers, crisp salads'+ 
//     '+and decadent desserts</p>' +
//     '<p> <a href="singleResults.html">' +
//     'Click here for more information</a> ' +
//     '</p>' +
//     '</div>' +
//     '</div>'],
//     ["Spring Sushi", 43.207204, -79.891384,"Spring Shushi"],
//     ["Turtle Jack's Upper James", 43.216936, -79.887433,"Turtle Jack's Upper James"],
//     ["Spring Grill House", 43.208011, -79.889954, 'Spring Grill House']
// ]

//This function loads a map for the single result page
function initMapSmall(){
    map = new google.maps.Map(document.getElementById('map'),{
        center: {lat: usrLat, lng:usrLng},
        title: names[0].innerHTML,
        zoom: 15
    });

    var marker = new google.maps.Marker({
        position: {lat: parseFloat(lats[0].innerHTML), lng: parseFloat(lngs[0].innerHTML)},
        title: names[0].innerHTML,
        map:map
    });
}
//This function pulls up the map for the regular result page
function initMapLarge() {
    // var descs = document.getElementsByClassName("descr");
    // var lats = document.getElementsByClassName("lat");
    // var lngs = document.getElementsByClassName("lng");
    // var names = document.getElementsByClassName("name");
    // var ids = document.getElementsByClassName("locID");
    // var usrLat = parseFloat(document.getElementById("userLAT").innerHTML);
    // var usrLng = parseFloat(document.getElementById("userLNG").innerHTML);
    console.log(usrLat);
    infowindow = new google.maps.InfoWindow();
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: usrLat, lng: usrLng },
        zoom: 14
    });
    //This adds each item in the list above to the database
    for (var i = 0; i < ids.length; i++) {
        console.log(lats[i].innerHTML);
        var marker = new google.maps.Marker({
            
            position: { lat: parseFloat(lats[i].innerHTML), lng: parseFloat(lngs[i].innerHTML) },
            title: names[i].innerHTML,
            label: labels[i],
            zIndex: ids.length - i,
            url: '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h1 id="firstHeading" class="firstHeading">' + 'The Keg Steakhouse + Bar' + '</h1>' +
            '<div id="bodyContent">' +
            '<p>'+ descs[i].innerHTML +'</p>' +
            '<p> <a href="singleResults.php?id='+ids[0].innerHTML+'">' +
            'Click here for more information</a> ' +
            '</p>' +
            '</div>' +
            '</div>',
            map: map
        });

        
        //Adds a listiner to each marker that brings up a description
        marker.addListener('click', (function(marker,i) {
            return function() {
                infowindow.setContent('<div id="content">' +
                '<div id="siteNotice">' +
                '</div>' +
                '<h1 id="firstHeading" class="firstHeading">' + names[i].innerHTML + '</h1>' +
                '<div id="bodyContent">' +
                '<p>'+ descs[i].innerHTML +'</p>' +
                '<p> <a href="singleResults.php?id='+ids[i].innerHTML+'">' +
                'Click here for more information</a> ' +
                '</p>' +
                '</div>' +
                '</div>');
                infowindow.open(map,marker);
            };
        })(marker,i));
    }
}



