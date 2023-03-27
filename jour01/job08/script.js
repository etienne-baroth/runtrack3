function sommenombrespremiers(un, deux) {

    if (un <= 1 || deux <= 1) {
        return false;
    }

    for(let i = 2; i < Math.sqrt(un); i++) {
        if(un % i === 0) {
            return false;
        } else {
            for(let j = 2; j < Math.sqrt(deux); j++) {
                if(deux % j === 0) {
                    return false;
                } else {
                    return un + deux;
                }
            }
        }
    }

}

console.log(sommenombrespremiers(3,8));









