<?php
    //======================================================================
    // DAO - DATA ACCESS OBJECT
    //======================================================================

    //-----------------------------------------------------
    // Descrição do recurso
    //-----------------------------------------------------

    /* É uma função que colocamos dentro da nossa aplicação PHP
       para que ele carregue automaticamente sem precisar ficar
       utilizando o require toda vez que precisarmos usar uma 
       classe. 
    */

    class DAO extends PDO {

        # variavel responsável por conter a conexão
        private $conn;

        # magic method (construtor)
        public function __construct() {
            # instancia da classe PDO com passagem do DSN
            $this->conn = new PDO("mysql:dbname=avaliacao;host=localhost", "root", "");
            // DSN é uma estrutura de dados para descrever uma conexão a uma fonte de dados
        }

        private function setParams($statement, $parameters = array()) {
            foreach ($parameters as $key => $value) {
                $this->setParam($statement, $key, $value);
            }
        }

        private function setParam($statement, $key, $value) {
            $statement->bindParam($key, $value);
        }

        // estrutura de querys
        public function query($rawQuery, $params = array()) {

            // query
            $stmt = $this->conn->prepare($rawQuery);

            // binds
            $this->setParams($stmt, $params);

            $stmt->execute();

            return $stmt;
        }

        public function select($rawQuery, $params = array()):array {
            $stmt = $this->query($rawQuery, $params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }