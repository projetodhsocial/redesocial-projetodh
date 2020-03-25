<?php $titulo_pagina = "Cadastro"; ?>
<?php require_once('./inc/head.php') ?>
<?php require_once('./inc/header.php') ?>
<link rel="stylesheet" href="./assets/css/style_cadastro.css">

<body>

        <section>
            <!-- <p>A colaboração gera o progresso de todos, por isso vamos nos conectar e ajudar quem precisa.</p> -->
            <img src="../redesocial-projetodh/assets/css/img/foto-conexao-projetodh.png" width="500" height="600px">
            <form class="col-md-6">
                <h4>Faça seu cadastro xXXXxX </h4>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputName" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputSurname" placeholder="Sobrenome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="inputCelular" placeholder="Celular">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" class="form-control" id="inputDataDeNascimento" placeholder="Nascimento">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputcidade" placeholder="Cidade">
                    </div>
                    <div class="form-group col-md-6">
                        <select id="inputEstado" class="form-control" placeholder="Estado">
                            <option selected>Estado</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Concordo com os Termos & Condições apresentados.
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn">Cadastrar</button>
            </form>
        </section>

</body>

<?php require_once('./inc/footer.php') ?>