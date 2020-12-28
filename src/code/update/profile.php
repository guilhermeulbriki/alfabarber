<?php


    include "../../database/connection.php";

    include "../../src/code/session_check.php";

    if($div=="loged"){
        $email=$row['email'];
        $password=$row["password"];
    }
    if($div=="not-loged"){
        header('Location: ../../../index.php');
    }
?>
