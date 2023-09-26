<?php
require_once './model/racasModel.php';

if($_POST){
    //inserir algo na bd (cadastrar)
    
    //Jeito Antigo
    //$nome = $_POST['nome'];
    
    //Jeito Novo
    $raca = new racasModel();
    $raca->setNome($_post['nome']);
    $raca->setDescricao($_post['descricao']);
    $raca->setFaixaPeso($_post['faixaPeso']);
    $raca->setFaixaPreco($_post['faixaPreco']);
    $total = $raca->insert();

    if($total == 1){
        header('location:cadastrarRacasPage.php?cod=success');
    }else{
        header('location:cadastrarRacasPage.php?cod=error');
    }

}else if($_REQUEST){ 
    //editar algo na bd ou excluir algo
}else{
    //selecionar algo na bd
    loadAll();
}
/*
function insertNew($raca){
    $raca->insert($raca);
}
*/
function loadAll(){
    //Crio um objeto do tipo raças
    $racas = new racasModel();
    $racasList = $racas->loadAll();
    return $racasList;
}
function loadById($id){
    //Crio um objeto do tipo raças.
    $racas = new racasModel();
    //Executa o método para carregar por id.
    $racas->loadById($id);

    //retorna um objeto do tipo raças....
    return $racas;
}











