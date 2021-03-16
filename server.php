<?php 
 
 include('./modulo.php');


 $porcentageTotal = 0.0;


 if(isset($_POST)){
   $nombre = $_POST['nombre'];
   $email = $_POST['email'];
   $cum = $_POST['cum'];
   $bachillerato = $_POST['bachillerato'];
   $tipoInst = $_POST['tipoInst'];
   $sede = $_POST['sede'];
   $carrera = $_POST['carrera'];


   $matricula = validacion($carrera, $cum, $tipoInst, 75);
   $mensualidad = validacion($carrera, $cum, $tipoInst, 22);

   $resultado = [
     "estudiante"=>$nombre,
     "email"=>$email,
     "cum"=>$cum,
     "escuela"=>$bachillerato,
     "tipoInst"=>$tipoInst,
     "sede"=>$sede,
     "carrera"=>$carrera,
     "matricula"=> $matricula,
     "mensualidad"=>$mensualidad
   ];

   echo json_encode($resultado);
 }

?>