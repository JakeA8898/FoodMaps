//conatants of items pulled from the page

const locationDiv = document.getElementById("LocEntry")
const findFood = document.getElementById("buttonSearch")
const locate2 = document.getElementById("locateSub")
const subLat = document.getElementById("latitude")
const subLng = document.getElementById("longitude")
const latBox = document.getElementById("locateLat")
const lngBox = document.getElementById("locateLng")
const locate = document.getElementById("locate");

//This is for the submission fourm location
function addLocation(){
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(addLocationHelper);
    }else{
        subLat.value = "";
        subLng.value = "";
    }
}
//sets the values in the fourm to the current lat and lng
function addLocationHelper(pos){
    subLat.value = pos.coords.latitude;
    subLng.value = pos.coords.longitude;
}

//gets the current location for when a user wants to search for a restraunt
function getLocation() {
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(accessLocation);
    }else{
        locationDiv.innerHTML="";
        locationDiv.appendChild(document.createTextNode("Error with getting your location"));
    }
}

function accessLocation(pos){
    // var lat = document.createTextNode("Latitude: "+pos.coords.latitude);
    // var long = document.createTextNode("Longitude: "+pos.coords.longitude);
    latBox.value = pos.coords.latitude;
    lngBox.value = pos.coords.longitude;
    // locationDiv.innerHTML="";
    // locationDiv.appendChild(lat);
    // locationDiv.appendChild(document.createElement("br"));
    // locationDiv.appendChild(long);
}


// findFood.addEventListener("click",getLocation);
locate2.addEventListener("click", addLocation)
locate.addEventListener("click", getLocation);