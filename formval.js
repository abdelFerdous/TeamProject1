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