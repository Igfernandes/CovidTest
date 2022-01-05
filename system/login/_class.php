<?php

/**
 * As declarações responsáveis pelas determinações das funções válidas e implementadas nas classes.
 * 
 * @package LOGIN ACTIONS
 */

interface Validacao{

    /**
     * - Valida as informações de login para verficiar se será aprovado a entrada ou não do usuário. As informações são recuperadas de um arquivo ". 
     * Caso os dados sejam verdadeiros, ele retornará "TRUE", pois do contrário, ele retornará "FALSO".
     * 
     * @var archive É a localização do arquivo Json que terá as informações recuperadas. 
     */
    public function validate($archive);
}

class Login extends Archive implements Validacao{
    private $username =  NULL;
    private $password = NULL;
    public $acess = FALSE;

    function __construct ($login, $password){
        $this->username = $login;
        $this->password = $password;
    }


    public function validate($archive){
        $this->archive = empty($archive) ? '../json/user.json' : $archive;
        $dates = $this->readInfo();
        $key = $this->key;
        foreach($dates->$key as $value){
            if($value->user->acess->username == $this->__get(TRUE)['username'] && $value->user->acess->password == $this->__get(TRUE)['password'] ){
                return $value;
                break;
            }
        }

        return  $this->acess;
    }

    function __get($bool){
        if($bool == TRUE){
            return $this->cleanValue(["username" => $this->username, "password" => $this->password]);
        }
    }

}

?>