<!DOCTYPE html>
<html>
    <head>
        <meta lang="pt-br" charset="UTF-8">
        <title>Lojas - Guitar Full Stack</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <!--Começo menu-->        
        <?php
            include('menu.html');
        ?>
        <!--fim menu-->
        <h2>Nossas lojas</h2>
        <hr>
        <div id="lojas">
            <section id="loja">
                <div class="endereco">
                    <p>Rio de Janeiro</p>
                    <p>Avenida Presidente Vargas, 5000</p>
                    <p>10º andar</p>
                    <p>Centro</p>
                    <p>(21)9999-9999</p>
                </div>
                <div class="endereco">
                    <p>São Paulo</p>
                    <p>Avenida Paulista, 950</p>
                    <p>3º andar</p>
                    <p>Jardins</p>
                    <p>(11)1111-9222</p>
                </div>

                <div class="endereco">
                    <p>Snata Catarina</p>
                    <p>Rua major vila, 370</p>
                    <p>Vila Mariana </p>
                    <p>(41)5555-5555</p>
                </div> 
            </section>
        </div>
        <footer id="rodape">
            <p id="formas_pagamento">Formas de pagamento</p>
            <img src="./img/formaspg.png" alt="Formas de pagamento" style="width: 400px;">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>
</html>
