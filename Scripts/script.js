const locate = document.getElementById("locate");
const locationDiv = document.getElementById("LocEntry")
const findFood = document.getElementById("buttonSearch");


function getLocation() {
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(accessLocation);
    }else{
        locationDiv.innerHTML="";
        locationDiv.appendChild(document.createTextNode("Error with getting your location"));
    }
}

function accessLocation(pos){
    var lat = document.createTextNode("Latitude: "+pos.coords.latitude);
    var long = document.createTextNode("Longitude: "+pos.coords.longitude);
    locationDiv.innerHTML="";
    locationDiv.appendChild(lat);
    locationDiv.appendChild(document.createElement("br"));
    locationDiv.appendChild(long);
}

locate.addEventListener("click", getLocation);
findFood.addEventListener("click",getLocation);