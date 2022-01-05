<main>
    <div class="container-fluid covid">
        <div class="row covid_content">
            <div class="col-12 covid_content-column">
                <div class="container">
                    <div class="row covid_development">
                        <div class="col-12 covid_development-column">
                            <div class="covid_development-box">
                                <div class="covid_development-box--form">
                                    <div class="covid_development-box--form-item">
                                        <div class="form-validate">
                                            <span data-alert='cpf'></span>
                                            <span data-alert='email'></span>
                                        </div>
                                        <form action="./create.php" id="cadastro" <?php if(isset($_GET['create'])): ?>  class="active" <?php endif; ?> style="opacity: 0;" method="POST">
                                            <div class="form-title">
                                                 <h5>FAÇA UM TESTE GRATUITO E VEJA OS RESULTADOS:</h5>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" name="nome" id="nome" placeholder=" " value=""> 
                                                        <label for="nome">Insira o seu nome</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" name="cpf" id="cpf" class="js-input-cpf" placeholder=" " value="">
                                                        <label for="cpf">Insira o seu CPF</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" name="telefone" id="telefone" class="js-input-tel" placeholder=" " value="">
                                                        <label for="telefone">Insira o seu telefone</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" placeholder=" " value="">
                                                        <label for="email">Insira o seu E-mail</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password" placeholder=" " value="">
                                                        <label for="password">Insira uma Senha</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="password" name="password_confirm" id="password_confirm" placeholder=" " value="">
                                                        <label for="password_confirm">Confirme sua Senha</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-btn">
                                                <button type="submit" class="disabled" name="adicionar" disabled>COMEÇAR</button>
                                            </div>
                                            <div class="form-alert">
                                                <a data-action="login">Já é cadastrado? Clique aqui</a>
                                            </div>
                                        </form>
                                        <form action="./system/load.php" <?php if(!isset($_GET['create'])): ?>  class="active" <?php endif; ?> id="login" method="POST">
                                            <div class="form-title">
                                                <h5>CONECTE-SE E VEJA OS RESULTADOS:</h5>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input type="email" name="login" id="login" placeholder=" " value="" required>
                                                        <label for="login">Insira o seu E-mail/User</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password" placeholder=" " value="" required>
                                                        <label for="password">Insira a sua Senha</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-btn">
                                                <button type="submit" name="conectar">ACESSAR</button>
                                            </div>
                                            <div class="form-alert">
                                                <a data-action="cadastro">Não é cadastrado? Clique aqui</a>
                                            </div>

                                            <div class="alert-login">
                                                <span></span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="covid_development-box--form-item">
                                        <div class="covid_development-box--form-illustration">
                                            <div class="covid_development-box--form-illustration-img">
                                                <img src="<?= ROOT.'img/gif/family-illustration.gif'; ?>" alt="family illustration">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>