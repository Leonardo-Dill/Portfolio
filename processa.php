<?php
$nome = $_POST['nome']; //variável recebe o valor do campo "nome" enviado pelo formulário via método POST
$mensagem = $_POST['mensagem']; //variável recebe o valor do campo "mensagem" enviado pelo formulário via método POST

header("Location: index.php?sucesso=1"); //envia o usuário de volta para a página index.php com um parâmetro de sucesso na URL

exit; //finaliza a execução do script após redirecionar o usuário
?>