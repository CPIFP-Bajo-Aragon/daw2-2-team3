<?php
class Base
{
    private $host = DB_HOST;
    private $usuario = DB_USUARIO;
    private $password = DB_PASSWORD;
    private $nombre_base = DB_NOMBRE;
    private $charset = 'utf8mb4';

    private $dbh;
    private $stmt;
    private $error;


    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->nombre_base;charset=$this->charset";
        $opciones = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->usuario, $this->password, $opciones);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($parametro, $valor, $tipo = null)
    {
        if (is_null($tipo)) {
            switch (true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;

                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;

                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;

                default:
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($parametro, $valor, $tipo);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function registro()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function registros()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }
}
