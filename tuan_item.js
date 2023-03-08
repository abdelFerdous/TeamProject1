// This function validates the input for a price.
function validatePrice(input) {
    // Parse the input into an integer.
    const price = parseInt(input);
    
    // Return true if the input is a number between 0 and 4000, false otherwise.
    return !isNaN(price) && price >= 0 && price <= 4000;
  }
  
  // This function is called when a user submits a form for adding an item.
  function tuanitem(){
    // Get the value of the "item" input and remove whitespace from the beginning and end.
    let item=(document.itemadd.item.value).trim();
    
    // Get the value of the "price" input and remove whitespace from the beginning and end.
    let price=(document.itemadd.price.value).trim();
    
    // Get the value of the "description" input and remove whitespace from the beginning and end.
    let description=(document.itemadd.description.value).trim();
    
    // Define a regular expression that matches any number.
    var valid = /^[\w\s']*[^0-9]+$/;
    
    // If the item input does not match the regular expression, display an alert and return false.
    if (!item.match(valid)){
      alert("Accept only single quotes, word and spacing");
      return false;
    }
    
    // If the price input is not a valid price, display an alert and return false.
    if(!validatePrice(price)){
      alert("Please enter an integer between 0 and 4000 for price.");
      return false;
    }
  
    // If the item input has less than 5 characters, display an alert and return false.
    if (item.length<5){
      alert("Item must have at least 5 characters");
      return false;
    }
  
    // If the description input has less than 20 characters, display an alert and return false.
    if (description.length<20){
      alert("Description is too short");
      return false;
    }
  
    // If all input is valid, return true.
    return true;
  }