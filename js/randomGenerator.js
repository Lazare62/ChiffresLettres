(function () {

    //Tableaux des consonnes et des voyelles
    var consonnes = new Array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z");
    var voyelles = new Array("a","e","i","o","u","y");


    var mot = ""; // Le mot que nous allons trouver avec la suite de lettres

    var motI = 0; // Une variable d'incrémentation à chaque fois que un bouton est cliqué



                //J'appuis sur le bouton consonne
    $("#consonne").click(function(){
        if(motI <= 8) {                                     // Si il n'y a pas 9 lettres générée
            var i = getRandomInt(0, consonnes.length-1);    // Un chiffre est généré aléatoirement
            var uneConsonne = consonnes[i];                 // Une consonne en est sortie
            $("#lettre"+motI).html(uneConsonne);            // Elle est afficher dans une case
            motI++;                                         // On incrémente motI pour afficher à la case suivante
            $.ajax({                                        // On execute un ajax
                method: "GET",                              // D'une méthode GET
                url: "sendToBDD.php",                       // Au php sendToBDD.php
                data: { "lettre": uneConsonne }             // Avec une donnée contenant lettre : la consonne
            })
                .done(function( e ) {                       // L'ajax renvoi une réponse
                    console.log( "Data Saved: " + e );      // On l'affiche dans le log
                });
            if(motI == 9){                                  // Si on arrive à 9 lettres générée
                $("#consonne").disabled();                  //Le bouton consonne est desactivé
                $("#voyelle").disabled();                   //Le bouton voyelle est desactivé
                $(".boutonlettre").css("opacity","0");      // On fait disparaitre les boutons
            }
        }
    })


                //J'appuis sur le bouton voyelle
    $("#voyelle").click(function(){
        if(motI <= 8) {                                     // Si il n'y a pas 9 lettres générée
            var i = getRandomInt(0,voyelles.length-1);      // Un chiffre est généré aléatoirement
            var uneVoyelle = voyelles[i];                   // Une voyelle en est sortie
            $("#lettre"+motI).html(uneVoyelle);             // Elle est afficher dans une case
            motI++;                                         // On incrémente motI pour afficher à la case suivante
            $.ajax({                                        // On execute un ajax
                method: "GET",                              // D'une méthode GET
                url: "sendToDB.php",                        // Au php sendToBDD.php
                data: { "lettre": uneVoyelle }              // Avec une donnée contenant lettre : la voyelle
            })
                .done(function( e ) {                       // L'ajax renvoi une réponse
                    console.log( "Data Saved: " + e );      // On l'affiche dans le log
                });
            if(motI == 9){                                  // Si on arrive à 9 lettres générée
                $("#consonne").disabled();                  //Le bouton consonne est desactivé
                $("#voyelle").disabled();                   //Le bouton voyelle est desactivé
                $(".boutonlettre").css("opacity","0");      // On fait disparaitre les boutons
            }
        }
    })


            //J'appuis sur le bouton reset
    $("#reset").click(function(){
        $(".boutonlettre").css("opacity","100");            // J'affiche les boutons
        for (var i = 0; i < 9; i++) {                       // Dans une Boucle pour
            $("#lettre"+i).html("&nbsp");                   // Je retire les lettres de chaque boutons
            $("#lettre"+i).show();                          // J'affiche les zones des lettres
        }
        motI = 0;                                           // Je réinitialise motI à 0
        mot = "";                                           // Je vide mot
        $("#mot").html(mot);                                // J'affiche mot qui est donc vide

        console.clear();                                    // Je nettoie la console des logs
    })


                //J'appuis sur une lettre (bouton)
    $(".lettre").click(function(){
        var unelettre = this.textContent;                   // Je récupère le contenu du bouton soit la lettre
        if(motI >= 8){                                      // Si j'ai bien générer 9 lettres
            mot += unelettre;                               // Le mot se compose des lettres selectionnée
            $("#mot").html(mot);                            // J'affiche le mot qui se compose
            $(this).hide();                                 // Et je cache la lettre selectionner
        }else if(motI < 8) {                                // Si moins de 9 lettres on était générer
            alert("Il manque des lettres !");               // J'affiche une alert disant qu'il manques des lettres
        }
    })


    //Fonction retournant un chiffre aléatoire entre min et max
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

}());