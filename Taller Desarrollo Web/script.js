function begin() {

    const xhr = new XMLHttpRequest();
    xhr.open('get', 'control.php', true)
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            searchData(xhr.responseText)
        }

    }
    xhr.send(null)
}

function searchData(mensaje) {
    document.getElementById("searchButton").addEventListener("click", () => {
        const name = document.getElementById("name").value;
        const id = document.getElementById("id").value;
        console.log(mensaje)

    })
}

begin()