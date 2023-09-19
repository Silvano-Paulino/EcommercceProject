function abertoModal(elemento) {
    let modal = document.getElementById(elemento);

    if(typeof modal == 'undefined' || modal == null) 
        return;

        document.body.style.overflow = 'hidden';
        modal.style.display = 'block';
    
}

function fechadoModal(elemento) {
    let modal = document.getElementById(elemento);

    if(typeof modal == 'undefined' || modal == null) 
        return;
        document.body.style.overflow = 'visible';
        modal.style.display = 'none';
    
}