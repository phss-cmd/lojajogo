<?php 
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");

$codigojogos = $_POST ["codigojogo"];

if(codigoJogos($conn,$codigojogo)){
    header("location:../view/visuJogocodigo.php");
}else{
    header("location:../view/visuJogoCodigo.php");
}
?>