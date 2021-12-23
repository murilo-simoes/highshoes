<?php
if(!isset($_GET['nome_usuario'])){
    header('location: admin.php');
    exit;
}

$nome ="%".trim($_GET['nome_usuario'])."%";
$dbh = new PDO('mysql:host=localhost; dbname=highshoes', 'root', '');
$sth = $dbh->prepare('SELECT * from cadastro where nome like :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth ->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($resultados); exit;

?>