/* -------------- CONFIGURAÇÕES DAS FOTOS -------------------- */

var btnClose = document.querySelector('.close-js');
var outPut = document.getElementById('novo');

var loaderFile = function(event) {

    var reader = new FileReader();

    reader.onload = function() {
        outPut.style.display = 'block';
        btnClose.style.display = "block";
        outPut.style.backgroundImage = "url("+reader.result+")";
    }

    reader.readAsDataURL(event.target.files[0]);
}


var editar = document.querySelector('.editar-content');
var buttonFile = document.getElementById('file-preview');

editar.addEventListener('click', function() {
    buttonFile.click();
})

btnClose.addEventListener('click', function() {
    btnClose.style.display= "none";
    outPut.style.backgroundImage = "url('')";
})

