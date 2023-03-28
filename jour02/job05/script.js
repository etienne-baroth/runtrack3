document.addEventListener('DOMContentLoaded', () => {

    document.onscroll = () => {

        let scrollToTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollToTop;
    
        let windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        
        let bodyHeight = document.body.scrollHeight;
    
        let scrollPercentage = (scrollToTop / (bodyHeight - windowHeight)) * 100;
    
        let footerColor = "linear-gradient(to left, indianred " + scrollPercentage + "%, #ccc " + scrollPercentage + "%)";
        
        document.querySelector("footer").style.background = footerColor;
    }

})

