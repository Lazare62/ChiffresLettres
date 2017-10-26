(function () {

    //Tableaux des consonnes et des voyelles
    var consonnes = new Array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z");
    var voyelles = new Array("a","e","i","o","u","y");

    var mot = "";

    var motI = 0;

    //J'appuis sur le bouton consonne
    $("#consonne").click(function(){
        if(motI <= 8) {
            var i = getRandomInt(0, consonnes.length-1);
            var uneConsonne = consonnes[i];
            $("#lettre"+motI).html(uneConsonne);
            motI++;
            $.ajax({
                method: "GET",
                url: "sendToDB.php",
                data: { "lettre": uneConsonne }
            })
                .done(function( e ) {
                    console.log( "Data Saved: " + e );
                });
            if(motI == 9){
                $(".boutonlettre").css("opacity","0");
            }
        }
        console.log(motI);
    })


    //J'appuis sur le bouton voyelle
    $("#voyelle").click(function(){
        if(motI <= 8) {
            var i = getRandomInt(0,voyelles.length-1);
            var uneVoyelle = voyelles[i];
            $("#lettre"+motI).html(uneVoyelle);
            motI++;
            $.ajax({
                method: "GET",
                url: "sendToDB.php",
                data: { "lettre": uneVoyelle }
            })
                .done(function( e ) {
                    console.log( "Data Saved: " + e );
                });
            if(motI == 9){
                $(".boutonlettre").css("opacity","0");
            }
        }
        console.log(motI);
    })

    $("#reset").click(function(){
        $(".boutonlettre").css("opacity","100");
        for (var i = 0; i < 9; i++) {
            $("#lettre"+i).html("&nbsp");
            $("#lettre"+i).show();
        }
        motI = 0;
        mot = "";
        $("#mot").html(mot);

        $("#consonne").show();
        $("#voyelle").show();
        console.clear();
    })

    $(".lettre").click(function(){
        var unelettre = this.textContent;
        if(motI >= 8){
            mot += unelettre;
            $("#mot").html(mot);
            $(this).hide();
        }else if(motI < 8) {
            alert("Il manque des lettres !");
        }
    })


//Fonction retournant un chiffre aléatoire entre min et max
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

}());