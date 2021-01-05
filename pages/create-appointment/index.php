<?php
  include "../../database/connection.php";

  $result_place =  $dbc->query("SELECT * FROM place");
  $result_barber = $dbc->query("SELECT * FROM barber");

  $barbershop_check = "";
  $barber_check = "";


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../global.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" type="image/svg+xml" href="../../assets/images/favicon.svg">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Create appointments | AlfaBarber</title>
</head>
<body>
  <main>
    <header>
      <div class="header-content">
        <img src="../../assets/images/logo.svg" alt="AlfaBarber">
        <a class="home" href="../../index.php">
          <img src="../../assets/icons/home.svg" alt="Home">
          Voltar para a home
        </a>
      </div>
    </header>
    <div class="content">
      <form class="container">
        <article>
          <div class="barbershops">
          <?php
            while($row_place = mysqli_fetch_array($result_place)){
              $link = "index.php?barbershop=".$row_place['idPlace'];
              $aspas = "'";

              if(isset($_GET['barbershop'])){
                $barbershop = $_GET['barbershop'];
                if($barbershop == $row_place['idPlace']){
                  $barbershop_check = "CHECKED";
                }else{
                  $barbershop_check = "";
                }
              }

            echo  '<div class="barbershop">
                    <img src="../../assets/images/barbershop.png" alt="Barbershop">
                    <strong>'.$row_place['name'].'</strong>
                    <span>
                      <img src="../../assets/icons/phone.svg" alt="Phone">
                      '.$row_place['phone'].'
                    </span>
                    <input type="checkbox" name="barbershop" onclick="location.href='.$aspas.$link.$aspas.';" value="'.$row_place['idPlace'].'" '.$barbershop_check.'>
                  </div>';
            }
          ?>
          </div>
          <ul class="barbers">
          <?php
            while($row_barber = mysqli_fetch_array($result_barber)){
              if(isset($_GET['barbershop'])){
                $link = "index.php?barbershop=".$barbershop.",barber=".$row_barber['idBarber'];
                $aspas = "'";
              }else{
                $link = "index.php";
                $aspas = "'";
              }

              if(isset($_GET['barber'])){
                $barber = $_GET['barber'];
                if($barber == $row_barber['idBarber']){
                  $barber_check = "CHECKED";
                }else{
                  $barber_check = "";
                }
              }

            echo '<li class="barber">
              <img src="../../assets/images/barber.png" alt="Barber">
              <aside class="description">
                <strong>'.$row_barber['name'].'</strong>
                <p>'.$row_barber['description'].'</p>
              </aside>
              <input type="checkbox" id="barber" onclick="location.href='.$aspas.$link.$aspas.';" value="'.$row_barber['idBarber'].'" '.$barber_check.'>
            </li>';
            }
          ?>

          <button type="submit">Buscar horários</button>
          </ul>
        </article>

        <aside class="appointment">
          <div class="select-content">
            <select name="month">
              <option value="" hidden>Escolha o mês</option>
            </select>
          </div>

          <div class="select-content">
            <select name="day">
              <option value="" hidden>Escolha o dia</option>
            </select>
          </div>

          <div class="select-content">
            <select name="time">
              <option value="" hidden>Escolha a hora</option>
            </select>
          </div>

          <button type="submit">Agendar</button>
        </aside>
      </form>
    </div>
  </main>
</body>
</html>
