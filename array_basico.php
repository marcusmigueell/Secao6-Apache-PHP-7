<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*

            lista de frutas => 1 = banana ; 2 = maça; 3 = morango; 4 = Uva

            //utilizando variaveis
            $variavel_1 = 'Banana';
            $variavel_1 = 'Maça';
            $variavel_1 = 'Morango';
            $variavel_1 = 'Uva'; 

            //com um único array
            //pode iniciar o array de 2 maneiras
            $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva'); // assim
            $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva']; // ou assim

            //ou podemos inicar assim
            $lista_frutas = array();
            $lista_frutas[0] = 'Banana';
            $lista_frutas[1] = 'Maça';
            $lista_frutas[2] = 'Morango';
            $lista_frutas[3] = 'Uva';


            //pesquisa em array
            //in_array() --> retorna true - 1 ou false - vazio para a existencia do que está sendo procurado
            //array_search() --> retorna o indice do valor pesquisado, caso exista, se não exitir retorna null

        */

        //sequenciais (numéricos)
        $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');

        $lista_frutas[] = 'Abacaxi';

        echo '<pre>'; //mostrar o array formatado
            var_dump($lista_frutas);
        echo '</pre>';

        echo '<br>';
        
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        echo '<br>';
        
        echo $lista_frutas[2];

        echo '<br><hr>Pesquisa em arrays<br><br>';

        $existe = in_array('Abacate', $lista_frutas);

        if($existe){
            echo 'Sim, a fruta pesquisada existe no array<br><br>';
        } else {
            echo 'Não, a fruta pesquisada não existe no array<br><br>';
        }

        $referencia = array_search('Uva', $lista_frutas);

        if($referencia != null){
            echo 'A fruta pesquisada está na posição ' . $referencia . '<br><br>';
        } else {
            echo 'A fruta pesquisada não existe no array<br><br>';
        }

    ?>
    
</body>

</html>