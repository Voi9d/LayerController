<?php
require_once './model/racasModel.php';

if($_POST){
    //Insert something in database
}else if($_REQUEST){
    //Insert something in database or delete something
}else{
    //Select something in database
    loadAll();
}

function loadAll(){
    //Create an object of type races
    $racas = new racasModel();
    $racasList = $racas->loadAll();
    return $racasList;
}
?>