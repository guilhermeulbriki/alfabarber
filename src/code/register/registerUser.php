<<<<<<< HEAD
<?php
  include '../../../database/connection.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

    $query_select = "SELECT email FROM userb WHERE email = '$email'";
    $result_select = mysqli_query($dbc, $query_select) or die ('Erro ao executar o comando SQL');
    $array = mysqli_fetch_array($result_select);
    $logarray = $array['email'];

    if($email == "" || $email == null){
        echo "<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='../../../pages/register/index.html';</script>";
    }else{
        if($logarray == $email){
            echo "<script language='javascript' type='text/javascript'>alert('Este email já está registrado em outra conta!');window.location.href='../../../pages/register/index.html';</script>";
            die();
        }else{
            $query_insert = "INSERT INTO userb (name, email, password, type) VALUES ('$name', '$email', SHA('$password'),0)";
            $insert = mysqli_query($dbc, $query_insert) or die ('Erro ao executar o comando SQL');

            if($insert){
                echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../../../index.html';</script>";
            }else{
                echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar o usuário');window.location.href='../../../pages/register/index.html';</script>";
            }
        }
    }

?>
=======
<?php
  include '../../../database/connection.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

    $query_select = "SELECT email FROM userb WHERE email = '$email'";
    $result_select = mysqli_query($dbc, $query_select) or die ('Erro ao executar o comando SQL');
    $array = mysqli_fetch_array($result_select);
    $logarray = $array['email'];

    if($email == "" || $email == null){
        echo "<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='../../../pages/register/index.html';</script>";
    }else{
        if($logarray == $email){
            echo "<script language='javascript' type='text/javascript'>alert('Este email já está registrado em outra conta!');window.location.href='../../../pages/register/index.html';</script>";
            die();
        }else{
            $query_insert = "INSERT INTO userb (name, email, password, type) VALUES ('$name', '$email', SHA('$password'),0)";
            $insert = mysqli_query($dbc, $query_insert) or die ('Erro ao executar o comando SQL');

            if($insert){
                echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../../../index.html';</script>";
            }else{
                echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar o usuário');window.location.href='../../../pages/register/index.html';</script>";
            }
        }
    }

?>
>>>>>>> 8ea4d4bee1659c8484ac63dafb72c613c920e32a
