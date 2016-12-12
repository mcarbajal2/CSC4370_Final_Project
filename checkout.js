function numberWithSpaces(number) {
    return number.toString().replace(/\B(?=(\d{4})+(?!\d))/g, " ");
}

function setCardType(number) {
    document.getElementById('cardnumber').innerHTML = number;
    numberWithSpaces(number);
    var regex;
    
    regex = new RegExp("^$");
    if (number.match(regex) != null) {
        document.getElementById("visa-card").style.display = 'none';
        document.getElementById("master-card").style.display = 'none';
        document.getElementById("amex-card").style.display = 'none';
        document.getElementById("discover-card").style.display = 'none';
        
        document.getElementById('card-number').innerHTML = "•••• •••• •••• ••••";
        document.getElementById('card-name').innerHTML = "CARDHOLDER NAME";
        
        document.getElementById("logo-img").src = "#";
        
    }
    
    // VISA
    regex = new RegExp("^4");
    if (number.match(regex) != null) {
        document.getElementById("visa-card").style.display = 'inline';
        document.getElementById("master-card").style.display = 'none';
        document.getElementById("amex-card").style.display = 'none';
        document.getElementById("discover-card").style.display = 'none';
        
        document.getElementById("card-num").maxLength = "19";
        document.getElementById("cvc").maxLength = "3";
        
        document.getElementById("logo-img").src = "checkout/visa_logo.png";
    }
    
    // MASTERCARD
    regex = new RegExp("^5[1-5]");
    if (number.match(regex) != null) {
        document.getElementById("master-card").style.display = 'inline';
        document.getElementById("visa-card").style.display = 'none';
        document.getElementById("amex-card").style.display = 'none';
        document.getElementById("discover-card").style.display = 'none';
        
        document.getElementById("card-num").maxLength = "19";
        document.getElementById("cvc").maxLength = "3";
        
        document.getElementById("logo-img").src = "checkout/mastercard_logo.png";
    }
    
    // AMEX
    regex = new RegExp("^3[47]");
    if (number.match(regex) != null) {
        document.getElementById("amex-card").style.display = 'inline';
        document.getElementById("visa-card").style.display = 'none';
        document.getElementById("master-card").style.display = 'none';
        document.getElementById("discover-card").style.display = 'none';
        
        document.getElementById("card-num").maxLength = "18";
        document.getElementById("cvc").maxLength = "4";
        
        document.getElementById("logo-img").src = "checkout/amex_logo.png";
    }
    
    // DISCOVER
    regex = new RegExp("^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)");
    if (number.match(regex) != null) {
        document.getElementById("discover-card").style.display = 'inline';
        document.getElementById("visa-card").style.display = 'none';
        document.getElementById("master-card").style.display = 'none';
        document.getElementById("amex-card").style.display = 'none';
        
        document.getElementById("card-num").maxLength = "19";
        document.getElementById("cvc").maxLength = "3";
        
        document.getElementById("logo-img").src = "checkout/discover_logo.png";
    }
}

function setCardName() {
    var inputName = document.getElementById('card-name');
    document.getElementById('cardname').innerHTML = inputName.value;
}

function setCardMonth() {
    var month = document.getElementById('exp-month');
    var selected = month.options[month.selectedIndex].value;
    document.getElementById('expmonth').innerHTML = selected;
    document.getElementById('exp-month').style.color = "#000000";
}

function setCardYear() {
    var year = document.getElementById('exp-year');
    var selected = year.options[year.selectedIndex].value;
    document.getElementById('expyear').innerHTML = selected;
    document.getElementById('exp-year').style.color = "#000000";
}

function setSecurityCode() {
    var inputCVC = document.getElementById('cvc');
    document.getElementById('securitycode').innerHTML = inputCVC.value;
}
