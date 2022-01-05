<div class="container-fluid covid">
    <div class="row covid_content">
        <div class="col-12 covid_content-column">
            <div class="container">
                <div class="row covid_development">
                    <div class="col-12 covid_development-column">
                        <div class="covid_development-exit">
                            <a href="./system/load.php?exit">SAIR (Exit)</a>
                        </div>
                        <div class="covid_development-title">
                            <h1>OBRIGADO POR PARTICIPAR DESTA PESQUISA.</h1>
                        </div>
                        <div class="covid_development-subtitle">
                            <p>Agora fique atento! Entraremos em contato por uma das vias. <br> Além disso, mantenha seus dados sempre atualizados.</p>
                        </div>
                       <div class="covid_development-box">
                           <div class="covid_development-box--form">
                                <form action="./system/load.php" class="covid_development-form" method="POST">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                            <label for="nome">Nome</label><br>
                                                <input type="text" name="nome" id="nome" class="w-100" value="<?= $_SESSION['usuario']->user->nome ?>"> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="cpf">CPF</label><br>
                                                <input type="text" name="cpf" id="cpf" class="w-100" value="<?= $_SESSION['usuario']->user->cpf ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="telefone">Telefone</label><br>
                                                <input type="text" name="telefone" id="telefone" class="w-100" value="<?= $_SESSION['usuario']->user->telefone ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="email">E-mail</label><br>
                                                <input type="email" name="email" id="email" class="w-100" value="<?= $_SESSION['usuario']->user->email ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="password">Senha</label><br>
                                                <input type="text" name="password" id="password" class="w-100" value="<?= $_SESSION['usuario']->user->acess->password ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Dores no Corpo <br> <i>(Body Pain)</i>  </b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="dores_corpo" id="dores-corpo-s"  
                                                        <?php $index = 'dores_corpo';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="dores-corpo-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="dores_corpo" id="dores-corpo-n"  
                                                        <?php $index = 'dores_corpo';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="não" id="dores-corpo-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Tosse <br> <i>(Cough)</i></b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="tosse" id="tosse-s" 
                                                        <?php $index = 'tosse';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="tosse-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="tosse" id="tosse-n" 
                                                        <?php $index = 'tosse';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="tosse-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Coriza <br> <i>(Runny Nose)</i></b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="coriza" id="coriza-s"
                                                        <?php $index = 'coriza';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="coriza-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="coriza" id="coriza-n" 
                                                        <?php $index = 'coriza';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="coriza-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Falta de ar <br> <i>(Shortness of Breathe)</i> </b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="falta_ar" id="falta-ar-s" 
                                                        <?php $index = 'falta_ar';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="falta-ar-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="falta_ar" id="falta-ar-n" 
                                                        <?php $index = 'falta_ar';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="falta-ar-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Perda de olfato <br> <i>(Loss of Smell)</i> </b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="olfato" id="olfato-s"
                                                        <?php $index = 'olfato';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="olfato-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="olfato" id="olfato-n" 
                                                        <?php $index = 'olfato';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="olfato-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Perda de paladar <br> <i>(Loss of Taste)</i></b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="paladar" id="paladar-s"
                                                        <?php $index = 'paladar';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="paladar-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="paladar" id="paladar-n" 
                                                        <?php $index = 'paladar';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="paladar-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Dor de garganta <br> <i>(Sore Throat)</i></b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="garganta" id="garganta-s" 
                                                        <?php $index = 'garganta';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="garganta-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="garganta" id="garganta-n" 
                                                        <?php $index = 'garganta';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="garganta-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Fraqueza <br> <i>(Weakness)</i></b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="fraqueza" id="fraqueza-s"
                                                        <?php $index = 'fraqueza';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="fraqueza-n">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="fraqueza" id="fraqueza-n" 
                                                        <?php $index = 'fraqueza';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="fraqueza-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Febre <br> <i>(Fever)</i></b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="febre" id="febre-s" 
                                                        <?php $index = 'febre';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="febre-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="febre" id="febre-n" 
                                                        <?php $index = 'febre';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="febre-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Espirros <br> <i>(Sneezes)</i></b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="espirro" id="espirro-s" 
                                                        <?php $index = 'espirro';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="espirro-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="espirro" id="espirro-n" 
                                                        <?php $index = 'espirro';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="espirro-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Calafrios <br> <i>(Chills)</i></b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="calafrios" id="calafrios-s" 
                                                        <?php $index = 'calafrios';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ? 'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="calafrios-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="calafrios" id="calafrios-n" 
                                                        <?php $index = 'calafrios';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="calafrios-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group-box text-center">
                                                <div class="form-title">
                                                    <a> <b>Diarréia <br> <i>(Diarrhea)</i> </b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="diarreia" id="diarreia-s" 
                                                        <?php $index = 'diarreia';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="diarreia-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="diarreia" 
                                                        <?php $index = 'diarreia';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="diarreia-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group-box text-center py-1">
                                                <div class="form-title">
                                                    <a> <b>Teve contato com alguém que teve os sintomas mencionados acima ?</b> </a>
                                                    <br>
                                                    <a> <b>Have you had contact with someone who had the symptoms mentioned above?</b></a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="contatos_sintomas" id="contatos-sintomas-s"
                                                        <?php $index = 'contatos_sintomas';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="contatos-sintomas-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="contatos_sintomas" id="contatos-sintomas-n" 
                                                        <?php $index = 'contatos_sintomas';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="contatos-sintomas-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group-box text-center py-1">
                                                <div class="form-title">
                                                    <a> <b>Temperatura corporal maior que 36,9º?</b> </a>
                                                    <br>
                                                    <a> <b>Body temperature greater than 36.9 ºC (98.42 ºF)?</b> </a>
                                                </div>
                                                <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input  d-block" type="radio" value="sim" name="temperatura" id="temperatura-s"
                                                        <?php $index = 'temperatura';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'sim' ?  'checked' : ' '  ?>>
                                                        <div>
                                                            <label class="form-check-label" for="temperatura-s">
                                                                Sim / Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mx-3 d-block">
                                                        <input class="form-check-input d-block" type="radio" value="não" name="temperatura" id="temperatura-n" 
                                                        <?php $index = 'temperatura';
                                                        echo $_SESSION['usuario']->sintomas->$index == 'não' ?  'checked' : ' '  ?>>
                                                        <label class="form-check-label" for="temperatura-n">
                                                            Não / No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-btn mb-4">
                                        <button type="submit" class="btn btn-success" name="atualizar">ATUALIZAR (Update)</button>
                                    </div>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>