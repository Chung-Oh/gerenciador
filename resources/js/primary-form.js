import {hiddenLoading, showLoading} from './loading.js';

$('#invoiceModal').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget); // Button that triggered the modal
    let recipient = button.data('whatever'); // Extract info from data-* attributes
    let modal = $(this);
    modal.find('.modal-title').text('Gerar um novo registro');
    modal.find('#insert').text('Salvar');
});

document.getElementById('insert').addEventListener('click', function() {
    let title    = document.getElementById('title').value;
    let desc     = document.getElementById('description').value;
    let category = document.getElementById('category_id').value;
    create([title, desc, category]);
});

function create(obj) {
    showLoading();
    let register = {
        title: obj[0],
        description: obj[1],
        category_id: obj[2]
    };
    console.log(register);

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText.length == 2) {
                console.log(this.responseText);
                hiddenLoading();
            } else {
                console.log(JSON.parse(this.responseText));
                hiddenLoading();
            }
        }
    }
    xhttp.open("POST", "/new", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}