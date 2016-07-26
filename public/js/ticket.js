/**
 * Created by arret on 20/07/16.
 */


function process(){
    //creiamo codice html

    var string;
    string=
            "<option value='1'>10.00 - 12.00</option>"
            +"<option value='2'>12.00 -14.00</option>"
            +"<option value='3'>14.00 - 16.00</option>"
            +"<option value='4'>16.00 - 18.00</option>"
            +"<option value='5'>18.00 -20.00</option>"



    //ottengo il riferimento all'elemento div della pagina

    myDiv = document.getElementById("hours");
    // aggiungo il contenuto al div

    myDiv.innerHTML = string;

    var string;
    string=
        "<option>carta di credito</option>"
        +"<option>bancomat</option>"



    //ottengo il riferimento all'elemento div della pagina

    myDiv = document.getElementById("money");
    // aggiungo il contenuto al div

    myDiv.innerHTML = string;

}

(function(){
    var html ='';
    for (var i = 1; i < 320 ; i++) {
        html += '<option value="'+i+'">'+i+'</option>';
    }
    document.getElementById("qta").innerHTML = html;
})()





