const btn = document.querySelector('button')

btn.addEventListener('click', citation)

function citation() {
    const art = document.querySelector('article').textContent
    console.log(art);
}



