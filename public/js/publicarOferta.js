function showContent() {
    element = document.getElementById("formularioInmueble");
    element2 = document.getElementById("formularioNegocio");
    check1 = document.getElementByValue("O");
    check2 = document.getElementByValue("D");
    check3 = document.getElementByValue("A");

    if (check1.checked) {
        element2.style.display='block';
    }
    else {
        element2.style.display='none';
    }

    if(check2.checked || check3.checked){
        element.style.display='block';
    }else{
        element.style.display='none';
    }
}