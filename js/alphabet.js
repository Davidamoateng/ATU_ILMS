
// For Alphabets Only //
function alphabet(event) {
    var char = event.which;
    if (char > 31 && (char < 65 || char > 90) && (char < 97 || char > 122)) {
        return false;
    }
}

// For Alphabets with Space //
function alphabet_space(event) {
    var char = event.which;
    if (char > 31 && (char < 65 || char > 90) && (char < 97 || char > 122) && char != 32) {
        return false;
    }
}

// For ATU Index Number //
function num_d(event){
    var char = event.which;
    if (char > 31 && (char < 48 || char > 57) && char != 68) {
        return false;
    }
}

// For Number Only //
function number(event){
    var char = event.which;
    if (char > 31 && (char < 48 || char > 57)) {
        return false;
    }
}

// For Contacts eg. +233054305425//
function number_plus(event){
    var char = event.which;
    if (char > 31 && (char < 48 || char > 57) && char != 43) {
        return false;
    }
}

// For Email only //
function email(event){
    var char = event.which;
    if (char > 31 && (char < 48 || char > 57)) {
        return false;
    }
}

// For AlphaNumeric and space //
function alpha_numeric_space(event){
    var char = event.which;
    if (char > 31 && (char < 48 || char > 57) && (char < 65 || char > 90) && (char < 97 || char > 122) && char != 32 && char != 46) {
        return false;
    }
}

// For AlphaNumeric //
function alpha_numeric(event){
    var char = event.which;
    if (char > 31 && (char < 48 || char > 57) && (char < 65 || char > 90) && (char < 97 || char > 122) && char != 32) {
        return false;
    }
}




