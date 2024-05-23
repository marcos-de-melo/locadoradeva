<h2>Inserir Vídeo</h2>
<?php
$tituloFilme = $_POST["tituloFilme"];
$duracaoFilme = $_POST["duracaoFilme"];
$valorLocacao = $_POST["valorLocacao"];
$idCategoria = $_POST["idCategoria"];

$sql = "INSERT INTO tbFilmes (
    tituloFilme,
    duracaoFilme,
    valorLocacao,
    idCategoria,
    statusFilme
)
VALUES (
'$tituloFilme',
'$duracaoFilme',
'$valorLocacao',
$idCategoria,
0
)
";

$rs = mysqli_query($conexao,$sql);

if($rs){
    echo "<p>Registro inserido com sucesso!</p>";
}else{
    echo "<p>Erro ao inserir o registro.</p>";
}
  
?>