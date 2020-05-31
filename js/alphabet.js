function alphabet(event) {
    var char = event.which;
    if (char > 31 && (char < 65 || char > 90) && (char < 97 || char > 122)) {
        return false;
    }
}

function alphabet_space(event) {
    var char = event.which;
    if (char > 31 && (char < 65 || char > 90) && (char < 97 || char > 122) && char != 32) {
        return false;
    }
}

function num_d(event){
    var char = event.which;
    if (char > 31 && (char < 48 || char > 57) && char != 68) {
        return false;
    }
}

function number(event){
    var char = event.which;
    if (char > 31 && (char < 48 || char > 57)) {
        return false;
    }
}

