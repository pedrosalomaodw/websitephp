<?php
require_once __DIR__.'/database.php';

$capa_filme = $_POST['capalink'];
$nome_filme = $_POST['nome'];
$video_filme = $_POST['videolink'];

$mensagem = "insert into videossql.videos (capa, nome, video) values ('$capa_filme', '$nome_filme', '$video_filme')";

if(isset($_POST['enviarfilme'])){
    $bank->query($mensagem);
    $bank->close();
};

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin area</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<!-- link da capa -->
<input type="text" placeholder="link da capa" name="capalink" required>
<!-- nome do filme -->
<input type="text" placeholder="nome do filme" name="nome" required>
<!-- link do video -->
<input type="text" name="videolink" id="" placeholder="link do video" required name="linkvideo">
<!---------------------------------------------------- -->
<button name="enviarfilme">enviar dados</button>
</form>
<?php
echo "<br>";
require_once __DIR__.'/posts.php';
?>
</body>
</html>