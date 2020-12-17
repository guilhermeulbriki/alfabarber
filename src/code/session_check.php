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
