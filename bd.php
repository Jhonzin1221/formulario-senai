<?php 

try {
    $conexao = new mysqli("localhost","root","","nomedobanco");
}
catch(Exception $error) {
    echo "Erro: " . $error->getMessage();
}

?>