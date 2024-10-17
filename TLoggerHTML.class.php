<?php

// Classe TloggerHTML
// implementa o algoritmo de log em HTML

class TLoggerHTML extends TLogger{
    // método write
    // escreve uma mensagem de log no arquivo de LOG
    // @param $message = mensagem a ser escrita

    public function write($message){
        date_default_timezone_get("America/Sao_Paulo");
        $time = date('Y-m-d H:i:s');
        // monta a string 

        $text = "p<>\n";
        $text .= "<b>$time</b>:\n";
        $text .= "<i>$message</i><br>\n";
        $text .= "</p>\n";

        // adiciono ao final do arquivo de LOG 
        $handler = fopen($this->filename, 'a');
        fwrite($handler, $text);
        fclose($handler);
    }
}





?>