<?php

require_once __DIR__.'/database.php';

$numero = $_SERVER['PHP_SELF'][18];
$mensagem = "SELECT * FROM videossql.videos where id in ( $numero)";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
<?php

foreach($bank->query($mensagem) as $dados){
    $nome = $dados['nome'];
    $video = $dados['video'];
    echo "<h1 name='nome_filme'>$nome</h1>";
    echo "<br><a href='$video'>link do filme</a>";
}
?>



</form>
</body>
</html>