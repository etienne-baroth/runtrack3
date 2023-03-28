const textArea = document.querySelector('textarea')

document.addEventListener('keydown', (e) => {
    if (/^[a-zA-Z]$/.test(e.key)) {
        textArea.value += e.key
    }
})
