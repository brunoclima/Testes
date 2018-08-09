<?php
// Diz para o PHP que estamos usando strings UTF-8 até o final do script
mb_internal_encoding('UTF-8');

// Diz para o PHP que nós vamos enviar uma saída UTF-8 para o navegador
mb_http_output('UTF-8');

// A nossa string UTF-8 de teste
$string = 'Êl síla erin lû e-govaned vîn.';

// Transformar a seqüência de alguma forma com uma função multibyte
// Observe como cortamos a string em um caractere não-ASCII para fins de demonstração
$string = mb_substr($string, 0, 15);

// Conectar a um banco de dados para armazenar a string transformada
// Veja o exemplo PDO neste documento para obter mais informações
// Observe os comandos `set names utf8mb4`!
$link = new PDO(
    'mysql:host=your-hostname;dbname=your-db;charset=utf8mb4',
    'your-username',
    'your-password',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => false
    )
);

// Armazena a nossa string transformada como UTF-8 em nosso banco de dados
// Seu DB e tabelas estão com character set e collation utf8mb4, certo?
$handle = $link->prepare('insert into ElvishSentences (Id, Body) values (?, ?)');
$handle->bindValue(1, 1, PDO::PARAM_INT);
$handle->bindValue(2, $string);
$handle->execute();

// Recuperar a string que armazenamos apenas para provar se foi armazenada corretamente
$handle = $link->prepare('select * from ElvishSentences where Id = ?');
$handle->bindValue(1, 1, PDO::PARAM_INT);
$handle->execute();

// Armazena o resultado em um objeto que vamos saída mais tarde em nossa HTML
$result = $handle->fetchAll(PDO::FETCH_OBJ);

header('Content-Type: text/html; charset=UTF-8');
?><!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UTF-8 test page</title>
    </head>
    <body>
        <?php
        foreach($result as $row){
            print($row->Body);  // Isto deve emitir corretamente nossa string transformada como UTF-8 para o navegador
         }
        ?>
    </body>
</html>