<?php $titulo_pagina = "Cadastro"; ?>
<?php require_once('./inc/head.php') ?>
<?php require_once('./inc/header.php') ?>


<body>

        <section class="section">
            <!-- <p>A colaboração gera o progresso de todos, por isso vamos nos conectar e ajudar quem precisa.</p> -->
            <img src="./assets/img/foto-conexao-projetodh.png" width="500" height="600px">
            <form class="col-md-6 form-cadastro">
                <h4>Faça seu cadastro xXXXxX </h4>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-cadastro" id="inputName" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-cadastro" id="inputSurname" placeholder="Sobrenome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control form-control-cadastro" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control form-control-cadastro" id="inputPassword4" placeholder="Senha">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control form-control-cadastro" id="inputCelular" placeholder="Celular">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" class="form-control form-control-cadastro" id="inputDataDeNascimento" placeholder="Nascimento">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-cadastro" id="inputcidade" placeholder="Cidade">
                    </div>
                    <div class="form-group col-md-6">
                        <select id="inputEstado" class="form-control form-control-cadastro">
                            <option selected>Estado...</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
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
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </section>

</body>

<?php require_once('./inc/footer.php') ?>