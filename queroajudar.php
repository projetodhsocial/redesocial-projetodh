<?php $titulo_pagina = "Quero ajudar"; ?>
<?php require_once('./inc/head.php') ?>
<?php require_once('./inc/header.php') ?>
<link rel="stylesheet" href="./assets/css/style_queroajudar.css">

<body>

<main>
    <div id="tituloQueroAjudar">
        <h1><b>Eu gostaria de ajudar :</b></h1>
    </div>
    <br>
    <!-- Botões serão filtros, conforma seleciona, filtra as "Postagens" abaixo em tempo real; -->
    <section id="categoria">
         <button type="submit" class="btn"><h3>empreendedores</h3></button>
         <button type="submit" class="btn"><h3>idosos</h3></button>
         <button type="submit" class="btn"><h3>pessoas com depressão</h3></button>
       </section>
    <br>
    <section id="postagens">
    <p></p>
    <div class="card" style="width: 20rem; margin:30px;">
  <img class="card-img-top" src="../redesocial-projetodh/assets/css/img/foto-depressao.jpg" alt="Imagem depressão">
  <div class="card-body">
    <h5 class="card-title">"Preciso muito falar com alguém"</h5>
    <p class="card-text">Estou há alguns meses sofrendo de ansiedade e depressão. Preciso de alguém para conversar, por favor, me ajude!</p>
    <a href="#" class="btn btn-primary">Quero ajudar!</a>
  </div>
</div>
<div class="card" style="width: 20rem; margin:30px;">
  <img class="card-img-top" src="../redesocial-projetodh/assets/css/img/foto-empreendedor.jpg" alt="Imagem empreendedor">
  <div class="card-body">
    <h5 class="card-title">"Não consigo fazer meu site"</h5>
    <p class="card-text">Tenho um projeto social e estou com dificuldades para fazer um site como um portal. Alguém poderia ajudar?</p>
    <a href="#" class="btn btn-primary">Quero ajudar!</a>
  </div>
</div>

<div class="card" style="width: 20rem; margin:30px;">
  <img class="card-img-top" src="../redesocial-projetodh/assets/css/img/foto-idosos.jpg" alt="Imagem idoso">
  <div class="card-body">
    <h5 class="card-title">"Alguém poderia acompanhar minha mãe em uma consulta médica?"</h5>
    <p class="card-text">Agendei um cardiologista para minha mãe, mas tenho uma reunião e não poderei acompanhá-la. Você poderia levá-la até o médico?</p>
    <a href="#" class="btn btn-primary">Quero ajudar!</a>
  </div>
</div>

    </section>

</main>

</body>




<?php require_once('./inc/footer.php') ?>