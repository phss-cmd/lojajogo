<?php 
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");

$nomejogos = $_POST ["nomejogo"];

if(nomeJogos($conn,$nomejogo)){
    header("location:../view/visuJogoNome.php");
}else{
    header("location:../view/visuJogoNome.php");
}
?>