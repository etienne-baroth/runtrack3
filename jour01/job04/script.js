
function bisextile(année) {
    if(année === 366) {
        return true;
    } else {
        return false;
    }
}

console.log(bisextile(365));