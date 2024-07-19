<?php
require_once __DIR__.'/database.php';

$count = "select * from videossql.videos;";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/watch.php" method="get">

<?php
foreach($quantidade = $bank->query($count) as $quantidade_dados){
    $capas =$quantidade_dados['capa'];
    $nome_filme =$quantidade_dados['id'];
    echo "<a href='http://localhost/appphp/watch.php/$nome_filme' name='video'><img src='$capas' height=300/></a>";
}
?>
</form>
</body>
</html>