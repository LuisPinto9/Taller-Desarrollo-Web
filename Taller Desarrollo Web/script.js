function begin() {

    const xhr = new XMLHttpRequest();
    xhr.open('get', 'control.php?option=1', true)
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const data = JSON.parse(xhr.response)
            listData(data)
        }
    }
    xhr.send(null)

}
function listButton() {

        const xhr2 = new XMLHttpRequest();
        xhr2.open('get', 'control.php?option=1', true)
        xhr2.onreadystatechange = () => {
            if (xhr2.readyState === 4 && xhr2.status === 200) {
                const data = JSON.parse(xhr2.response)
                listData(data)

            }
        }
        xhr2.send(null)

}

function reset(){

    let $element = document.getElementById("body")

    $element.innerHTML = "";
}

function listData(data) {

    data.forEach((participant) => {
        console.log(participant.id)
        funtionData(participant.name, participant.id, participant.discipline, participant.disciplineType, participant.event, participant.eventPosition)
    })
}

function funtionData(id, name, surname, position, discipline, mode) {
    var div = document.getElementById("tableList ");
    //creando etiqueta para agregar filas (row)
    var row = document.createElement('tr')
    // creando etiquetas para agregar columnas (col)
    var col = document.createElement('td')
    //agregando la primera columna del indice de filas
    col.appendChild(document.createTextNode(name))
    //agregamos columna a la fila
    row.appendChild(col)

    //creamos un nuevo espacio de columna
    col = document.createElement('td')
    //en con esta el numero primo
    col.appendChild(document.createTextNode(surname))
    //agregamos columna  a la fila
    row.appendChild(col)

    //creamos un nuevo espacio de columna
    col = document.createElement('td')
    //en con esta el numero primo
    col.appendChild(document.createTextNode(id))
    //agregamos columna  a la fila
    row.appendChild(col)


    //creamos un nuevo espacio de columna
    col = document.createElement('td')
    //en con esta el numero primo
    col.appendChild(document.createTextNode(discipline))
    //agregamos columna  a la fila
    row.appendChild(col)


    //creamos un nuevo espacio de columna
    col = document.createElement('td')
    //en con esta el numero primo
    col.appendChild(document.createTextNode(mode))
    //agregamos columna  a la fila
    row.appendChild(col)


//creamos un nuevo espacio de columna
    col = document.createElement('td')
//en con esta el numero primo
    col.appendChild(document.createTextNode(position))
//agregamos columna  a la fila
    row.appendChild(col)

    body.appendChild(row)
}

document.getElementById("addButton").addEventListener("click", () => {

    let name = document.getElementById("createName").value
    let id = document.getElementById("createId").value
    let discipline = document.getElementById("createDiscipline").value
    let disciplineType = document.getElementById("createDisciplineType").value
    let event = document.getElementById("createEvent").value
    let eventPosition = document.getElementById("createEventPosition").value

    const xhr3 = new XMLHttpRequest();
    xhr3.open("get", `control.php?option=3&name=${name}&id=${id}&discipline=${discipline}&disciplineType=${disciplineType}&event=${event}&eventPosition=${eventPosition}`, true)
    xhr3.onreadystatechange = () => {
        if (xhr3.readyState === 4 && xhr3.status === 200) {

        }

    }
    xhr3.send(null)

    document.getElementById("create").reset();
    listButton()
})

document.getElementById("deleteButton").addEventListener("click", () => {

    let id = document.getElementById("deleteId").value

    //let participant = "name=" + name + "&id=" + id + "&discipline=" + discipline + "&disciplineType=" + disciplineType + "&event=" + event + "&eventPosition" + eventPosition
    const xhr4 = new XMLHttpRequest();
    xhr4.open("get", `control.php?option=4&id=${id}`, true)
    xhr4.onreadystatechange = () => {
        if (xhr4.readyState === 4 && xhr4.status === 200) {
        }

    }
    xhr4.send(null)
    document.getElementById("form2").reset();
    listButton()

})

document.getElementById("searchButton").addEventListener('click', () => {

    var inicio = document.getElementById('id').value;


    var xhr5 = new XMLHttpRequest();
    xhr5.open("GET", "./source/participants.json", true);

    var cont = 0;

    xhr5.onreadystatechange = () => {
        if (xhr5.readyState === 4 && xhr5.status === 200) {
            const data = JSON.parse(xhr5.responseText);

            let tabla = document.getElementById('tabla');
            let cuerpotabla = document.createElement('tbody');

            for (var i = 0; i < data.length; ++i) {

                let fila = document.createElement('tr');
                let td = document.createElement('td');

                if (data[i].id === inicio) {

                    cont++;
                    td.innerText = data[i].name;
                    fila.appendChild(td);

                    td = document.createElement('td');
                    td.innerText = data[i].id;
                    fila.appendChild(td);

                    td = document.createElement('td');
                    td.innerText = data[i].discipline;
                    fila.appendChild(td);


                    td = document.createElement('td');
                    td.innerText = data[i].disciplineType;
                    fila.appendChild(td);

                    td = document.createElement('td');
                    td.innerText = data[i].event;
                    fila.appendChild(td);

                    td = document.createElement('td');
                    td.innerText = data[i].eventPosition;
                    fila.appendChild(td);

                }
                cuerpotabla.appendChild(fila);

            }

            tabla.appendChild(cuerpotabla);
        }
    };
    xhr5.send(null);

    document.getElementById("form3").reset()
})

begin()