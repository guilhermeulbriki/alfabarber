<?php 
include "../../database/connection.php";
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
  <title>Profile | AlfaBarber</title>
</head>
<body>
  <main>
    <header>
      <div class="content">
        <img src="../../assets/images/logo.svg" alt="AlfaBarber">
        <a class="home" href="../../index.html">
          <img src="../../assets/icons/home.svg" alt="Home">
          Voltar para a home
        </a>
      </div>
    </header>
    <form class="user-loged" action="#">
      <img class="user" src="../../assets/images/user-avatar.png" alt="user-avatar">
      <img class="barber" src="../../assets/images/barber-avatar.png" alt="barber-avatar">

      <div class="input-content">
        <img src="../../assets/icons/user-line.svg" alt="User">
        <input name="name" value="<?php echo $name?>">
      </div>
      <div class="input-content">
        <img src="../../assets/icons/email.svg" alt="Email" >
        <input type="email" name="email" value="<?php echo $email?>">
      </div>
      <div class="input-content barber">
        <img src="../../assets/icons/barbershop-select.svg" alt="Barbers">
        <select name="barbershop">
          <option style="display: none;" value="0">Barbearia</option>
          <option value="1">Bairro Aparecida</option>
        </select>
      </div>
      <div class="input-content barber">
        <img src="../../assets/icons/description.svg" alt="Description">
        <input type="email" name="description" placeholder="Descrição">
      </div>
      <div class="input-content current-password">
        <img src="../../assets/icons/password.svg" alt="Password">
        <input type="password" name="current-password" value="<?php echo $pasword;?>">
      </div>
      <div class="input-content">
        <img src="../../assets/icons/password.svg" alt="Password">
        <input type="password" name="new-password" placeholder="Nova senha">
      </div>
      <div class="input-content">
        <img src="../../assets/icons/password.svg" alt="Password">
        <input type="password" name="confirm-password" placeholder="Confirmar senha">
      </div>
      <button type="submit">Atualizar</button>
    </form>
  </main>
</body>
</html>
