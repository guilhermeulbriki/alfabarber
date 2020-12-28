<?php
  include "../../database/connection.php";
  include "../../src/code/session_check.php";
  include "../../src/code/update/profile.php";
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
  <title>Managa barbers | AlfaBarber</title>
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
      <div class="container">
        <article class="barbershop">
          <header>
            <input type="text" value="Bairro Aparecida">
            <div class="options">
<<<<<<< HEAD:pages/manage-barbers/index.php
              <span>Alterar nome</span>
              <a href="../../src/code/delete/delete-place.php?id="><img src="../../assets/icons/thrash.svg" alt="Thrash"></a>
=======
              <span>Alterar dados</span>
              <img src="../../assets/icons/thrash.svg" alt="Thrash">
>>>>>>> 8ea4d4bee1659c8484ac63dafb72c613c920e32a:pages/manage-barbers/index.html
            </div>
          </header>
          <div class="barbers">
            <?php
              $result_query = $dbc->query("SELECT * FROM barber");
              while($rows = mysqli_fetch_array($result_query)){
               echo '<div class="barber">
                      <img src="../../assets/images/barber.png" alt="Barber">
                      <article>
                        <h2>'.$rows['name'].'</h2>
                        <p class="description">'.$rows['description'].'</p>
                      </article>
                    </div>';
              }
            ?>
        </article>
        <article class="barbershop">
          <header>
            <input type="text" value="Bairro Aparecida">
            <div class="options">
              <span>Alterar dados</span>
              <img src="../../assets/icons/thrash.svg" alt="Thrash">
            </div>
          </header>
          <div class="barbers">
          <?php
              $result_query = $dbc->query("SELECT * FROM barber");
              while($rows = mysqli_fetch_array($result_query)){
               echo '<div class="barber">
                      <img src="../../assets/images/barber.png" alt="Barber">
                      <article>
                        <h2>'.$rows['name'].'</h2>
                        <p class="description">'.$rows['description'].'</p>
                      </article>
                    </div>';
              }
            ?>
          </div>
        </article>
        <button class="add-new-barbershop">Adicionar nova barbearia</button>
      </div>
    </div>
  </main>
</body>
</html>
