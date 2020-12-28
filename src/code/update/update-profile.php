<?php
  include "../../../database/connection.php";
  include "../session_check.php";


  $name=$_POST['name'];
  $email=$_POST['email'];
  $curPassword=$_POST['current-password'];
  $conPassword=$_POST['confirm-password'];


  if(!$_POST['new-password']){
    $password=$curPassword;
  }else{
    if($password != $conPassword){
      echo "<script>alert('As senhas devem ser iguais!')</script>";
      echo '<meta http-equiv="refresh" content="5;URL=../../../pages/profile/index.php"/>';
    }elseif($password = $conPassword){
      $password=sha1($password);
    }
  }

  if($class=="barber"){
    $description=$_POST['description'];
    $idPlace=$_POST['barbershop'];
    $update = "UPDATE barber
    SET
      name='$name',
      email='$email',
      description='$description',
      password='$password',
      IdPlace='$idPlace'
    WHERE idBarber=$id";

    $result = mysqli_query($dbc, $update) or die ('Erro ao executar o comando SQL1');

  }elseif($class=="user" || $class=="admin"){
    $update = "UPDATE userb
    SET
      name='$name',
      email='$email',
      password='$password'
    WHERE idUser=$id";

    $result = mysqli_query($dbc, $update) or die ('Erro ao executar o comando SQL2');
  }

  // Se os dados forem inseridos com sucesso
  if ($result){
    echo "<script>alert('Perfil editado com sucesso!')</script>";
    echo '<meta http-equiv="refresh" content="1;URL=../../../index.php"/>';
  }


?>
