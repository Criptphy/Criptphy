<?php

include 'session.php';
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <title>Criptphy - Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script type="module" crossorigin src="../../assets/manager.9b8d2ab7.js"></script>
  <link rel="modulepreload" href="../../assets/style.329fa817.js">
  <link rel="stylesheet" href="../../assets/style.4a5d9c53.css">
</head>
<body class="app app__theme">
  <div class="app">
    <header>
      <div class="app app__nav">
        <div class="app app__section app__section--right">
          <a href="settings.php" class="ri-settings-5-line ri-2x"></a> <!-- Settings -->
          <a href="logout.php" class="ri-logout-box-line ri-2x"></a> <!-- Logout -->
        </div>
      </div>
    </header>
    <main>
      <div class="app app__search">
        <input type="search" name="" id="" placeholder="Pesquisar...">
      </div>
      <div class="app app__divider">

      <?php

        $id_user = $_SESSION['id_user'];
          
        $registros = $connect->query("SELECT * FROM senhas WHERE id_user='$id_user'");

          while ($linha = mysqli_fetch_array($registros)) {
              $idsenha = $linha['id_senha'];
              $titlesenha = $linha['nome_senha'];
              $passbanco = $linha['senha_gerada'];

        echo <<< HTML

        <!-- PASSWORD -->
        <form class="app app__password">
          <div class="app app__sections"><p>$titlesenha</p></div> <!-- Title -->
          <div class="app app__sections app__sections--buttons"> <!-- buttons -->
            <a target="_blank" rel="noopener noreferrer" class="button__short copy"><i class="ri-clipboard-line ri-lg"></i></a>
            <a href="#" type="submit" class="button__short edit-senha"><i class="ri-pencil-line ri-lg"></i></a>
            <a href="delpassword.php?id_senha=$idsenha" class="button__short button__short--warn"><i class="ri-delete-bin-line ri-lg"></i></a>
            <input type="hidden" class="app app__sections app__sections--pin value" value="$passbanco">
          </div>
          <!-- <div class="app app__sections app__sections--pin value">teste</div> -->
        </form>

        HTML;
          }
          ?>

        <!-- Add password -->
        <button class="button__add"><i class="ri-add-line ri-3x"></i></button>
      </div>
    </main>
  </div>

  <!-- Modal: Create password -->
  <div class="modal__container modal__container--disabled" id="container1">
    <div class="modal__popupsm modal__popupsm--disabled" id="popupsm1">
      <div class="modal__close">
        <i class="ri-close-line ri-2x"></i>
      </div>
      <div class="modal__content modal__content--actions">
        <form action="cadsenha.php" method="post">
          <input type="text" placeholder="digite o nome da senha..." name="titleSenha">
          <button type="submit" class="button__lg"><i class="ri-add-line ri-lg"></i>Criar</button>
        </form>
      </div>
    </div>
  </div>

    <!-- Modal: Editar título -->
    <div class="modal__container modal__container--disabled" id="container2">
      <div class="modal__popupsm modal__popupsm--disabled" id="popupsm2">
        <div class="modal__close">
          <i class="ri-close-line ri-2x"></i>
        </div>

        <?php
        echo <<< HTML
        <div class="modal__content modal__content--actions">
          <form action="updatepass.php?id_senha=$idsenha" method="post">
            <input type="text" placeholder="digite o novo nome da senha..." name="newtitleSenha">
            <button type="submit" class="button__lg"><i class="ri-save-3-line ri-lg"></i>Salvar</button>
          </form>
        </div>
      </div>
    </div>

  
</body>
</html>

HTML;
?>