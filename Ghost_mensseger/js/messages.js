
function DataValidForm() {
    var textarea = document.getElementById('Areatexto').value;
    var title = document.getElementById('title').value;

    var data = new FormData();
    data.append('textArea', textarea);
    data.append('title', title);

    var url = "validate_message.php";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url, false);
    xhttp.send(data);
    var retorno = xhttp.responseText;

    if (retorno != ''){
        console.log("ERROR CABRON");

        var retorno = xhttp.responseText;
        return false;
    }
}
