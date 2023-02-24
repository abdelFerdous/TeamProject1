//deckval() form validation for decks
function deckval(){
    let email=(document.deckform.email.value).trim();
    if (email.length<10){
        alert("Email must have at least 10 characters");
        return false;
    }

    let deckName=(document.deckform.deckName.value).trim();
    if (deckName.length<5){
        alert("Deck Name must have at least 5 characters");
        return false;
    }

    let deckCode=(document.deckform.deckCode.value).trim();
    if (deckCode.length<10){
        alert("Deck Code is too short");
        return false;
    }
}                                                                                                                                          


function checkval(){
    let checkEmail=(document.checkform.checkEmail.value).trim();
    if (checkEmail.length<10){
        alert("Email must have at least 10 characters");
        return false;
    }
}
function ValidateEmail()
{
let email=document.getElementById("email").value; 
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.match(mailformat)){
alert("Valid email address!");
return true;
}
else{
alert("You have entered an invalid email address!");
return false;
}
}
function ValidatePhone()
{
let phone=document.getElementById("phone").value; 
var phoneformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(phone.match(phoneformat)){
alert("Valid phone number!");
return true;
}
else{
alert("You have entered an invalid phone Number!");
return false;
}
}