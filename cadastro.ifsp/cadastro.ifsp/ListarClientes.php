<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ListarClientes.css">
</head>
<body>

    <?php
        include('includes/conexao.php');
        $sql = "SELECT cli.id, cli.nome nomecliente, cli.email, cli.ativo, cid.nome nomecidade, cid.estado FROM cliente cli LEFT JOIN cidade cid on cid.id = cli.cidade_id";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>

    <h1>Consulta de clientes</h1>
    <a href="cadastroCliente.html">Cadastrar novo cliente</a>
    <table align="center" border="1" width="700">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        
        <th>Cidade</th>
        
        <th>Estado</th>
        <th>Alterar</th>
        <th>Deletar</th>
        <th>Ativo</th>
        
        
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nomecliente']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['nomecidade']."</td>";
            echo "<td>".$row['estado']."</td>";

            echo "<td><a href='alteraCliente.php?id="
            .$row['id']."'>Alterar</a></td>";
            echo "<td><a href='deletaCliente.php?id="
            .$row['id']."'>Deletar</a></td>";
            echo "<tr>";
        }
    ?>
    </table>
</body>
</html>