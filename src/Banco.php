<?php
namespace ExemploCrudPoo;

use ExemploCrudPoo\Banco as ExemploCrudPooBanco;
use PDO,Exception;

abstract class Banco{
    
    private static string $servidor = "localhost";
    private static string $usuario = "root";
    private static string $senha = "";
    private static string $banco = "vendas";

    /* classes internas do próprio php (como o PDO) prescisam do use NomedaClasse ou barra invertida \ */
    // private static \PDO $conexao; 
    private static PDO $conexao; // se for esta forma é usado use PDO

    /* Método de conexão ao banco (será usado pelas outras classes) */
    public static function conecta():PDO{
        try {
            self::$conexao = new PDO(
                "mysql:host=".self::$servidor.";dbname=".self::$banco.";charset=utf8",
                self::$usuario, self::$senha
            ); 

            self::$conexao->setAttribute(
                PDO::ATTR_ERRMODE, 
                PDO::ERRMODE_EXCEPTION
            );
            // echo "Beleza🐍🐢";
        } catch (Exception $erro) {
            die("deu ruim: ".$erro->getMessage());
        }
        return self::$conexao;
    }
}

// Banco::conecta();
