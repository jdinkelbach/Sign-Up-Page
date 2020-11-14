/*global $*/
/*global fetch*/

var usernameAvailable = false;

// Get city, latitude, longitude from API after entering zip
$("#zip").on("change", async function(){
    let zipCode = $("#zip").val();
    let url =  `https://itcdland.csumb.edu/~milara/ajax/cityInfoByZip.php?zip=${zipCode}`;
    console.log("fetching");
    let response = await fetch(url);
    console.log("done fetching");
    let data = await response.json();
    // Fill form with retrieved data
    if(data){
        $("#city").html(data.city);
        $("#latitude").html(data.latitude);
        $("#longitude").html(data.longitude);
    }
    else{
        $("#zipError").html("Zip code not found.");
    }
})

// Populate list of counties based on selected state
$("#state").on("change", async function(){
    let state = $("#state").val();
    let url = `https://itcdland.csumb.edu/~milara/ajax/countyList.php?state=${state}`;
    let response = await fetch(url);
    let data = await response.json();
    for (let i = 0; i < data.length; i++){
        $("#county").append(`<option> ${data[i].county} </option>`);
    }
})

// Checks if entered username is available
$("#username").on("change", async function(){
    let username = $("#username").val();
    let url = `https://cst336.herokuapp.com/projects/api/usernamesAPI.php?username=${username}`;
    let response = await fetch(url);
    let data = await response.json();
    
    if(data.available){
        $("#usernameError").html("Username is availible.");
        $("#usernameError").css("color", "green");
        usernameAvailable = true;
    }
    else{
        $("#usernameError").html("Username is not availible.");
        $("#usernameError").css("color", "red");
        usernameAvailable = false;
    }
})

$("#signupForm").on("submit", function(e){
    console.log("submit clicked");
    if(!isFormValid()){
        e.preventDefault();  
    }
})

function isFormValid(){
    var isValid = true;
    console.log($("#password").val());
    
    if (!usernameAvailable){
        isValid = false
    }
    if ($("#username").val().length === 0){
        isValid = false;
        $("#usernameError").html("Username is required.");
    }
    if ($("#password").val() != $("#passwordAgain").val()){
        $("#passwordAgainError").html("Retype password.");
        isValid = false;
    }
    if ($("#password").val().length < 6){
        $("#passwordAgainError").html("Passwords must be at least 6 characters.");
        isValid = false;
    }
    console.log(isValid);
    return isValid;
}