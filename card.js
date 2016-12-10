

function setType(number) {
    var type = document.getElementById("card-type");
    type.innerHTML = getCardType(number);
}

function getCardType(number) {
    var regex;
    // VISA
    regex = new RegExp("^4");
    if (number.match(regex) != null) {
        return "Visa";
    }
    
    // MASTERCARD
    regex = new RegExp("^5[1-5]");
    if (number.match(regex) != null) {
        return "Mastercard";
    }
    
    // AMEX
    regex = new RegExp("^3[47]");
    if (number.match(regex) != null) {
        return "American Express";
    }
    
    // DISCOVER
    regex = new RegExp("^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)");
    if (number.match(regex) != null) {
        return "Discover";
    }
}
