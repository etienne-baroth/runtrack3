const btn = document.getElementById('button')
const p = document.querySelector('p')

btn.addEventListener('click', () => {

    fetch('expression.txt')
    .then(r => r.text())
    .then(data => p.innerHTML = data)
    .catch(error => console.log(error));
    
})



