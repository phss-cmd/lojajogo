<?php 

function inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,
$cpfusu,$cepusu,$numusu,$compleusu,$tipousu){
    $query= "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `tipousu`,
     `cpfusu`, `cepusu`, `numusu`, `compleusu`, `foneusu`) VALUES (NULL,
     '{$nomeusu} ', '{$emailusu}', '{$tipousu}', '{$cpfusu}', 
     '{$cepusu}', '{$numusu}', '{$compleusu}', '{$foneusu}')";

    $dados = mysqli_query ($conn,$query);
    return $dados;
}
function visuUsuarioNome($conn,$nomeusu){
    $query = "select * from tbusuario where nomeusu like '%{$nomeusu}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}

function visuUsuarioEmail($conn, $emailusu){
    $query = "select * from tbusuario where emailusu like '%{$emailusu}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
    }
function visuUsuarioCodigo($conn, $codigousu){
    $query = "select * from tbusuario where idusu = {$codigousu}";
    $resultado = mysqli_query($conn,$query);
    return $resultado;
}

?>