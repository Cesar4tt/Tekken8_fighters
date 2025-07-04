<?php
require 'Attributes.php';

if (!isset($_GET['personagem'])) {
    echo "Nenhum personagem selecionado.";
    exit;
}

$nomeClasse = $_GET['personagem'];

if (!class_exists($nomeClasse)) {
    echo "Personagem '$nomeClasse' não existe.";
    exit;
}

$personagem = new $nomeClasse();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $personagem->__get('nome'); ?> - Ficha</title>
</head>
<body>
    <img src="./img/<?php echo $personagem->__get('img'); ?>.png" alt="<?php echo $personagem->__get('nome'); ?>" style="width: 25%; height: 25%;">
    <h1><?php echo $personagem->__get('nome'); ?></h1>
    <h2><?php echo $personagem->__get('sobrenome'); ?></h2>
    <p><strong>País:</strong> <?php echo $personagem->__get('pais'); ?></p>
    <p><strong>Estilo:</strong> <?php echo $personagem->__get('style'); ?></p>
    <p><strong>Aniversário:</strong> <?php echo $personagem->__get('aniversario'); ?></p>
    <p><strong>Descrição:</strong> <?php echo $personagem->__get('descricao'); ?></p>
    <hr>
    <h3>Atributos</h3>
    <p>Força: <?php echo $personagem->__get('forca'); ?></p>
    <p>Defesa: <?php echo $personagem->__get('defesa'); ?></p>
    <p>Esquiva: <?php echo $personagem->__get('esquiva'); ?></p>
    <p>Velocidade: <?php echo $personagem->__get('velocidade'); ?></p>
    <hr>
    <h3>Ataques</h3>
    <p><?php $personagem->ataqueComum(); ?></p>
    <p><?php $personagem->defender(); ?></p>
    <p><?php $personagem->esquivar(); ?></p>
    <p><?php $personagem->ataqueEspecial(); ?></p>
</body>
</html>
