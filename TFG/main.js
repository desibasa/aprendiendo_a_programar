fetch("nav.html") //Busca nav.html
    .then (response => response.text()) //Entonces transforma la respuesta a texto y guardala 
    .then (data => { //guardala en datos y hazme lo siguiente
        document.getElementById("navegador").innerHTML = data; //buscame el elemento "navegador" y cambiale el contenido para que sea el texto que estaba guardado en data
    });

    function aparecer(){

        document.getElementById("hamburguesa").querySelectorAll.style.display = "flex";

    }

    let treslineas = document.getElementsByClassName("treslineas");
    let equis = document.getElementsByClassName("equis");

    function aparecer(){

        if(equis.style.display="none"){
                equis.style.display="flex";
        }

    }