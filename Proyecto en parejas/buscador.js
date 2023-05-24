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