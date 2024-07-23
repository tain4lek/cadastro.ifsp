<?php
    include ('includes/conexao.php');
    $nome = $_POST ['nome'];
    $sql = "SELECT * FROM Cliente WHERE nome = $nome" ;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inicio.html">
    <link rel="stylesheet" href="AlteraCidadeExe.css">
</head>
<body>
    <form action="alteraClienteExe.php" method="POST">
        <FIEldset>  
            <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome</label>
        
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
        </div>
        
        <div>
            <label for="nome">Nome</label>
        
            <input type="text" name="email" id="email" value="<?php echo $row['email']?>">
        </div>

        <div>
            <input type="hidden" name="id" value="<?php  echo $row ['nome']?>">
        </div>
        <div> 
            <button type="submit">Alterar</button>
        </div>
        
    </FIEldset>
    </form>
</body>
</html>