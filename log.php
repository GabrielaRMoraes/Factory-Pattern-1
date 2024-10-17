<?php

spl_autoload_register(function ($classe) {
    $filename = "{$classe}.class.php";
    if (file_exists($filename)) {
        include_once $filename;
    } else {
        throw new Exception("Classe {$classe} não encontrada.");
    }
});

try{
    // abre uma conexão
    TTransaction::open('pg_livro');

    // define a estratégia de LOG
    TTransaction::setLogger(new LoggerHTML('/tmp/arquivo.html'));

    // escreve a mensagem de LOG
    TTransaction::log('Inserindo registro William Wallace');

    // cria uma instrução SQL
    $sql = new TSqlInsert;

    // define o nome da entidade
    $sql->setEntity('famosas');
    $set->setRowData('codigo', 9);
    $sqk->setRowdata('nome', 'William Wallace');

    // obtem a conexão ativa
    $conn = TTransaction::get();

    // executa a inscrição sql
    $result = $conn->Query($sql->getInstruction);

    // escreve a mensagem 
    TTransaction::log($sql->getInstruction);
}

?>