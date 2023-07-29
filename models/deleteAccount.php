<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!empty($_POST)) {
    extract($_POST);
    $valid = (boolean) true;

    if (isset($_POST['deleteAccount'])) {

        if ($valid) {

            $request = $database->prepare("DELETE FROM `utilisators` WHERE id = ?");
            $request->execute(array($_SESSION['id']));

            session_destroy();
            session_unset();

            header('Location: /W-PHP-501-PAR-1-1-mymeetic-lucas.marie-anne/views/sign_in.php');
            exit;
        }
    }
}

?>