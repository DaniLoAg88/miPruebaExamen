window.onload = function () {

    let check = document.querySelector("#check");
    let boton = document.querySelector("#btnConfirmar");

    check.addEventListener("change", function (){
        if(check.checked){
            boton.disabled = false;
            boton.style.background = "#000";
            boton.style.color = "white";
        }else{
            boton.disabled = true;
            boton.style.background = "#504f4f";
        }
    })

}