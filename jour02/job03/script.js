document.addEventListener('DOMContentLoaded', () => {

    const btn = document.querySelector('button')
    const score = document.getElementById('compteur')

    score.textContent = 0

    btn.addEventListener('click', addone)

    function addone() {
        score.textContent++
    }

})