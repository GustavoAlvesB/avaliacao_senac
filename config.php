<?php
    //======================================================================
    // Autoload
    //======================================================================

    //-----------------------------------------------------
    // Descrição do recurso
    //-----------------------------------------------------

    /* É uma função que colocamos dentro da nossa aplicação PHP
       para que ele carregue automaticamente sem precisar ficar
       utilizando o require toda vez que precisarmos usar uma 
       classe. 
 */

    spl_autoload_register(function ($class_name) {
        $filename = "classes" . DIRECTORY_SEPARATOR . "$class_name.php";

        if (file_exists($filename)) {
            require_once($filename);
        }
    });