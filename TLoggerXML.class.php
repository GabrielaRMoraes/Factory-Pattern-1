<?php

// Classe TLoggerXML
// implementa o algoritmo de log em XML

class TLoggerXML extends TLogger {
    // método write
    // escreva uma mensagem no arquivo de LOG
    // @param $message = mensagem a ser escrita

    public function write($message){
        date_default_timezone_get("America/Sao_Paulo");
        $time = date('Y-m-s H:i:s');
        // monta a string
        $text = "<log>\n";
        $text .= "<time>$time</time>\n";
        $text .= "<message>$message</message>\n";
        $text .= "</log>\n";

        // adiciona ao final do arquivo
        $handler = fopen($this->filename, 'a');
        fwrite($handler, $text);
        fclose($handler);
    }

}





?>