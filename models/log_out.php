<?php
    session_start();
    session_destroy();
    session_unset();

    header('Location: /W-PHP-501-PAR-1-1-mymeetic-lucas.marie-anne/views/sign_in.php');
    exit;
?>