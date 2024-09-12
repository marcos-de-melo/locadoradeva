<div class="container">
    <?php
    if (isset($_POST["txtPesquisa"])) {
        $txtPesquisa = $_POST["txtPesquisa"];
    } else {
        $txtPesquisa = "";
    }
    ?>

    <h2>Lista de Vídeos</h2>
    <div class="mb-3">
        <a class="btn btn-secondary" href="index.php?menu=cad-videos">
            <i class="bi bi-film"></i> Novo Vídeo
        </a>
    </div>
    <div class="mb-3">
        <form action="index.php?menu=videos" method="post">
            <div class="input-group">
                <label class="input-group-text" for="txtPesquisa">Pesquisar</label>
                <input class="form-control" type="search" name="txtPesquisa" id="txtPesquisa"
                    value="<?= $txtPesquisa ?>">
                <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
    <table class="table table-dark table-striped">
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
            $rs = mysqli_query($conexao, $sql);
            while ($dados = mysqli_fetch_assoc($rs)) {


                ?>
                <tr>
                    <td><?= $dados["idFilme"] ?></td>
                    <td><?= $dados["tituloFilme"] ?></td>
                    <td><?= $dados["duracaoFilme"] ?></td>
                    <td>R$ <?= $dados["valorLocacao"] ?></td>
                    <td><?= $dados["nomeCategoria"] ?></td>
                    <td><?= $dados["statusFilme"] ?></td>
                    <td>
                        <a class="btn btn-outline-warning"
                            href="index.php?menu=editar-videos&idFilme=<?= $dados["idFilme"] ?>"><i
                                class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-outline-danger"
                            href="index.php?menu=excluir-videos&idFilme=<?= $dados["idFilme"] ?>"><i
                                class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>