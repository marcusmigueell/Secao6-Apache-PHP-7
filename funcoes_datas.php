<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*

            Algumas funções nativas para manipular datas

            date(formato) --> Recuperar a data atual
            date_default_timezone_get(timezone) --> Recuperar o timezone default da aplicação
            date_default_timezone_set(timezone) --> Atualizar o timezone default da aplicação
            strtotime(data) --> Transformar datas textuais em segundos

            consultar em php.net

        */

        //recuperar a data atual / data corrente
        //dia d = dia numérico ou D = dia escrito em inglês
        //mes m = mês numérico ou F = mês escrito em inglês
        //ano Y = ano com 4 digitos ou y = ano com 2 digitos
        //horas h = horas de 01 até 12 ou H = horas de 00 até 23
        //minutos i = minutos de 0 até 59

        //verificando o timezone que o php foi instalado
        echo date_default_timezone_get() . '<br>';
        echo date('d/m/Y H:i') . '<br>';

        //temos que atualizar o timezone para que as horas fique identicas com nosso S.O em tempo de execução
        date_default_timezone_set('America/Sao_Paulo');
        echo date_default_timezone_get() . '<br>';
        echo date('d/m/Y H:i') . '<br><br>';
        
        //calculo entre datas -  padrão 'ano-mes-dia' '2021-06-14'
        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        //timestamp --> 01/01/1970 -- 2018-04-24 retornará em segundos
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo $data_inicial . ' - ' . $time_inicial . '<br>';
        echo $data_final . ' - ' . $time_final . '<br>';

        //achando os segundos entre as datas
        $diferenca_times = $time_final - $time_inicial;

        echo 'A diferença de segundos entre a data inicial e final é ' . $diferenca_times;
        echo '<br><br>';

        //converter segundos em dias
        //1 minuto = 60 segundos
        //1 hora = 60 minutos
        //1 dia = 24 horas

        $segundos_existem_dia = 24 * 60 * 60;

        echo 'Um dia tem ' . $segundos_existem_dia . ' segundos';
        echo '<br><br>';

        $diferenca_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
        echo 'A diferença em dias é ' . $diferenca_dias_entre_as_datas . ' dias';

    ?>
    
</body>

</html>