const numbers = [24, 99, 46, 774, 61];

function tri(numbers, order) {

    if(order === 'asc') {
        return numbers.sort((a, b) => a - b);
    }
    if(order === 'desc') {
         return numbers.sort((a, b) => b - a);
    }

}

console.log(tri(numbers, 'asc'));
console.log(tri(numbers, 'desc'));

