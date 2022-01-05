<?php 
/**
 * As declarações responsáveis pelas determinações das funções para manusear informações dentro do arquivo .json responsável por armazenar
 * os dados dos usuários.
 * 
 * @package CREATE ACTIONS
 */


interface interCreate{

      /**
     * - O método pega as informações recuperadas e trata para que um objeto seja criado seguindo o modelo padrão de informações, conforme
     * é necessário pro sistema reconhecer na futura captura. 
     * 
     * @var arr É os valores recuperados do formulário.
     */
    public function processAcc($arr);

     /**
     * - O método irá tratar as informações, fazer as verificações com os métodos complementares e por fim adicionar as informações novas
     * dentro do arquivo ".json" responsável por armazenar as informações. 
     * 
     * @var arch É a localização do arquivo referente onde guarda as informações. 
     * @var arr É os valores recuperados do formulário.
     */
    public function createAcc($arch, $arr);

      /**
     * - O método irá tratar as informações, fazer as verificações com os métodos complementares e por fim atualizar as informações
     * dentro do arquivo ".json" responsável por armazenar as informações. 
     * 
     * @var arch É a localização do arquivo referente onde guarda as informações. 
     * @var arr É os valores recuperados do formulário.
     */
    public function updateAcc($arch, $arr);
}

class Create extends Archive implements interCreate{

    public function processAcc($arr){
        $trat = (object) [
            'user' => (object) ['acess' => (object) []],
            'sintomas' => (object) [],
        ];
        $x = 0;
        
        foreach($arr as $index => $value){
            if($index != 'password' && $index != 'adicionar' && $index != 'atualizar' ){
                if($x < 4){
                    $trat->user->$index = $value;
                }else{
                    $index = str_replace('-', '_', $index);
                    $trat->sintomas->$index = $value;
                }
                $x++;
            };  
        }
        
        date_default_timezone_set('America/Sao_Paulo');

        $trat->user->acess->username = $trat->user->email;
        $trat->user->acess->password = $arr['password'];
        $trat->data_rgts = date('d/m/Y h:i:s', time());
        $trat->user->acess->last_acess = date('d/m/Y h:i:s',  time());
        
        return $trat;
     
    }


    public function createAcc($arch, $arr){
        $this->archive = empty($arch) ? '../json/user.json' : $arch;
        $info = $this->readInfo();
        $key = $this->key;
        $trat = $this->processAcc($arr);

        !isset($info->$key) ? $info = (object)[$key => array()] : $info->$key;
            
        if($this->keyValue($info->$key, $trat->user, ['cpf', 'email']) === TRUE){
            
            array_push($info->$key, $trat);
            
            $this->includeInfo($info);

            return $trat;
        }else{
            return FALSE;
        }
        
    }

    public function updateAcc($arch, $arr){
        $this->archive = empty($arch) ? '../json/user.json' : $arch;
        $info = $this->readInfo();
        $key = $this->key;
        $trat = $this->processAcc($arr);

        !isset($info->$key) ? $info = (object)[$key => array()] : $info->$key;

        $result = $this->keyValue($info->$key, $trat->user, ['cpf', 'email']);

        if($result !== TRUE){
           
            $info->$key = array_replace($info->$key, [$result => $trat]);
        
            $this->includeInfo($info);

            return $trat;
        }else{
            return FALSE;
        }

    }
}