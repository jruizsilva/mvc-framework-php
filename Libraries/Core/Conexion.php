<?php

class Conexion
{
  private $conn;

  public function __construct()
  {
    if (CONNECTION) {
      try {
        $connectionString = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $this->conn = new PDO($connectionString, DB_USER, DB_PASSWORD);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa";
      } catch (PDOException $e) {
        echo "Error de conexion: " . $e->getMessage();
      }
    }

  }

  public function getConnection()
  {
    return $this->conn;
  }
}



?>