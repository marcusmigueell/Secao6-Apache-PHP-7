<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        $lista_coisas = array();
        $lista_coisas['frutas'] = array('Banana', 'Maça', 'Morango', 'Uva');
        $lista_coisas['pessoas'] = array('Maria', 'José', 'João');

        echo '<pre>'; //mostrar o array formatado
            print_r($lista_coisas);
        echo '</pre>';

        echo '<hr>';

        //recuperar a fruta morango
        echo $lista_coisas['frutas'][2];

        echo '<br><hr>';

        //recuperar a pessoa josé
        echo $lista_coisas['pessoas'][1];

        echo '<br><hr>Pesquisa em arrays<br><br>';

        $existe = in_array('Melancia', $lista_coisas['frutas']);

        if($existe){
            echo 'Sim, a fruta pesquisada existe no array<br><br>';
        } else {
            echo 'Não, a fruta pesquisada não existe no array<br><br>';
        }

        echo array_search('João', $lista_coisas['pessoas']);        

    ?>
    
</body>

</html>