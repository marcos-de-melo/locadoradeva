<?php
if(isset($_POST["txtPesquisa"])){
    $txtPesquisa = $_POST["txtPesquisa"];
}else{
    $txtPesquisa = "";
}
?>

<h2>Lista de Vídeos</h2>
<div>
    <form action="index.php?menu=videos" method="post">
        <label for="txtPesquisa">Pesquisar</label>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button type="submit">OK</button>
    </form>
</div>
<table border="1">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Título do Filme
            </th>
            <th>
                Duração do Filme
            </th>
            <th>
                Valor da Locação
            </th>
            <th>
                Categoria
            </th>
            <th>
                Status
            </th>
            <th>
                Editar
            </th>
            <th>
                Excluir
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM tbfilmes";
            $rs = mysqli_query($conexao,$sql);
            while($dados = mysqli_fetch_assoc($rs)){

           
        ?>
        <tr>
           <td><?=$dados["idFilme"]?></td> 
           <td><?=$dados["tituloFilme"]?></td> 
           <td><?=$dados["duracaoFilme"]?></td> 
           <td>R$ <?=$dados["valorLocacao"]?></td> 
           <td><?=$dados["idCategoria"]?></td> 
           <td><?=$dados["statusFilme"]?></td> 
           <td>Editar</td> 
           <td>Excluir</td> 
        </tr>
       <?php
            }
        ?>
    </tbody>
</table>