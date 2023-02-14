<?php 
include_once("login_verif.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_reg.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="\Ghost_mensseger\util\sol.ico" type="image/x-icon">
    <title>Loguin Fantasma</title>
</head>
<body class = "register">
<div id ="cab_reg">
        <br>
        <div id = "d_esquerda_reg" class ="d_cab_reg"> 
       
                    
                <button id = "voltar_reg"><a href="index.php"> <p id = "p_voltar_reg"class = "link-as-button_reg"> Voltar <p></a> </button>

        </div>
       
        <div id = "d_central_reg" class ="d_cab_reg">
        <a href = "http://localhost/ghost_mensseger/"><h1 id = "h1_cab_reg"> Ghost messages </h1> </a>
        </div>

        <div id = "d_direita_reg" class ="d_cab_reg">
            
        </div>

    </div>
    <div>

        <br><br><br><br>

        <div id="form_messages"><h1 id = "p_cadastro_reg"><br> <br>
            <form id = "dentro_form_reg" action="message_exe.php" method="POST" onsubmit="return DataValidForm();">   

                  <input type = "text" id="title" placeholder = "Título" class= "dados_reg" name = "texto">
                <textarea id="Areatexto"  name = " titulo" rows="8" cols="41"></textarea>
              <br>
                <button type ="submit" id = "enviar_reg"> <a  class = "link-as-button_reg"> <p class = "p_botao_reg"> Enviar </p></a></button>
                <br>
            </form>
        </div>
    </div>
    <div>
        <div id= "insta_reg">
            
        
            <p id = "p_guille_reg" class = "p_instagram_reg"> Guillermo -  <a  class = "link-as-button_reg" href = "https://www.instagram.com/gui_deltoro/?next=%2F">
                                            @gui_deltoro 
                                </a>  
                        </p> 

            <p id = "p_rick_reg" class = "p_instagram_reg"> Ricardo - <a class = "link-as-button_reg" href = "https://www.instagram.com/ricardovisk_s2/?next=%2F">
                                         @ricardovisk_s2
                                </a>
                        </p>

        </div>
</body>
</html>