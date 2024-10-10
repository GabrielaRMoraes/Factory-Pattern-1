<?php

// Class TTransaction 
// Essa classe provê métodos necessários para manipular transações

final class TTransaction
{
    private static $conn; // conexão ativa

    // método __construct
    // Está declarando como private para impedir que se crie instancia de TTransaction

    private function __construct(){}
        // Método open()
        // Abre uma transação e conexão com o BD
        // @param $database = nome do banco de dados

    public static function open($database)
    {
        // Abre uma conexão com o banco de dados e armazena na propriedade estática $conn
        if(empty(self::$conn)){
                self::$conn = TConnection::open($database);
        }
    }

    // Método GET()
    // Retorna a conexão ativa da transção

    public static function get()
    {
        // retorna a coneção ativa
        return self::$conn;
    }

    // Método rollback
    // Desfaz as operações realizadas na transação
    
    public static function rollback()
    {
        if(self::$conn){
            // Desfaz as operações durante a transação
            self::$conn->rollback();
            self ::$conn = null;
        }
    }

    // Método Close()
    // Aplica todas as operações realizadas e fecha a transação

    public static function close()
    {
        if(self::$conn){
            // aplica as opreções realizadas durante transação
            self::$conn->comit();
            self::$conn = null;
        }
    }   

}




?>