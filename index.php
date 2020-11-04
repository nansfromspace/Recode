<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> Full Stack Eletro</title>
    <link href="principalcss.css" rel="stylesheet">
</head>


<body>

<script>
    alert ("Seja bem vindo ao nosso site! Aproveite nossas promoções!")
</script>

<!-- div id SITE -->

<?php

include('menu.html');

?>

<div id="container"> 
<header>
    <nav class="menu">

    <a href="index.php"><img src="imagens/emblema.jpeg" width="100" height="60" alt="Logo Full Stack Eletro"></a>
        <a href="produtos.php">Nossos Produtos</a>
        <a href="lojas.php">Nossas Lojas</a>
        <a href="contato.php">Entre em Contato</a>

    </nav>
</header>
</div>

 <!--div seja bem vindo -->  
    <main>
        <header>Seja bem vindo a nossa loja! 😃 </header>

        <center>
        <div class="banner">
             <img src="imagens/banner.jpg" height="50%" width="50%">
        </div>
        </center>

        
    </section>
</main>  

<footer class="rodape">

        <h4 id="formas_pagamento">Formas de Pagamento</h4>
        
        <img src="./imagens/formasdepgto.jpeg" alt="Formas de Pagamento" width="300px" height="70px">
        
        <br><br><hr><br>

        <p class="recode">&copy; Recode - Todos os Direitos Reservados - 2020</p>
        <br>



</footer>
    

</body>
</html>