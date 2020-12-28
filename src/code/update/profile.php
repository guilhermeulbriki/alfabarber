<<<<<<< HEAD
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
=======

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
>>>>>>> 8ea4d4bee1659c8484ac63dafb72c613c920e32a
