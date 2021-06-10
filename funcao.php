<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        function exibirBoasVindas() {
            echo 'Bem vindo ao curso de PHP <br>';
        }

        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;

            return $area;
        }

        exibirBoasVindas();

        $area = calcularAreaTerreno(10,20);
        echo "A area do terreno é $area";

        echo '<br><br>';

        /*

            Criar uma função para calcular o imposto de renda a ser pago com base em salário passado por parâmetro

            Para calcular o valor do imposto a ser pago, considere a seguinte tabela abaixo:

                    BASE DE CÁLCULO                   |           ALÍQUOTA
                    até R$ 1.903,98                   |            isento
                    De R$ 1.903,99 até R$ 2.826,65    |            7,5%
                    De R$ 2.826,66 até R$ 3.751,05    |            15%
                    De R$ 3.751,05 até R$ 4.664,68    |            22,5%
                    Acima de R$ 4.664,68              |            7,5%

        */

        function imposto($salario) {
            if($salario <= 1903.98) {
                return 'isento';
            } else if ($salario > 1903.98 && $salario <= 2826.65) {
                return '7.5';
            } else if ($salario > 2826.65 && $salario <= 3751.05) {
                return '15';
            } else if ($salario > 3751.05 && $salario <= 4664.68) {
                return '22.5';
            } else if ($salario > 4664.68) {
                return '27.5';
            }
        }

        echo 'O imposto sobre seu salario de R$ 2500,00 é ' . imposto(2500) . '%<br>';
        echo 'O imposto sobre seu salario de R$ 1800,00 é ' . imposto(1800) . '<br>';
        echo 'O imposto sobre seu salario de R$ 5000,63 é ' . imposto(5000.63) . '%<br>';
        echo 'O imposto sobre seu salario de R$ 3649,51 é ' . imposto(3649.51) . '%<br>';

    ?>
    
</body>

</html>