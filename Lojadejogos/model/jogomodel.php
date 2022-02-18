<?php 

function inserirJogo($conn,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo){
    $query= "INSERT INTO `tbjogos` (`idjogo`, `nomejogo`, `valorjogo`, `generojogo`,
     `qtdjogo`, `datalancamentojogo`, `studiojogo`) VALUES (NULL,
     '{$nomejogo} ', '{$valorjogo}', '{$generojogo}', '{$qtdjogo}', 
     '{$datalancamentojogo}', '{$studiojogo}')";

    $dados = mysqli_query ($conn,$query);
    return $dados;
}
function nomeJogos($conn,$nomejogo){
    $query = "select * from tbjogos where nomejogo like '%{$nomejogo}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}







?>