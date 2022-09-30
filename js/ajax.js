var cpt = 0;

window.addEventListener("DOMContentLoaded", () => {
        window.setInterval(() => {
            document.querySelector("#compteur").innerHTML = cpt++;
        }, 1000);

        const annulerSubmit = (eventSubmit) => {
            eventSubmit.preventDefault();
            let xhr = new XMLHttpRequest;
            xhr.onreadystatechange = () => {
                if(xhr.readyState == 4 && xhr.status == 200){
                    let texte = xhr.responseText;
                    let eltMessage = document.querySelector('#message');
                    eltMessage.innerHTML = texte;
                    // document.querySelector("[name='pseudo']").value = ""; (ou NULL)
                    let input = document.querySelectorAll("div > input");
                        input.forEach(function(inputValue) {
                            inputValue.value = "";
                    });
                    if( texte.search("Erreur") >= 0){
                        eltMessage.classList.remove("alert-success");
                        if(!eltMessage.classList.contains("alert-danger")){
                            eltMessage.classList.add("alert-danger");
                        }
                    }else{
                        eltMessage.classList.remove("alert-danger");
                        if(!eltMessage.classList.contains("alert-success")){
                            eltMessage.classList.add("alert-success");
                        }
                    }
                }
            }

            let donnees = new FormData(eventSubmit.target);

            xhr.open("POST", "serveur/connexion.php");
            // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.send(donnees);
        };
        

        let frm = document.querySelector("form");
        frm.addEventListener("submit", annulerSubmit);
});

$( () => {
    $("#bouton").on("click", () => {
        $.ajax({
            url: "serveur/connexion_ajax.php",
            method: 'POST',
            dataType: 'json', // dataType permet de choisir le type de données qui sera retourné par l'URL
            data: $("form").serialize(), // serialize() retourne un string contenant les données du formulaire
            success: (donnees) => {
                console.log(donnees);
                $("#message").html(donnees.message) // modifie la propriété innerHTML de l'élément #message
                if( donnees.membre ){   
                    console.log("Nom : " + donnees.membre.nom + ", Prénom : " + donnees.membre.prenom);
                    
                    $("#message").append(`<ul class='list-group'><li class='list-group-item'>Nom : ${donnees.membre.nom} </li><li class='list-group-item'>Prénom : ${donnees.membre.prenom} </li></ul>`)
                }

            },
            error: (jqXHR, status, error) => {
                $("#message").html("ERREUR AJAX " + status + " : " + jqXHR.statusText);
            }
        });
    });
} );
