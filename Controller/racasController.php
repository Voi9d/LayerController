<?php
require_once './model/ConexaoMysql.php';

if($_POST){

}else if($_REQUEST){

}

function carregarDados(){
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
?>