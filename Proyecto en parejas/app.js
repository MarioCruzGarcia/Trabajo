let formularios = document.forms;


function validarCorreo(){
   
    /* -    contraseña (para proyecto): 
     *      + Una mayuscula
     *      + Una minuscula
     *      + Dos digitos seguidos
     *      + Un signo de los siguientes  - _ . + @
     *      + longitud mayor a 10
     * 
     * -    email (para proyecto): ______@_____.___
     *      + tramo 1: no espacios ni arroba
     *      + tramo 2: no espacios
     *      + tramo 3: no numeros y no espacios. Longitud mayor a 1
     * */
   

    let span = formularios[0].getElementsByTagName('label')[1].getElementsByTagName('span')[0];
    // 1. Recoger valor
    let value = formularios[0]['elements']['correo']['value'];

    // 2. Expresion a evaluar
    let expresion = /^[^\s@]+@[^\s@.]+\.[^\s.]+$/;
    

    // 3. Evaluar
    if(expresion.test(value)){
        span.textContent = 'Correcto';
        span.classList.add('valid');
        span.classList.remove('invalid');
    }else{
        span.textContent = 'Incorrecto';
        span.classList.add('invalid');
        span.classList.remove('valid');
    }
}

function validarContraseña(){
   
    /* -    contraseña (para proyecto): 
     *      + Una mayuscula
     *      + Una minuscula
     *      + Dos digitos seguidos
     *      + Un signo de los siguientes  - _ . + @
     *      + longitud mayor a 10
     * 
     * -    email (para proyecto): ______@_____.___
     *      + tramo 1: no espacios ni arroba
     *      + tramo 2: no espacios
     *      + tramo 3: no numeros y no espacios. Longitud mayor a 1
     * */
   

    let span = formularios[0].getElementsByTagName('label')[2].getElementsByTagName('span')[0];
    // 1. Recoger valor
    let value = formularios[0]['elements']['contraseña']['value'];

    // 2. Expresion a evaluar
    let expresion = /(?=.*[a-z])(?=.*\d{2})(?=.*[-_+.@])/;

    // 3. Evaluar
    if(expresion.test(value)){
        span.textContent = 'Correcto';
        span.classList.add('valid');
        span.classList.remove('invalid');
    }else{
        span.textContent = 'Incorrecto';
        span.classList.add('invalid');
        span.classList.remove('valid');
    }
}



document.addEventListener("keyup", filtrar);

let texto = document.getElementsByName("search")[0];
let caja = document.getElementsByClassName("card");

function filtrar() {
    let filtro = texto.value.toLowerCase();

    for (let i = 0; i < caja.length; i++) {
        let marca = caja[i].getElementsByTagName("p")[0].textContent.toLowerCase();
        
        if (marca.includes(filtro)) {
            caja[i].style.display = "block";
        } else {
            caja[i].style.display = "none";
        }
    }
}






