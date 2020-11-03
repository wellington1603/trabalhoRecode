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
?>


<!DOCTYPE html>
<html>
    <head>
        <meta lang="pt-br" charset="UTF-8">
        <title>Produtos - Guitar Full Stack</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="">
        <script src="./funcoes.js"></script>
    </head>
    <body>
        <!--Incio menu-->
        <?php
            include('menu.html');
        ?>
        <!--Fim Menu-->
        <header>
            <h1>Produtos</h1>
        </header>
        
        <hr>
    
        <section class="container">
            <div class="categoria-prod">
                <section class="categoria">
                    <h3 style="background: #1E90FF;">Categorias</h3>
                    <ul>
                        <li onclick="exibir_todos()">Todos(9)</li>
                        <li onclick="exibir_categoria('stratocaster')">Stratocaster (3)</li>
                        <li onclick="exibir_categoria('lespaul')">Les Paul (3)</li>
                        <li onclick="exibir_categoria('telecaster')">Telecaster (1)</li>
                        <li onclick="exibir_categoria('flying')">Flying V (2)</li>
                    </ul>
               </section>
            </div>
            <div class="produtos">
        <?php 
            $sql = "select * from produto";
            $result = $coon->query($sql);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    
            ?>
             <div class="item" id="<?php echo $rows["categoria"];?>">
                <img src="<?php echo $rows["imagem"];?>" alt="" width="200px" onclick="destaque(this)">
                <p class="descricao"><?php echo $rows["descricao"];?></p>
                <hr>
                <p> <strike>R$ <?php echo $rows["preco"];?></strike></p>
                <p class="preco">R$ <?php echo $rows["precofinal"];?></p>
            </div>

            <?php

                }
            }
            else{
                echo "Nenhum produto cadastrado!";
            }
        ?>

               
                
        </section> 

        <footer id="rodape">
            <p id="formas_pagamento">Formas de pagamento</p>
            <img src="./img/formaspg.png" alt="Formas de pagamento" style="width: 400px;">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>
</html>