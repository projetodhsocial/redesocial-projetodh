<?php $titulo_pagina = "Projeto Social"; ?>
<?php require_once('./inc/head.php') ?>
<?php require_once('./inc/header.php') ?>

<div class="container-fluid">
    <img src="./assets/img/splash.png" class="rounded float-left" alt="Imagem balão de mensagem">

    <div class="col">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
          </div>
          <!-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
          </div> -->
          <button type="submit" class="btn">Enviar</button>
        </form>
  
</div>

<?php require_once('./inc/footer.php') ?>