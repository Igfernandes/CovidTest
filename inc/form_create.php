
<main>
    <div class="container-fluid register">
        <div class="row register_content">
            <div class="col-12 register_content-column">
                <div class="container">
                    <div class="row justify-content-center register_development">
                        <div class="col-12 register_development-column">
                            <form action="./system/load.php" class="register_development-form" method="POST">
                                <div class="form-title">
                                    <h4>RESPONDA AS PERGUNTAS SOBRE SEU SINTOMA ATUAL:</h4>
                                </div>
                                <div class="form-hidden">
                                    <input type="hidden" name="nome" id="nome" value="<?= $_POST['nome'] ?>"> 
                                    
                                    <input type="hidden" name="cpf" id="cpf" value="<?= $_POST['cpf'] ?>">
                                    
                                    <input type="hidden" name="telefone" id="telefone" value="<?= $_POST['telefone'] ?>">
                                    
                                    <input type="hidden" name="email" id="email" value="<?= $_POST['email'] ?>">
                                    
                                    <input type="hidden" name="password" id="password" value="<?= $_POST['password'] ?>">
                                    
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Dores no Corpo <br> <i>(Body Pain)</i>  </b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="dores-corpo" id="dores-corpo-s">
                                                    <div>
                                                        <label class="form-check-label" for="dores-corpo-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="dores-corpo" id="dores-corpo-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="tosse" id="tosse-s">
                                                    <div>
                                                        <label class="form-check-label" for="tosse-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="tosse" id="tosse-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="coriza" id="coriza-s">
                                                    <div>
                                                        <label class="form-check-label" for="coriza-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="coriza" id="coriza-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="falta-ar" id="falta-ar-s">
                                                    <div>
                                                        <label class="form-check-label" for="falta-ar-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="falta-ar" id="falta-ar-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="olfato" id="olfato-s">
                                                    <div>
                                                        <label class="form-check-label" for="olfato-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="olfato" id="olfato-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="paladar" id="paladar-s">
                                                    <div>
                                                        <label class="form-check-label" for="paladar-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="paladar" id="paladar-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="garganta" id="garganta-s">
                                                    <div>
                                                        <label class="form-check-label" for="garganta-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="garganta" id="garganta-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="fraqueza" id="fraqueza-s">
                                                    <div>
                                                        <label class="form-check-label" for="fraqueza-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="fraqueza" id="fraqueza-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="febre" id="febre-s">
                                                    <div>
                                                        <label class="form-check-label" for="febre-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="febre" id="febre-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="espirro" id="espirro-s">
                                                    <div>
                                                        <label class="form-check-label" for="espirro-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="espirro" id="espirro-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="calafrios" id="calafrios-s">
                                                    <div>
                                                        <label class="form-check-label" for="calafrios-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="calafrios" id="calafrios-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="diarreia" id="diarreia-s">
                                                    <div>
                                                        <label class="form-check-label" for="diarreia-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="diarreia" id="diarreia-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="contatos-sintomas" id="contatos-sintomas-s">
                                                    <div>
                                                        <label class="form-check-label" for="contatos-sintomas-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="contatos-sintomas" id="contatos-sintomas-n" checked>
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
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="temperatura" id="temperatura-s">
                                                    <div>
                                                        <label class="form-check-label" for="temperatura-s">
                                                            Sim / Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="temperatura" id="temperatura-n" checked>
                                                    <label class="form-check-label" for="temperatura-n">
                                                        Não / No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="form-btn mb-4">
                                    <button type="submit" class="btn btn-success" name="adicionar">Enviar (Send)</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>