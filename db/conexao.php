<?php
const SERVIDOR = "localhost";
const USUARIO = "root";
const SENHA = "";
const BANCO = "dblocadora2";

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO) 
or die("Erro ao Conectar no servidor: " . mysqli_connect_error() );

/* Set the default character set */
mysqli_set_charset($conexao, 'utf8mb4');
?>