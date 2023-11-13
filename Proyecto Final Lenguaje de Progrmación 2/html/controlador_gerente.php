<?php
if(!empty($_POST["Login"])){
if(empty($_POST["telefono"]) and empty($_POST["contraseña"])){
  echo("Los campos estan vacios");
}else{
  $telefono=$_POST["telefono"];
  $contraseña=$_POST["contraseña"];
  $sql=$conexion->query("SELECT * FROM gerente WHERE telefono='$telefono' AND contraseña='$contraseña'");
  if($datos=$sql->fetch_object()){
    header('location:gerente.html');
  }else{
    echo("Acesso denegado");
  }
}
}
?>