<?php

include '../../../database/connection.php';


$email = $_POST['email'];
$password = $_POST['password'];


    $query = "SELECT * FROM userb WHERE email = '$email' AND password = SHA('$password')";
    $verifica = mysqli_query($dbc, $query) or die ("Erro ao executar a instrução SQL");

    if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../../../pages/login/index.html'</script>";
        die();
    } else {
        $resultado=mysqli_fetch_assoc($verifica);

        if(!isset($_SESSION)) session_start();

        $_SESSION['email'] = $resultado['email'];
        $_SESSION['idUser']=$resultado['idUser'];
        echo"<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso!');window.location.href='../../../index.php'</script>";
    }

?>



