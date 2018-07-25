<?php
    //======================================================================
    // Arquivo de Testes
    //======================================================================

    //-----------------------------------------------------
    // Descrição do recurso
    //-----------------------------------------------------

    /* 
        É o arquivo aonde iremos efetuar todos os testes de inserção, seleção, atualização e exclusão
    */

    require_once("config.php");

    $iDAO = new InstrutorDAO();

    if (isset($_GET['instrutores'])) {
        if($_GET['instrutores'] === "") {
            echo $iDAO->getList();
        } else {    
            $luis = $iDAO->findByMatricula($_GET['instrutores']);
            echo $luis;
        }
    }
