<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estilos.css">
    
    <title>Pedidos</title>
    
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
            <h2 class="text-danger">Faça seu pedido</h2>   
                
            <br><br>

            <form method="post" action="./demonstrativoPedido.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome" class="text-primary">Nome</label>
                        <input type="text" name="nomeClientes" class="form-control" id="inputEmail4" placeholder="Nome completo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email" class="text-primary">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">         
                    </div>          
                    <div class="form-group col-md-4">
                        <label for="telefone" class="text-primary">Telefone</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Telefone">        
                    </div>
                    <div class="form-group col-md-12">
                        <label for="endereço" class="text-primary">Endereço</label>
                        <input type="text" name="endereco" class="form-control" placeholder="Endereço completo, incluindo bairro, cidade e estado">
                    </div>                        
                    <div class="form-group col-md-6">
                        <label for="protuto" class="text-primary">Nome do produto</label>
                        <input type="text" name="nomeProduto" class="form-control" placeholder="Insira o nome do produto">
                    </div>                                
                    <div class="form-group col-md-2">
                        <label for="quantidade" class="text-primary">Quantidade</label>
                        <input type="text" name="quantidade" class="form-control" placeholder="Quantidade">
                    </div>
                </div>                 
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>          
        </div>

    </main> 




    <footer>
    <?php 
        include('rodape.html');
    ?>
    </footer>

</body>



</html>