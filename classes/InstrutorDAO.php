<?php
    //======================================================================
    // Classe de consultas - Camada de Persistência
    //======================================================================

    //-----------------------------------------------------
    // Descrição do recurso
    //-----------------------------------------------------

    /**
     * Essa classe é responsável por fazer todas as transações com o banco de dados
    */

    class InstrutorDAO {

        private $dao;

        public function __construct() {
            $this->dao = new DAO();
        }

        // localizar pelo ID
        public function findByMatricula($matricula) {
            $result = $this->dao->select("SELECT * FROM tb_instrutores WHERE matricula = :pMatricula", array(
                ":pMatricula" => $matricula
            ));

            if (count($result) > 0) {
                return $this->criaInstrutor($result[0]);
            }

            return new Instrutor();
        }

        public function getList() {
            return json_encode($this->dao->select("SELECT * FROM tb_instrutores ORDER BY matricula"));
        }

        private function criaInstrutor($row):Instrutor {
            $instrutor = new Instrutor();

            $instrutor->setMatricula($row['matricula']);
            $instrutor->setNome($row['nome']);
            $instrutor->setNotaDeAvaliacao($row['notaDeAvaliacao']);

            return $instrutor;
        }
    }
