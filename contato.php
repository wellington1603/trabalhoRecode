<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstack";

    //criando conexão
    $coon = mysqli_connect($servername, $username, $password, $database);

    //verificando conexão
    if(!$coon){
        die("A conexão ao BD falhou". mysli_connect_error());
    } 
    
    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios(nome, msg) value ('$nome', '$msg')";
        $result = $coon->query($sql);
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta lang="pt-br" charset="UTF-8">
        <title>Contato - Guitar Full Stack</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <!--Começo menu-->
        <?php
            include('menu.html');
        ?>
        <!--Fim menu-->
        <header>
        <h2>Contato</h2>
        </header>
        <hr>

        <table border="0" width="100%" cellpadding="20">
            <tr>
                <td width="50%" align="center">
                    <img src="./img/Email.png" alt="E-mail" width="40px">
                    guitarfullstack@gmail.com
                </td>

                <td width="50%" align="center">
                    <img src="./img/whatsapp-logo-1-1.png" alt="WhatsApp" width="40px">
                    (21) 9999-9999
                </td>
            </tr>

            <form method="post" action="">
                Nome:<br>
                <input type="text" name="nome" style="width: 500px;"><br>
                Mensagem:<br>
                <input type="text" name="msg" style="width: 500px"><br>

                <input type="submit" name="submit" value="Enviar"><br>
            </form>

         <?php 
            $sql = "select * from comentarios";
            $result = $coon->query($sql);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    echo "Data: ", $rows['data'],"<br>";
                    echo "Nome: ", $rows['nome'],"<br>";   
                    echo "Mensagem: ", $rows['msg'],"<br>";
                    echo "<hr>";                 }
            }
            else{
                echo "Nenhum comentário ainda!";
            }
        ?>

        </table>
        <footer id="rodape">
            <p id="formas_pagamento">Formas de pagamento</p>
            <img src="./img/formaspg.png" alt="Formas de pagamento" style="width: 400px;">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>
</html>