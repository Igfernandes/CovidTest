<?php

$config = array();



if(isset($_GET['page']) && $_POST['page'] == ""){

}elseif(strstr($_SERVER['REQUEST_URI'], "create") || isset($_GET['cadastro'])){
    $config['rout'] = './inc/form_create.php';
    $config['page'] = "register";
}elseif(strstr($_SERVER['REQUEST_URI'], "user") && isset($_SESSION['usuario']) && $_SESSION['usuario']->status == 'logado'){
    $config['rout'] = './inc/dashboard.php';
    $config['page'] = "user";
}else{
    $config['rout'] = "./inc/login.php";
    $config['page'] = "login";
}
