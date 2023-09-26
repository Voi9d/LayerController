<?php
//#declare <stdlib.h>
require_once 'ConexaoMysql.php';
/**
 * Description of racasModel
 *
 * @author aluno
 */
class racasModel {

    //Atributes or Properties
    protected $id;
    protected $nome;
    protected $descricao;
    protected $faixaPreco;
    protected $faixaPeso;
    
    //Acessor (get) and modifier (set) methods
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getFaixaPreco() {
        return $this->faixaPreco;
    }

    public function getFaixaPeso() {
        return $this->faixaPeso;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setFaixaPreco($faixaPreco): void {
        $this->faixaPreco = $faixaPreco;
    }

    public function setFaixaPeso($faixaPeso): void {
        $this->faixaPeso = $faixaPeso;
    }

        
    //Constructor methods
    public function __construct() {
        
    }
    
    //Expert methods
    /*
    * Carrega a raça pelo indentificador único 
    */
    public function loadById($id) {
        
        //Criar um objeto de conexão
      $db = new ConexaoMysql();

      //Abrir conexão com banco de dados
      $db->Conectar();

      //Create Querry
      $sql = 'SELECT * FROM racas where id='.$id;
      //Executar método de consulta
      $resultList = $db->Consultar($sql);
    
      //Verify if return a database record  
      if($db->total == 1){
        //If returned, fill in the race properties
          foreach($resultList as $value){
            $this->id = $value['id'];
            $this->nome = $value['nome'];
            $this->descricao = $value['descricao'];
            $this->faixaPreco = $value['faixa_preco'];
            $this->faixaPeso = $value['faixa_peso'];
          }
      }
     
      //Desconectar do banco
      $db->Desconectar();
      
      return $resultList;
      
  }

  public function insert() {
        
    //Criar um objeto de conexão
  $db = new ConexaoMysql();

  //Abrir conexão com banco de dados
  $db->Conectar();

  //Create Querry
  $sql = 'INSERT INTO racas values(0, "'.$this->nome.'", "'.$this->descricao.'", "'.$this->faixaPeso.'", "'.$this->faixaPreco.'")';
  //Executar método inserção
  $db->Executar($sql);

  //Verify if return a database record  
  if($db->total == 1){
    //If returned, fill in the race properties
      foreach($resultList as $value){
        $this->id = $value['id'];
        $this->nome = $value['nome'];
        $this->descricao = $value['descricao'];
        $this->faixaPreco = $value['faixa_preco'];
        $this->faixaPeso = $value['faixa_peso'];
      }
  }
 
  //Desconectar do banco
  $db->Desconectar();
  
  return $db->total;
  
}

    public function loadAll() {
        
          //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Create Querry
        $sql = 'SELECT * FROM racas';
        //Executar método de consulta
        $resultList = $db->Consultar($sql);
       
        //Desconectar do banco
        $db->Desconectar();
        
        return $resultList;
        
    }
    
    

}
