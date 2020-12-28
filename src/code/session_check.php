<<<<<<< HEAD
<?php
	      if(!isset($_SESSION)) session_start();{
	        if(isset($_SESSION['email'])){
	          $login_session = $_SESSION['email'];
	        }

	        if(isset($login_session)){
            $result = $dbc->query("SELECT * FROM userb WHERE email = '$login_session'");
            $rowcount = mysqli_num_rows($result);
            if($rowcount>0){
              $row = mysqli_fetch_assoc($result);
              $type=$row['type'];
              $name=$row['name'];
              $id=$row['idUser'];
              $class1 = 'barber';
              if($type==0){
                $div = 'loged';
                $class = 'user';
                $class1 = 'barber';
              }elseif($type==1){
                $div = 'loged';
                $class = 'admin';
                $class1 = 'barber';
              }
            }else{
              if($resultt = $dbc->query("SELECT * FROM barber WHERE email = '$login_session'")){
                $row = mysqli_fetch_assoc($resultt);
                $name=$row['name'];
                $description = $row['description'];
                $id=$row['idBarber'];
                $div = 'loged';
                $class = 'barber';
                $class1 = "";
              }
            }
          }else{
            $div = 'not-loged';
            $class = null;
            $class1 = 'barber';
          }
	      }
?>
=======
<?php
	      if(!isset($_SESSION)) session_start();{
	        if(isset($_SESSION['email'])){
	          $login_session = $_SESSION['email'];
	        }

	        if(isset($login_session)){
            $result = $dbc->query("SELECT * FROM userb WHERE email = '$login_session'");
            $rowcount = mysqli_num_rows($result);
            if($rowcount>0){
              $row = mysqli_fetch_assoc($result);
              $type=$row['type'];
              $name=$row['name'];
              if($type==0){
                $div = 'loged';
                $class = 'user';
              }elseif($type==1){
                $div = 'loged';
                $class = 'admin';
              }
            }else{
              if($resultt = $dbc->query("SELECT * FROM barber WHERE email = '$login_session'")){
                $row = mysqli_fetch_assoc($resultt);
                $name=$row['name'];
                $div = 'loged';
                $class = 'barber';
              }
            }
          }else{
            $div = 'not-loged';
            $class = null;
          }
	      }
?>
>>>>>>> 8ea4d4bee1659c8484ac63dafb72c613c920e32a
