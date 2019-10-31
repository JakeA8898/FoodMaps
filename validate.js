// Variables used for grabbing form information and elements.
const form = document.getElementById('form');
const name = document.getElementById('usernameL');
const password = document.getElementById('passwordL');
const errorOut = document.getElementById('error_ListL');

const form2 = document.getElementById('form2');
const name2 = document.getElementById('usernameR');
const email = document.getElementById('emailR');
const password2 = document.getElementById('passwordR');
const passwordc = document.getElementById('passwordRC');
const errorOut2 = document.getElementById('error_ListR');

const form3 = document.getElementById('form3');
const name3 = document.getElementById('RName');
const latitude = document.getElementById('latitude');
const longitude = document.getElementById('longitude');
const description = document.getElementById('Desc');
const errorOut3 = document.getElementById('error_ListS');

const form4 = document.getElementById('form4');
const postal = document.getElementById('locateText');
const search = document.getElementById('search');
const errorOut4 = document.getElementById('error_ListP');

const image = document.getElementById('imageUpload');

// patterns used for passwords.
const UpperCaseChars = /[A-Z]/g;
const Direction = /[N,S,E,W]/g;
const LowerCaseChars = /[a-z]/g;
const numbers = /[0-9]/g;
const pwLength = 8;
const allowed_extensions = new Array("jpg", "png", "gif");

// List for holding error messages.
var errors = [];
if(form){
    form.addEventListener('submit', (e) => {
    //  Check if values are empty, if the email is correct and if the password meets requirements
        validateEmptyL();
        validatePasswordL();
        if (errors.length > 0){
            e.preventDefault();
            errorOut.innerText = errors.join(', ');
            errors = [];
        }
    });
}

if(form2){
    form2.addEventListener('submit', (e) => {
    //  Check if values are empty, if the email is correct and if the password meets requirements
        validateEmptyR();
        validateEmail();
        validatePasswordR();
        validateMatch();
        if (errors.length > 0){
            e.preventDefault();
            errorOut2.innerText = errors.join(', ');
            errors = [];
        }
    });
}

if(form3){
    form3.addEventListener('submit', (e) => {
    //  Check if values are empty, if the email is correct and if the password meets requirements
        validateEmptyS();
        validateLat();
        validateLong();
        validateImage();
        if (errors.length > 0){
            e.preventDefault();
            errorOut3.innerText = errors.join(', ');
            errors = [];
        }
    });
}

if(form4){
    form4.addEventListener('submit', (e) => {
    //  Check if values are empty, if the email is correct and if the password meets requirements
        //validatePostal();
        if (errors.length > 0){
            e.preventDefault();
            errorOut4.innerText = errors.join(', ');
            errors = [];
        }
    });
}

// Checking if inputs are empty
function validateEmptyL(){
    if (name.value === '' || name.value == null){
        errors.push('Name field is Empty');
    }
    if (password.value === '' || password.value == null){
        errors.push('Password field is Empty');
    }
}

function validateEmptyR(){
    if (name2.value === '' || name2.value == null){
        errors.push('Name field is Empty');
    }
    if (email.value === '' || email.value == null){
        errors.push('Email field is Empty');
    }
    if (password2.value === '' || password2.value == null){
        errors.push('Password field is Empty');
    }
}

function validateEmptyS(){
    if (name3.value === '' || name3.value == null){
        errors.push('Name field is Empty');
    }
    if (latitude.value === '' || latitude.value == null){
        errors.push('Latitude field is Empty');
    }
    if (longitude.value === '' || longitude.value == null){
        errors.push('Longitude field is Empty');
    }
    if (description.value === '' || description.value == null){
        errors.push('Description field is Empty');
    }
}

// Regular Expression Pattern
function validateEmail(){
    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value))) {
        errors.push('email invalid');
    }
}

// Validating Password requirements
function validatePasswordL(){
    if (!(password.value.match(UpperCaseChars) 
    && password.value.match(LowerCaseChars) 
    && password.value.match(numbers) 
    && password.value.length >= pwLength)){
        errors.push('Password Invalid');
    }
}

function validatePasswordR(){
    if (!(password2.value.match(UpperCaseChars) 
    && password2.value.match(LowerCaseChars) 
    && password2.value.match(numbers) 
    && password2.value.length >= pwLength)){
        errors.push('Password Invalid');
    }
}

function validateMatch(){
    if (!(password2.value == passwordc.value)){
        errors.push('Password Match Invalid');
    }
}

function validateLat(){
    if (!(latitude.value.match(numbers))){
        errors.push('Latitude Invalid');
    }
}

function validateLong(){
    if (!(longitude.value.match(numbers))){
        errors.push('Longitude Invalid');
    }
}

function validatePostal(){
    if (!((postal.value.match(UpperCaseChars) 
    || (postal.value.match(LowerCaseChars))
    && postal.value.match(numbers)))){
        errors.push('Postal Code Invalid');
    }
}

function validateImage(){
    var file_extension = image.value.split('.').pop().toLowerCase();
    var isValid = true;
    for(var i = 0; i <= allowed_extensions.length; i++)
    {
        if (!(allowed_extensions[i]==file_extension))
        {
            isValid = false;
        }
    }
    if (!isValid)
    {
        errors.push('Image Upload Invalid');
    }
}