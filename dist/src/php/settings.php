<?php 

include 'session.php';
include 'connect.php';

$id_user = $_SESSION['id_user'];

$consulta = $connect->query("SELECT * FROM users WHERE id_user='$id_user'");

while ($linha = mysqli_fetch_array($consulta)) {
    $nome_user = $linha['nome_user'];

}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criptphy - Settings</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script type="module" crossorigin src="../../assets/settings.33e9f050.js"></script>
  <link rel="modulepreload" href="../../assets/style.329fa817.js">
  <link rel="stylesheet" href="../../assets/style.4a5d9c53.css">
</head>
<body class="app app__theme">
    <div class="app">
      <header>
        <div class="app app__nav">
          <div class="app app__section">
            <a href="manager.php" class="ri-arrow-left-line ri-2x"></a>
          </div>
        </div>
      </header>
      <main>
        <div class="app app__settings">
          <p id="name"><?php echo"$nome_user" ?></p> <!-- Nome -->
          <p id="plan">Plano atual: Standart</p> <!-- Plano atual -->
          <button class="button__lg"><i class="ri-shield-star-line ri-lg"></i>Alterar plano</button>
          <button class="button__lg" id="editConta"><i class="ri-pencil-line ri-lg"></i>Editar conta</button>
          <button class="button__lg button__lg--warn" id="deleteConta"><i class="ri-delete-bin-line ri-lg"></i>Excluir conta</button>
        </div>
      </main>
    </div>

    <!-- Modal: Editar -->
    <div class="modal__container modal__container--disabled" id="container1">
      <div class="modal__popupsm modal__popupsm--disabled" id="popupsm1">
        <div class="modal__close">
          <i class="ri-close-line ri-2x"></i>
        </div>
        <div class="modal__content modal__content--actions">
          <form action="updatedados.php" method="post">
            <input type="text" placeholder="digite seu novo nome..." name="new_user">
            <input type="email" placeholder="digite seu novo e-mail..." name="new_email">
            <input type="password" placeholder="digite sua nova senha..." name="new_pass">
            <button type="submit" class="button__lg"><i class="ri-save-3-line ri-lg"></i>Salvar</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal: Excluir -->
    <div class="modal__container modal__container--disabled" id="container2">
      <div class="modal__popupsm modal__popupsm--disabled" id="popupsm2">
        <div class="modal__close">
          <i class="ri-close-line ri-2x"></i>
        </div>
        <div class="modal__content modal__content--actions">
          <p>Ao deletar sua conta tenha certeza de que irá perder todos os seus dados, recomendamos que faça um backup previamente.</p>
          <!-- <form action="" method="post" class="modal__buttons"> -->
            <a href="delete.php" type="submit" class="button__lg button__lg--warn"><i class="ri-delete-bin-line ri-lg"></i>Excluir conta</a>
          <!-- </form> -->
        </div>
      </div>
    </div>

  
</body>
</html>