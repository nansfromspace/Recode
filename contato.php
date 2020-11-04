<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

//criando a conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verificando conexao
if (!$conn) {
    die("a conexao ao BD falhou:" . mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['msg']) && isset($_POST['pedido'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];
    $pedido = $_POST['pedido'];

    echo $nome, $msg, $pedido;
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> Full Stack Eletro</title>
    <link href="principalcss.css" rel="stylesheet">
 
</head>


<body>
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

<!-- formulario de pedido -->

<form method="post" action="">
    Nome: <br>
    <input type="text" name="nome" style="width:500px"><br>
    Mensagem: <br>
    <input type="text" name="msg" style="width:500px"><br>
    Pedido: <br>
    <input type="text" name="pedido" style="width:500px"><br>
  
    <input type="submit" name="submit" value="Enviar"><br>
</form>




 <!--div produtos
    <main>
        <header>Contato</header>


            
        <section id="contato">

                <div>
                    <label for="username">Nome: </label>
                    <input type="text" name="username" id="username" placeholder="Digite o seu nome" >
                </div>
                <br><br>
                <div>
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email" placeholder="Digite o seu e-mail" >
                </div>
                <br><br>
                <div>
                    <label for="select">Assunto: </label>
                    <select name="select" id="select">
                    <option value="reclamacao">Reclamação</option>
                    <option value="elogio">Elogio</option>
                    <option value="duvida">Duvida</option>
            
                    </select>
                </div>
                <br>
                <div>
                    <label for="msg">Mensagem: </label><br>
                    <textarea  name="msg" id="msg" cols="30" rows="5">Digite uma mensagem</textarea>
                </div>









        
    </section> 
</main>  -->

<footer class="rodape">

        <h4 id="formas_pagamento">Formas de Pagamento</h4>
        
        <img src="./imagens/formasdepgto.jpeg" alt="Formas de Pagamento" width="300px" height="70px">
        
        <br><br><hr><br>

        <p class="recode">&copy; Recode - Todos os Direitos Reservados - 2020</p>
        <br>



</footer>
    
</div>
</body>
</html>