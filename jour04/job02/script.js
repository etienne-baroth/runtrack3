const p = document.querySelector('p')


function jsonValueKey(data, key) {

    fetch(data)
    .then(r => r.json())
    .then(data => p.innerHTML = data.address)

}

jsonValueKey("data.json", "address")