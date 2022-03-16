function begin() {

    const xhr = new XMLHttpRequest();
    xhr.open('get', `control.php?numOne=${numOne}&numTwo=${numTwo}`, true)
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            alert(xhr.responseText)
        }
    }
    xhr.send(null)
}

begin()