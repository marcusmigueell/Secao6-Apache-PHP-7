<?php

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $titulo . ' # ' . $categoria . ' # ' . $descricao . PHP_EOL;

    $arquivo = fopen('Arquivo.txt', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>