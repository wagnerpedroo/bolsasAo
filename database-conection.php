<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'bolsasao';

$conexao = new mysqli($db_host, $db_username, $db_password, $db_name);

// if($conexao->connect_errno) {
//     echo "erro";
// }else {
//     echo "sucesso na conexão";
// }

