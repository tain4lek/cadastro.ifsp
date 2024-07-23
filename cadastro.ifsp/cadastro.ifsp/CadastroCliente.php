<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CadastroCliente.css">
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <FIEldset>  
            <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
             <label for="email">Email</label>
             <input type="email" name="email" id="email">
        <div> 
            <div>
                <label for="atv"> Ativo?</label>
                <input type="radio" id="ativo" name="status" checked>
                <label for="ativo">Ativo</label><br>

                <input type="radio" id="inativo" name="status">
                 <label for="inativo">Inativo</label><br>
                    </div>
                <div>
                    <label for="cidade">Cidade</label>
                    <select name="cidade" id="cidade">
                        <?php 
                        include('includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                        }
                        ?>
                    </select>
                </div>
                </select>
            
            <button type="submit">enviar</button>
        </div>
        
    </FIEldset>
    </form>
</body>
</html>