import {hiddenLoading, showLoading} from './loading.js';

let table = document.getElementById('tableContainer');
let body  = document.getElementById('tableBody');
let msg   = document.getElementById('noRegisters');

export function getInvoices() {
    showLoading();
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText.length == 2) {
                switchElement(msg, 'flex');
                switchElement(table, 'none');
                hiddenLoading();
            } else {
                switchElement(msg, 'none');
                switchElement(table, 'table');
                createTable(JSON.parse(this.responseText));
            }
        }
    }
    xhttp.open("GET", "/invoices", true);
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
    hiddenLoading();
}

getInvoices();