<?php
if(isset($_POST["txtPesquisa"])){
    $txtPesquisa = $_POST["txtPesquisa"];
}else{
    $txtPesquisa = "";
}
?>

<h2>Lista de Vídeos</h2>
<div>
    <a href="index.php?menu=cad-videos">Novo Vídeo</a>
</div>
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
            $sql = "
            SELECT 
            idFilme,tituloFilme, duracaoFilme, valorLocacao, 
             nomeCategoria, 
            CASE
                WHEN statusFilme = 0 THEN 'Disponivel'
                WHEN statusFilme = 1 THEN 'Locado'
                WHEN statusFilme = 2 THEN 'Indisponivel'
            END
            AS statusFilme 
            FROM tbfilmes AS f INNER JOIN tbcategorias AS c 
            ON f.idCategoria = c.idCategoria 
            WHERE tituloFilme   LIKE '%{$txtPesquisa}%' 
            order by tituloFilme asc";
            $rs = mysqli_query($conexao,$sql);
            while($dados = mysqli_fetch_assoc($rs)){

           
        ?>
        <tr>
           <td><?=$dados["idFilme"]?></td> 
           <td><?=$dados["tituloFilme"]?></td> 
           <td><?=$dados["duracaoFilme"]?></td> 
           <td>R$ <?=$dados["valorLocacao"]?></td> 
           <td><?=$dados["nomeCategoria"]?></td> 
           <td><?=$dados["statusFilme"]?></td> 
           <td>Editar</td> 
           <td>Excluir</td> 
        </tr>
       <?php
            }
        ?>
    </tbody>
</table>