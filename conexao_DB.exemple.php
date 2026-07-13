<?php
$host = "localhost"; // Nome do host do banco de dados
$dbname = "portfolio_DB"; // Nome do banco de dados
$usuario = "SEU USUARIO AQUI"; // Nome de usuário do banco de dados
$senha = "SUA SENHA AQUI"; // Senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha); // Cria uma nova conexão PDO com o banco de dados
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage()); // Caso ocorra um erro na conexão, exibe a mensagem de erro e encerra o script
}
?>