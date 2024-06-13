<h2>Excluir Videos</h2>
<?php
$idFilme = $_GET["idFilme"];

$sql = "DELETE FROM tbfilmes WHERE idFilme = $idFilme";

$rs = mysqli_query($conexao,$sql);

if($rs){
    echo "<p>Registro excluido com sucesso!</p>";
}else{
    echo "<p>Erro ao excluir o registro.</p>";
}

?>