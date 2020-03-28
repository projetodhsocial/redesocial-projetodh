<?php $titulo_pagina = "Projeto Social"; ?>
<?php require_once('./inc/head.php') ?>
<?php require_once('./inc/header.php') ?>

<section class="container-fluid container-home">

  <div class="row d-flex align-items-start flex-column">
    <div class="col-md-6 p-4">
      <div class="card card-homepage">
        <div class="card-body">
          <h3 class="card-title mb-3">Login</h3>
          <form>
            <div >
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login">
            </div>
            <div class="form-group my-4">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container my-5 sobre">
      <div class="col-md-12">

      <a name="sobre"><h2 class="text-uppercase text-center text-monospace my-5">Sobre</h2></a>

      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolores blanditiis aspernatur nobis autem, a in itaque recusandae eaque, repellat suscipit debitis? Aspernatur dicta, cum rerum delectus laboriosam sunt odio.</p>
      
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolores blanditiis aspernatur nobis autem, a in itaque recusandae eaque, repellat suscipit debitis? Aspernatur dicta, cum rerum delectus laboriosam sunt odio.</p>

      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolores blanditiis aspernatur nobis autem, a in itaque recusandae eaque, repellat suscipit debitis? Aspernatur dicta, cum rerum delectus laboriosam sunt odio.</p>
      
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolores blanditiis aspernatur nobis autem, a in itaque recusandae eaque, repellat suscipit debitis? Aspernatur dicta, cum rerum delectus laboriosam sunt odio.</p>
      
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolores blanditiis aspernatur nobis autem, a in itaque recusandae eaque, repellat suscipit debitis? Aspernatur dicta, cum rerum delectus laboriosam sunt odio.</p>
      
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolores blanditiis aspernatur nobis autem, a in itaque recusandae eaque, repellat suscipit debitis? Aspernatur dicta, cum rerum delectus laboriosam sunt odio.</p>
    </div>
    </div>
  </section>

  <section class="container-fluid contact">

    <div class="container contact">

    <a name="contato"><h2 class="text-uppercase text-center text-monospace mt-4 mb-3">Contato</h2></a>
    
      <form>
      <div class="form-group">
        <label for="nomecompleto">Nome Completo</label>
        <input type="text" class="form-control" id="nomecompleto" placeholder="Fulado de Tal">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Endereço de email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
      </div>
    
      <div class="form-group">
        
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Deixe sua mensagem</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </section>
<?php require_once('./inc/footer.php') ?>