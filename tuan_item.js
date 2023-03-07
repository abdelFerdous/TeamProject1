function tuanitem(){
    let item=(document.itemadd.item.value).trim();
    let price=(document.itemadd.price.value).trim();
    let description=(document.itemadd.description.value).trim();
    var valid = /^[\w\s']*$/;
    var acceptinteger = /^(?:0|[1-3]\d{0,2}|4\d{2}|4000)$/;

    if (!item.match(valid)){
        alert("Accept only single quotes, word and spacing");
        return false;
    }
    if(!price.match(acceptinteger)){
        alert("Please type only integer");
        return false;
    }
    else if(!price.match(acceptinteger)){
        alert("Please enter the cost between 0 and 4000.");
        return false
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