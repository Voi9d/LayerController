<?php
//This PHP folder is a PHP class

require_once 'ConexaoMysql.php';


class racasModel{

        //Attributes or Priorities
        protected $id;
        protected $nome;
        protected $descricao;
        protected $faixaPreco;
        protected $faixaPeso;

        //Accessor and modifier methods
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
    
        //Constructor Method
        public function __construct(){

    }

        //Specialist Method
        public function loadAll(){
            //Create a conection object
        $db = new ConexaoMysql();
        
        //Open connection with data base
        $db->Conectar();
        //Create Querry
        $sql = 'SELECT * FROM racas';
        //Execute Querry Methods
        $racasList = $db->Consultar($sql);
        
        //Desconnect
        $db->Desconectar();
        
        return $racasList;
        }
}


?>