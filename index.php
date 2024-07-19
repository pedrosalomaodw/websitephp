<?php
error_reporting(0);
require_once __DIR__.'/database.php';

$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];
function login(){
    global $bank, $email, $senha;
    $search  = "SELECT email, senha FROM videossql.users";
    foreach($models =$bank->query($search) as $dados){
        $email_validade = $dados['email'];
        $senha_validade = $dados['senha'];
        if($email == $email_validade and $senha == $senha_validade){
                header('Location: posts.php');
        }
        elseif( $email == "admin@gmail.com" and $senha =="11233"){
            header('Location: admin.php');
        };
    //    if($email && $senha == $dados)
    }
};
login();



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="email" required placeholder="email" name="email">
    <input type="password" required placeholder="senha" name="senha">
    <button name="enter">entrar</button>

    </form>
</body>
</html>
