let table = document.getElementById('tableContainer');
let body  = document.getElementById('tableBody');
let msg   = document.getElementById('noRegisters');

function getInvoices() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText.length == 2) {
                switchElement(msg, 'block');
                switchElement(table, 'none');
            } else {
                switchElement(msg, 'none');
                switchElement(table, 'table');
                createTable(JSON.parse(this.responseText));
            }
        }
    }
    xhttp.open("GET", "/list", true);
    xhttp.send();
}

function switchElement(target, action) {
    target.style.display = action;
}

function createTable(content) {
    content.forEach(element => {
        let tr = document.createElement("TR");
        body.appendChild(tr);
        let td = `
            <td>${ element.title }</td>
            <td>${ element.description }</td>
            <td>${ element.category.name }</td>
            <td>${ element.created_at }</td>
        `;
        tr.innerHTML = td;
    });
}

getInvoices();