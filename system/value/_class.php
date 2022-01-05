<?php 

/**
 * @package CLEAN FIELDS
 * 
 * A estrutura abaixo terá fins utilitários no projeto para limpeza de dados e informações. 
 * A idéia é serviço como class com sentido de abstratação para que haja henraça entre as demais do uso.
 */

interface interValues {
   
    /**
     * @var array $fields Irá trazer as informações para serem limpas, sendo o essas informações array que irá devolver exatamete o mesmo array 
     * com os índices e valores já existentes anteriormente.
     * 
     * - O Método recebe arrays que terão seus dados tratados para remover quaisquer restígios de tag "html" ou outros, com o próposito de armazenar
     * no projeto com instensões maliciosas.
     * 
     */
    public function cleanValue($fields);

    /**
     * - O Método percorre pela lista de cadastros(objetos) que é recuperado do arquivo JSON e verificar se os campos chaves já existem,
     * no caso, se eles já estão declarados para que não haja repetições. Caso encontre, ele irá retornar a posição dentro da lista dos 
     * usuários salvo, se não, ele apenas retorna "TRUE"
     * 
     * @var arr_old Lista de cadastros salvos que servem para percorrer e verificar. 
     * @var arr_new Objeto novo, com as informações que vão ser validadas.
     * @var key É as chaves, índices dos objetos que serão validados. 
     */
    public function keyValue($arr_old, $arr_new, $key);
}

class Values implements interValues{

    public function cleanValue($fields){
        $info = array();

        foreach($fields as $index => $value){
          $info[$index] = htmlentities(htmlspecialchars($value));
        }

        return $info;
    }
    
    public function keyValue($arr_old, $arr_new, $key){
       
        foreach($key as $x ){
            foreach($arr_old as $index => $y){
                 
                if($y->user->$x == $arr_new->$x){
                    return $index;
                }
                
            }
        }

        return TRUE;
    }

}