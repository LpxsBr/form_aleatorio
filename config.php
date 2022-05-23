<?php

//testando o require do index.php
// require_once('index.php');
$nome_pessoa = $_POST["nome-da-pessoa"];
$data_nascimento = $_POST["data-de-nascimento"];
$facul_pessoa = $_POST["faculdade-da-pessoa"];
$emprego_pessoa = $_POST["emprego-da-pessoa"];

// $idade = $data_nascimento  - date();

// var_dump($idade);

//teste de "setagem"
if($nome_pessoa and $data_nascimento and ($facul_pessoa or $emprego_pessoa)){

    // conexão do banco de dados via PDO
try {
    $conect = new PDO("mysql:dbname=formdb; host=localhost", "root", "");
    echo '<br>'.'deu bom';
} catch (PDOException $e) {
    echo '<br>'.'deu ruim'.$e->getMessage();
}

// adicao dos dados
$stmt = $conect->prepare("INSERT INTO form1(NOME, DATA_NASCIMENTO, EMPREGO, FACULDADE)
VALUES(:a, :b, :c, :d)");

// bind para passar os paramentros das variaveis para o bloco de sql
try {

    $stmt->bindparam(':a',$nome_pessoa);
    $stmt->bindparam(':b',$data_nascimento);
    $stmt->bindparam(':c',$emprego_pessoa);
    $stmt->bindparam(':d',$facul_pessoa);
    $stmt->execute();
} catch (PDOException $e) {

    echo "<br>".$e->getMessage();
}}