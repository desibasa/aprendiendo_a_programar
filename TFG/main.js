fetch("nav.html") //Busca nav.html
    .then(response => response.text()) //Entonces transforma la respuesta a texto y guardala 
    .then(data => { //guardala en datos y hazme lo siguiente
        document.getElementById("navegador").innerHTML = data; //buscame el elemento "navegador" y cambiale el contenido para que sea el texto que estaba guardado en data

        const treslineas = document.querySelector(".treslineas");
        const equis = document.querySelector(".equis");
        const listaResponsive = document.getElementById("lista_responsive");
        const hamburguesa = document.getElementById("hamburguesa");

        // Evento click
        hamburguesa.addEventListener('click', function () {
            if (treslineas.style.display !== "none") {
                treslineas.style.display = "none";
                equis.style.display = "block";
                listaResponsive.style.display = "flex";
                listaResponsive.style.flexDirection = "column";
            } else {
                treslineas.style.display = "block";
                equis.style.display = "none";
                listaResponsive.style.display = "none";
            }
        });
    });