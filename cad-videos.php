<h2>Cadastro de Vídeos</h2>
<form action="index.php?menu=inserir-videos" method="post">
    <div>
        <label for="tituloFilme">Título do Vídeo</label>
        <input type="text" name="tituloFilme" id="tituloFilme">
    </div>
    <div>
        <label for="duracaoFilme">Duração do Vídeo</label>
        <input type="text" name="duracaoFilme" id="duracaoFilme">
    </div>
    <div>
        <label for="valorLocacao">Valor da Locação</label>
        <input type="text" name="valorLocacao" id="valorLocacao">
    </div>
    <div>
        <label for="idCategoria">Categoria</label>
        <select name="idCategoria" id="idCategoria">
            <option value="">Selecione uma Categoria</option>
            <?php
            $sql = "SELECT * FROM tbcategorias";
            $rs = mysqli_query($conexao, $sql);
            while ($dados = mysqli_fetch_assoc($rs)) {
            ?>
                <option value="<?=$dados["idCategoria"]?>"><?=$dados["nomeCategoria"]?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div>
        <button type="submit">Cadastrar</button>
    </div>
</form>