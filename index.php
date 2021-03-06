<?php
  include "database/connection.php";
  include "src/code/session_check.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | AlfaBarber</title>

  <link rel="stylesheet" href="./global.css">
  <link rel="stylesheet" href="./styles.css">
  <link rel="icon" type="image/svg+xml" href="../../assets/images/favicon.svg">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
  <main>
    <header>
      <div class="<?php echo $div; ?>">
        <img src="./assets/images/logo.svg" alt="AlfaBarber">
        <span>
          <img src="./assets/icons/login.svg" alt="LogIn">
          <a href="./pages/login/index.html">Fazer login</a>
        </span>
<<<<<<< HEAD
<<<<<<<< HEAD:index.php
        <nav class="<?php echo $class; ?>">
========
        <nav class="barber">
>>>>>>>> 8ea4d4bee1659c8484ac63dafb72c613c920e32a:index.html
=======
        <nav class="<?php echo $class; ?>">
>>>>>>> 8ea4d4bee1659c8484ac63dafb72c613c920e32a
          <span>
            <img src="./assets/icons/user.svg" alt="User">
            <p>Bem vindo, <br><strong><?php if(isset($name))echo $name; ?></strong></p>
          </span>
          <ul>
            <li>
<<<<<<< HEAD
              <a href="./pages/profile/index.php">
=======
              <a href="./pages/profile/index.html">
>>>>>>> 8ea4d4bee1659c8484ac63dafb72c613c920e32a
                <img src="./assets/icons/info.svg" alt="Info">
                Informações do seu perfil
              </a>
            </li>
            <li class="admin">
<<<<<<< HEAD
              <a href="./pages/manage-barbers/index.php">
=======
              <a href="./pages/manage-barbers/index.html">
>>>>>>> 8ea4d4bee1659c8484ac63dafb72c613c920e32a
                <img src="./assets/icons/edit.svg" alt="Edit">
                Gerenciar barbeiros
              </a>
            </li>
            <li class="barber">
              <a href="./pages/list-apointments/index.html">
                <img src="./assets/icons/list.svg" alt="List">
                Lista de agendamentos
              </a>
            </li>
            <li>
              <a href="src/code/session_logout.php">
                <img src="./assets/icons/log-out.svg" alt="Log-out">
                Fazer Logout
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <article class="pictures-appointment">
      <div class="pictures">
        <img class="left" src="./assets/images/baby.png" alt="Baby">
        <img class="right" src="./assets/images/man.png" alt="Man">
      </div>

      <div class="appointment">
        <h1>
          CABELO,<br>
        <strong>BARBA,<br></strong>
          BIGODE,<br>
        </h1>
        <h2>Marque agora seu horário</h2>

        <a href="./pages/create-appointment/index.html">Agendar</a>
      </div>
    </article>

    <article class="barbershops">
      <div>
        <img src="./assets/images/barbershop.png" alt="BarberShop">
        <strong>Bairro Aparecida</strong>
        <section>
          <span>
            <img src="./assets/icons/phone.svg" alt="Phone">
            (55) 9 9967 3278
          </span>
          <button>
            Ver no Google Maps
            <img src="./assets/icons/maps.svg" alt="Maps">
          </button>
        </section>
      </div>

      <div>
        <img src="./assets/images/barbershop.png" alt="BarberShop">
        <strong>Bairro Aparecida</strong>
        <section>
          <span>
            <img src="./assets/icons/phone.svg" alt="Phone">
            (55) 9 9967 3278
          </span>
          <button>
            Ver no Google Maps
            <img src="./assets/icons/maps.svg" alt="Maps">
          </button>
        </section>
      </div>
    </article>

    <article class="about">
      <div class="content">
        <div>
          <h2>Sobre o douglas</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac mauris vitae nunc suscipit malesuada. Nulla aliquam nunc ut lacus finibus, vel sagittis mauris hendrerit. Quisque ultrices ipsum non tellus euismod pellentesque. Vivamus in gravida metus. Nullam rhoncus volutpat luctus. Morbi at urna eu augue scelerisque auctor. Maecenas ullamcorper, massa fermentum tempus euismod, tortor purus scelerisque eros, eget mattis ex lacus vel urna. Morbi at metus in metus vehicula posuere. Donec cursus nulla elit, in ullamcorper massa rhoncus quis. Nam et sagittis metus, eget euismod tortor. Sed dapibus purus erat, nec vestibulum mauris volutpat a. Etiam porta est non dolor vulputate fermentum. Sed eget augue diam. Sed commodo ligula et enim facilisis, a finibus neque volutpat.</p>
        </div>
        <aside>
          <img src="./assets/images/douglas.png" alt="Douglas">
        </aside>
      </div>
    </article>

    <footer>
      <div>
        <p>Copyright © Alfa Barber. Todos os Direitos Reservados.</p>

        <span>
          <a href="./pages/create-appointment/index.html">Agendar</a>
          <a href="#">
            <img src="./assets/icons/instagram.svg" alt="Instagram">
          </a>
          <a href="#">
            <img src="./assets/icons/whatsapp.svg" alt="WhatsApp">
          </a>
          <a href="#">
            <img src="./assets/icons/facebook.svg" alt="Facebook">
          </a>
        </span>
      </div>
    </footer>
  </main>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 8ea4d4bee1659c8484ac63dafb72c613c920e32a
