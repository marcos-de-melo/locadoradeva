<h2>Atualizar Videos</h2>
<?php
$idFilme = $_POST["idFilme"];
$tituloFilme = $_POST["tituloFilme"];
$duracaoFilme = $_POST["duracaoFilme"];
$valorLocacao = $_POST["valorLocacao"];
$idCategoria = $_POST["idCategoria"];

$sql = "update tbfilmes set 
tituloFilme = '{$tituloFilme}',
duracaoFilme = '{$duracaoFilme}',
valorLocacao = '{$valorLocacao}',
idCategoria = {$idCategoria} 
where idFilme = {$idFilme}
";
$rs = mysqli_query($conexao, $sql);

if($rs){
    echo "<p>Registro atualizado com sucesso!</p>";
}else{
    echo "<p>Erro ao atualizar o registro.</p>";
}
?>