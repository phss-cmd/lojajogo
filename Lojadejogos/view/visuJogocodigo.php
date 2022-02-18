<?php  
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");
?>

<div class="centroform">
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="codigojogo" placeholder="Código">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Gênero</th>
      <th scope="col">Studio</th>
    </tr>
  </thead>
  <tbody>
  <?php
$codigojogo = isset($_POST["codigoJogo"])? $_POST["codigoJogo"] : "";
if($codigojogo){
$dado = codigoJogos($conn,$codigojogo);

foreach($dado as $codigoJogos):
?>
    <tr>
      <th scope="row"><?=$codigoJogos["idjogo"]?></th>
      <td><?=$codigoJogos["nomejogo"]?></td>
      <td><?=$codigoJogos["valorjogo"]?></td>
      <td><?=$codigoJogos["generojogo"]?></td>
      <td><?=$codigoJogos["datalancamentojogo"]?></td>
      <td><?=$codigoJogos["studiojogo"]?></td>
    </tr>
<?php  
endforeach;
}
?>
  </tbody>
</table>
</div>
