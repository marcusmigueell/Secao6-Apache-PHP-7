<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*

            is_array(array) -> Verifica se o parâmetro é um array
            array_keys(array) -> Retorna todas as chaves de um array
            sort(array) -> Ordena um array e reajusta seus índices
            asort(array) -> Ordena um array preservando os índices
            count(array) -> Conta a quantidade de elementos de um array
            array_merge(array) -> Funde um ou mais arrays
            explode(array) -> Divide uma string baseada em um delimitador
            implode(array) -> Junta elementos de um array em uma string

        
         ---------------------------------------------------------------------------------------------------------
            $array = array();
            $retorno = is_array($array);

            if($retorno){
                echo 'Sim, é um array';
            } else {
                echo 'Não, não é um array';
            }

         ---------------------------------------------------------------------------------------------------------

            $array = [1 => 'a', 7 => 'b', 18 => 'c'];

            echo '<pre>';
                print_r($array);
            echo '</pre>';

            $chaves_array = array_keys($array);

            echo '<pre>';
                print_r($chaves_array);
            echo '</pre>';

         ---------------------------------------------------------------------------------------------------------

            $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');

            echo '<pre>';
                print_r($array);
            echo '</pre>';

            sort($array); //true ou false

            echo '<pre>';
                print_r($array);
            echo '</pre>';

         ---------------------------------------------------------------------------------------------------------

            $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');

            echo '<pre>';
                print_r($array);
            echo '</pre>';

            asort($array); //true ou false

            echo '<pre>';
                print_r($array);
            echo '</pre>';

         ---------------------------------------------------------------------------------------------------------

            $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');

            echo '<pre>';
                print_r($array);
                echo count($array);
            echo '</pre>';

         ---------------------------------------------------------------------------------------------------------

            $array1 = ['osx', 'windows'];
            $array2 = array('linux');
            $array3 = ['solaris'];

            $novo_array = array_merge($array1, $array2, $array3);

            echo '<pre>';
                print_r($novo_array);
            echo '</pre>';

         ---------------------------------------------------------------------------------------------------------

            $string = '24/06/2021';
            $array_retorno = explode('/', $string);

            echo '<pre>';
                print_r($array_retorno);
            echo '</pre>';

         ---------------------------------------------------------------------------------------------------------

            $array = array('m', 'a', 'r', 'c', 'u', 's');
            $string_retorno = implode('', $array);

            echo $string_retorno;

        */

    ?>
    
</body>

</html>