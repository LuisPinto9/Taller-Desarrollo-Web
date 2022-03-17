begin()

function begin() {

    const xhr = new XMLHttpRequest();
    xhr.open("get", "control.php?option=1", true)
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const data = JSON.parse(xhr.responseText)
            data.forEach(dpto => document.getElementById('inputState').add(new Option(dpto.name, dpto.code)))
        }

    }
    xhr.send(null)
}

document.getElementById("searchButton").addEventListener("click", () => {
        const name = document.getElementById("name").value;
        const id = document.getElementById("id").value;

    })

begin()