document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('button');
    const article = document.createElement('article');
    article.innerHTML = `<article>L'important n'est pas la chute, mais l'atterrissage.</article>`


    function showHide(){

        const body = document.querySelector("body");
        body.appendChild(article);

        if(article.style.display === "block"){
            article.style.display = "none";

        } else {
            article.style.display = "block";
        }
    }

    btn.addEventListener("click", showHide);
    
})





