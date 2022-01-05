<?php 

session_start();

// CALL VARS
require_once '../config/_vars.php';

// CALL DATABASE
require_once './value/_class.php';

// CALL DATABASE
require_once './archive/_class.php';

// CALL LIBARY
require_once '../libs/PHPMailer/Exception.php';
require_once '../libs/PHPMailer/OAuth.php';
require_once '../libs/PHPMailer/POP3.php';
require_once '../libs/PHPMailer/SMTP.php';
require_once '../libs/PHPMailer/PHPMailer.php';

// CALL ACCOUNT CLASS
require_once './account/_class.php';



/**
 * 
 * @package MAIL
 * 
 * Classe responsável pelas config e envios de mails.
 */

 require_once './mail/_class.php';

/**
 * @package LOGIN
 * 
 *  Classe responsável pelo tratamento de informações e validação para o login.
 */

require_once './login/_class.php';

if(isset($_POST['conectar'])):

    $login = new Login($_POST['login'], $_POST['password']);
    $result = $login->validate('./json/user.json');

    if($result != FALSE){       

        $_SESSION['usuario'] = $result;
        $_SESSION['usuario']->status = 'logado';

        header('location: '.ADMIN);
        
        // echo "<pre>";
        // print_r($_SESSION['usuario']);
        // echo "</pre>";
    }else{
        header('location: ../?login=invalid');
    };
   
endif;


/**
 * 
 * @package CREATE ACCOUNT
 * 
 *  Classe responsável pelo tratamento de informações e inclusão para criação de contas.
 */

 if(isset($_POST['adicionar'])):

    $user = array();
    
    $user['class'] = new Create();

    $result = $user['class']->createAcc('./json/user.json', $_POST);

    if($result != FALSE){
   
        $_SESSION['usuario'] = $result;
        $_SESSION['usuario']->status = 'logado';

        $mail = new Mail();

        $mail->__set('userSMTP', (object)[
            'host' => 'smtp.gmail.com',
            'user' => 'fernandesgamer25@gmail.com',
            'password' => 'Octavios3469@',
            'port' => '465',
        ]);
        
        $mail->__set('from', (object)[
            'name' => 'igor',
            'mail' => 'fernandesgamer25@gmail.com'
        ]);
        $mail->__set('to', [(object)[
            'name' => 'Company',
            'mail' => 'companymarketbr@gmail.com'
        ]]);
        $mail->__set('assunt', 'Analise de COVID');
        $mail->__set('message', $mail->scopoMail($result));
         
        $mail->SendMail();
    }else{
        header('location: ../');
    };

 endif;


 
/**
 * 
 * @package UPDATE ACCOUNT
 * 
 *  Classe responsável pelo tratamento de informações e inclusão para atualização de contas.
 */

if(isset($_POST['atualizar'])):

    $user = array();
    
    $user['class'] = new Create();

    $result = $user['class']->updateAcc('./json/user.json', $_POST);

    if($result != FALSE){



        $_SESSION['usuario'] = $result;
        $_SESSION['usuario']->status = 'logado';

        $mail = new Mail();

        $mail->__set('userSMTP', (object)[
            'host' => 'smtp.gmail.com',
            'user' => 'fernandesgamer25@gmail.com',
            'password' => 'Octavios3469@',
            'port' => '465',
        ]);
        
        $mail->__set('from', (object)[
            'name' => 'igor',
            'mail' => 'fernandesgamer25@gmail.com'
        ]);
        $mail->__set('to', [(object)[
            'name' => 'Company',
            'mail' => 'companymarketbr@gmail.com'
        ]]);
        $mail->__set('assunt', 'Analise de COVID');
        $mail->__set('message', $mail->scopoMail($result));
         
        $mail->SendMail();

        header('location: ../user.php?update=sucess');
    }else{
        header('location: ../user.php?update=failed');
    };

 endif;


/**
 * 
 * @see EXIT
 * 
 * - Comandos para retirar o usuário da seção atual e deslogar.
 */

if(isset($_GET['exit'])){

    session_destroy();

    header('location: ../');
}

/**
 * 
 * @see VALIDATE
 * 
 * - Comandos para consultar se o valor existe.
 */

if(isset($_POST['validate'])){
    $arc = new Archive();
    $arc->archive = './json/user.json';
    $info = $arc->readInfo();
    $key = $arc->key;

    $val = new Values();

    !isset($info->$key) ? $info = (object)[$key => array()] : $info->$key;
            
    if($val->keyValue($info->$key, (object)['cpf' => $_POST['cpf'], 'email' => $_POST['email']], ['cpf', 'email']) === TRUE){

        echo "Valor Válido";
    }else{
        echo "Valor inválido";
    }
}