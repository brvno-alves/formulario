<?php
echo "Olá, ";
// Exibe o nome enviado no parâmetro 'user'
echo ucwords(strtolower($_POST ['user']));
echo "!";
?>