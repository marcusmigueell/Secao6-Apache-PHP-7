<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*

            for (variave; condição; incremento){
                .. 
                .. 
                .. 
            }

        

            for ($x = 1; $x <= 10; $x++) {
                echo $x . ' ';
            }

         ---------------------------------------------------------------------------------------------------------------------------------------

            //foreach(){}   

            $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

            echo '<pre>';
                print_r($itens);
            echo '</pre>';

            foreach ($itens as $item) { //$item receberá cada um dos indices do array $itens, na 1º iteração receberá sofá, na 2º mesa ...
                // conteúdo que será executado para cada um dos elementos percorridos dentro do array
                echo "$item ";

                if($item == 'mesa'){
                    echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de qualquer outro item!!)';
                }

                echo '<br>';
            }

         ---------------------------------------------------------------------------------------------------------------------------------------

        

            $funcionarios = array(
                array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => '07/05/1990'), 
                array('nome' => 'Maria', 'salario' => 3000),
                array('nome' => 'Julia', 'salario' => 2200),
            );

            echo '<pre>';
                print_r($funcionarios);
            echo '</pre>';

            foreach($funcionarios as $indice => $funcionario) {
                
                foreach($funcionario as $indice_associativo => $valor) {
                    echo "$indice_associativo - $valor <br>";
                }

                echo '<hr>';
            }

         ---------------------------------------------------------------------------------------------------------------------------------------

        */

        $mega_sena = array();

        while(count($mega_sena) <= 5) {

            $numero = rand(1, 60);
            
            if(!in_array($numero, $mega_sena)) {
                $mega_sena[] = $numero;
            }

        }

        echo '<pre>';
            print_r($mega_sena);
        echo '</pre>';
        

    ?>
    
</body>

</html>