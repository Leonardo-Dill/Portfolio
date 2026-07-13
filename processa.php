<?php
$nome = $_POST["nome"]; //recebe o valor do campo "nome" enviado pelo formulário via método POST
$mensagem = $_POST["mensagem"]; //recebe o valor do campo "mensagem" enviado pelo formulário via método POST

require "conexao_DB.php"; //inclui o arquivo de conexão com o banco de dados

$sql = "INSERT INTO mensagens (nome, mensagem, data_envio) VALUES (:nome, :mensagem, NOW())"; //prepara a query SQL para inserir os dados na tabela "mensagens" do banco de dados, utilizando placeholders para evitar SQL Injection
$smt = $pdo->prepare($sql); //prepara a query SQL para execução
$smt->bindParam(":nome", $nome); //associa o valor da variável $nome ao placeholder :nome na query SQL
$smt->bindParam(":mensagem", $mensagem); //associa o valor da variável $mensagem ao placeholder :mensagem na query SQL
$smt->execute(); //executa a query SQL preparada, inserindo os dados na tabela

header("Location: index.php?sucesso=1"); //envia o usuário de volta para a página index.php com um parâmetro de sucesso na URL
exit; //finaliza a execução do script após redirecionar o usuário
?>