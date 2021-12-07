<?php

 require_once '../core/Conn.core.php';


if (isset($_POST['cadastrar'])) {
    
   $nome= $_POST['nome'];
   $descricao= $_POST['descricao'];
   $categoria= $_POST['categoria'];
   $preco= $_POST['preco'];

   $sql = crud::inserir($nome, $descricao, $categoria, $preco);


   if($sql->execute()){
       echo 'sucess';
       header('Location: ../pages/inicial.php');
   }else{
    echo 'error';
    header('Location: ../pages/inicial.php');
   }
}









