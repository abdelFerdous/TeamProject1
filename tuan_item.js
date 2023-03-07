function validatePrice(input) {
    const price = parseInt(input);
    return !isNaN(price) && price >= 0 && price <= 5000;
  }
function tuanitem(){
    let item=(document.itemadd.item.value).trim();
    let price=(document.itemadd.price.value).trim();
    let description=(document.itemadd.description.value).trim();
    var valid = /^[\w\s']*[^0-9]+$/;

    if (!item.match(valid)){
        alert("Accept only single quotes, word and spacing");
        return false;
    }
    
    if(!validatePrice(price)){
        alert("Please enter an integer between 0 and 5000 for price.");
        return false;
    }


    if (item.length<5){
        alert("Item must have at least 5 characters");
        return false;
    }

    if (description.length<20){
        alert("Description is too short");
        return false;
    }

    return true;
}