<?php 
/**
 * As declarações responsáveis pelas determinações das funções válidas e implementadas nas classes.
 * 
 * @package ARCHIVE ACTIONS
 */

interface ArchiveIf{
    /**
     * - O método irá capturar o caminho do arquivo pelo atributo "archive" dentro da estrutura que está instanciado e irá abrir uma leitura do mesmo,
     * com fins de retornar os valores existentes dentro para manipulação. Por fim, retorna esses valores já convertendo sua codificação "Json" para "PHP"
     * 
     */
    public function readInfo();

      /**
     * - O método irá introduzir informações dentro de um arquivo json informado. Essa informações serão convertidas em Json com tratamento para
     * identação. 
     * 
     * @var obj São os valores que serão introduzidos dentro do arquivo Json.
     */
    public function includeInfo($obj);

}


class Archive extends Values implements ArchiveIf {

    /**
     * @var string archive - A variável irá guardar a localização do arquivo que está sendo lido.
     * @var string key - Irá guardar a chave, o indíce responsável por quais informações serão filtradas e lidas pelos documentos a mais. A
     * chave é protegida para que a seu valor não seja ocasionalmente mudado em algum momento sem uma itensão real. 
     */
    protected $archive;
    protected $key = "accounts";

    public function readInfo(){
        $info = fopen($this->archive, 'r');
        return json_decode(stream_get_contents($info));

        fclose($info);
    }

    public function includeInfo($obj){
        $obj = json_encode($obj, JSON_PRETTY_PRINT);
        $info = fopen($this->archive, 'w');
        
        fwrite($info, $obj);
        fclose($info);
    }

    function __get($index){
        return $this->$index;
    }

    function __set($index, $value){
        $this->$index = $value;
    }
}
