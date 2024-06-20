<h1>Lista de Categorias</h1>
<div>
    <a href="index.php?menu=cad-categoria">Nova Categoria</a>
</div>
<div>
<?php
if(isset($_POST["txtPesquisa"])){
    $txtPesquisa = $_POST["txtPesquisa"];
}else{
    $txtPesquisa = "";
}
?>
<form action="index.php?menu=categorias" method="post">
        <label for="txtPesquisa">Pesquisar</label>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button type="submit">OK</button>
    </form>
</div>
<table border="1">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome da Categoria</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "select * from tbcategorias";
            $rs =  mysqli_query($conexao,$sql);
            while($dados = mysqli_fetch_assoc($rs)){

            
        ?>
        <tr>
            <td><?= $dados["idCategoria"]?></td>
            <td><?= $dados["nomeCategoria"]?></td>
            <td>
                <a href="index.php?menu=editar-categorias&idCategoria=<?= $dados["idCategoria"]?>">Editar</a>
            </td>
            <td>
                <a href="index.php?menu=excluir-categorias&idCategoria=<?= $dados["idCategoria"]?>">Excluir</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>
