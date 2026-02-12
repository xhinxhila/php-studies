<!-- 
udario de Login: admim
senha: admin
------
-->

<?php


$nome = null;
$senha = null;
$tema = null;

if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
    $nome = $_POST['password'];
    $senha = $_POST['username'];
    $tema = $_POST['tema'];
    setcookie('teste', $tema);
    header("Location: http://localhost:3000/modulo3/exercico/welcome.php");
    exit;
} else {
    echo 'não foi';
}
