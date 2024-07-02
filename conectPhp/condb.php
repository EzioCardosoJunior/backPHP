<?php

$dbhost = "localhost"; // Host do banco de dados
$dbname = "postgres"; // Nome do banco de dados
$dbuser = "postgres"; // Usuário do banco de dados
$dbpass = "123456"; // Senha do banco de dados

try {
  $pdo = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
  exit;
}
