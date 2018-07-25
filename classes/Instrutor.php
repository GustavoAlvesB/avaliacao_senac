<?php
    //======================================================================
    // Entity class
    //======================================================================

    //-----------------------------------------------------
    // Descrição do recurso
    //-----------------------------------------------------

    /* É uma classe que modela objetos (abstratas ou não) cuja informação e o 
       comportamento associado são, de maneira geral, persistentes, podendo ser 
       armazenados num arquivo ou banco de dados. 
    */

    class Instrutor {

        private $matricula;
        private $nome;
        private $notaDeAvaliacao;

        # encapsulamento
        public function getMatricula():int{
            return $this->matricula;
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNotaDeAvaliacao():float{
            return $this->notaDeAvaliacao;
        }

        public function setNotaDeAvaliacao($notaDeAvaliacao) {
            $this->notaDeAvaliacao = $notaDeAvaliacao;
        }

        # magic method (toString)
        public function __toString() {
            return json_encode(array(
                "matricula" => $this->getMatricula(),
                "nome" => $this->getNome(),
                "notaDeAvaliacao" => $this->getNotaDeAvaliacao()
            ));
        }
    }