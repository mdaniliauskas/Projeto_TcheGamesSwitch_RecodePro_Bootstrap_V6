<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "tchegames";

                $conn = mysqli_connect($servername, $username, $password, $database);

                if (!$conn) {
                    die("Problemas de conexão com o banco de dados.<br> ".mysqli_connect_error());
                }

                if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $mensagem = $_POST['mensagem'];
                    
                    $sql = "insert into comentarios (nome, email, mensagem) values ('$nome', '$email', '$mensagem')";
                    $result = $conn->query($sql);                    
                }
                
                mysqli_close($conn); 

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Contatos - Tche Games Switch</title>
    <link rel="stylesheet" href="./CSS/estilos.css">

</head>


<body>
    <header>
    <?php
        include('menu.html')
    ?>
    </header>
    <br><br><br><br><br><br><br><br>

    
    <main>
        <div class="container mx-auto">                
            <h2 class="text-danger">Nossos contatos</h2>   
            <br>
            
            <p>Não hesite em nos Conctactar! Envie sua dúvida, elogio ou reclamação!</p>
            <br><br><br><br>

            <div class="row text-center">
                <div class="col" id="contatos">
                    <a href="mailto: atendimento@tchegames.com.br">
                    <img src="./img/logos/Email_logo.jpg" alt="Email" width="100px"><br>
                    atendimento@tchegames.com.br
                    </a>
                </div>
                <div class="col" id="contatos">                
                    <a href="tel:0800-000000">
                        <img src="./img/logos/Whats_logo.jpg" alt="Whats_logo" width="100px"><br>
                        0800-000000
                    </a>                    
                </div>
                <div class="col" id="contatos">        
                    <a href="#Chat">
                        <img src="./img/logos/Teleatendimento_logo.jpg" alt="Chat" width="100px"><br>
                        Atendimento por chat
                    </a>
                </div>
            </div>
        <br><br><br><br>
    
        <div class="container mx-auto">
            Se preferir, envie-nos uma mensagem logo abaixo:
            <br><br>

            <form method="post" action="">
                <h4 class="text-primary">Nome</h4>
                <input type="text" name="nome" style="width: 400px;" placeholder="Nome completo">
                <br><br>

                <h4 class="text-primary">Email</h4>
                <input type="text" name="email" style="width: 400px;" placeholder="digite seu email">
                <br><br>

                <h4 class="text-primary">Mensagem</h4>
                <textarea name="mensagem" style="width: 400px; height: 400px;" placeholder="Digite aqui sua mensagem, responderemos o mais breve possível."></textarea><br>
                
                <button type="submit" class="btn btn-primary">Enviar</button>
                
            </form>
        <div> 

    </main>


    <footer>
    <?php 
        include('rodape.html');
    ?>
    </footer>

</body>

</html>


