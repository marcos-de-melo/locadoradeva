<h1>Lista de Clientes</h1>

<div>
    <a href="index.php?menu=cad-cliente">Novo Cliente</a>
</div>
<div>
<?php
if(isset($_POST["txtPesquisa"])){
    $txtPesquisa = $_POST["txtPesquisa"];
}else{
    $txtPesquisa = "";
}
?>
<form action="index.php?menu=clientes" method="post">
        <label for="txtPesquisa">Pesquisar</label>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button type="submit">OK</button>
    </form>
</div>
<table border="1">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome da Cliente</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Status</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "select * from tbclientes";
            $rs =  mysqli_query($conexao,$sql);
            while($dados = mysqli_fetch_assoc($rs)){

            
        ?>
        <tr>
            <td><?= $dados["idCliente"]?></td>
            <td><?= $dados["nomeCliente"]?></td>
            <td><?= $dados["emailCliente"]?></td>
            <td><?= $dados["telefoneCliente"]?></td>
            <td><?= $dados["statusCliente"]?></td>
            <td>
                <a href="index.php?menu=editar-clientes&idCliente=<?= $dados["idCliente"]?>">Editar</a>
            </td>
            <td>
                <a href="index.php?menu=excluir-clientes&idCliente=<?= $dados["idCliente"]?>">Excluir</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>
