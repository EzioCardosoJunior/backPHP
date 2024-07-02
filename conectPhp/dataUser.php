<?php

// Inclui o arquivo de conexão com o banco de dados
require_once 'condb.php';

// Recebe os dados do usuário via POST
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

// Valida os dados do usuário (opcional)
if (empty($nome) || empty($email) || empty($senha)) {
  echo json_encode(array('error' => 'Dados inválidos'));
  exit;
}

// Cria a consulta SQL para inserir o usuário
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);

// Tenta executar a consulta SQL
if ($stmt->execute()) {
  echo json_encode(array('success' => 'Usuário cadastrado com sucesso'));
} else {
  echo json_encode(array('error' => 'Falha ao cadastrar usuário'));
}
