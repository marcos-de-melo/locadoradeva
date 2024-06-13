<?php
$idFilme = $_GET["idFilme"];
$sql = "SELECT * FROM tbfilmes WHERE idFilme = $idFilme";
$rs = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_assoc($rs);

?>
<h2>Editar Videos</h2>
<form action="index.php?menu=atualizar-videos" method="post">
    <div>
        <label for="idFilme">ID do Vídeo</label>
        <input type="text" name="idFilme" id="idFilme" value="<?=$dados["idFilme"]?>" readonly>
    </div>
    <div>
        <label for="tituloFilme">Título do Vídeo</label>
        <input type="text" name="tituloFilme" id="tituloFilme" value="<?=$dados["tituloFilme"]?>" >
    </div>
    <div>
        <label for="duracaoFilme">Duração do Vídeo</label>
        <input type="text" name="duracaoFilme" id="duracaoFilme" value="<?=$dados["duracaoFilme"]?>" >
    </div>
    <div>
        <label for="valorLocacao">Valor da Locação</label>
        <input type="text" name="valorLocacao" id="valorLocacao" value="<?=$dados["valorLocacao"]?>" >
    </div>
    <div>
        <label for="idCategoria">Categoria</label>
        <select name="idCategoria" id="idCategoria">
            <option value="">Selecione uma Categoria</option>
            <?php
            $sql = "SELECT * FROM tbcategorias";
            $rs = mysqli_query($conexao, $sql);
            while ($dadosC = mysqli_fetch_assoc($rs)) {
            ?>
                <option <?php echo ($dados["idCategoria"] == $dadosC["idCategoria"] )?"selected" :"" ; ?> value="<?=$dadosC["idCategoria"]?>"><?=$dadosC["nomeCategoria"]?></option>
            <?php
            }
            ?>
        </select>
    </div>


    <div>
        <button type="submit">Atualizar</button>
    </div>
</form>