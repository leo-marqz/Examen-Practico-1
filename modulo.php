<?php

function porcentajeAumentoTotal($aumCarrera, $descCum, $descTipoInst)
{
  $total = $aumCarrera - ($descCum - $descTipoInst);
  return $total;
}

function totalPagar($costoOriginal, $porcentageAumento, $costoAdicional)
{
  $costoOriginalPorcentaje = $costoOriginal / 100;
  $totalPagar = ($costoOriginal + $costoAdicional) + ($costoOriginalPorcentaje * $porcentageAumento);
  return $totalPagar;
}


function validacion($carrera, $cum, $tipoInst, $costoOriginal){
  $porcentageTotal = 0.0;
  $totalPagar = 0.0;
  if($carrera == "Tecn. Ing. en Sistemas Informaticos"){
    if($cum > 7.0 && $cum < 8.0){
      if($tipoInst == "publica"){
       $porcentageTotal =  porcentajeAumentoTotal(40, 15, 5);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 25);
      }
      elseif($tipoInst == "privada"){
       $porcentageTotal =  porcentajeAumentoTotal(40, 15, 10);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 25);
      }
    }
    elseif($cum > 8.0 && $cum <= 9.0){
     if($tipoInst == "publica"){
       $porcentageTotal =  porcentajeAumentoTotal(40, 20, 5);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 25);
     }
     elseif($tipoInst == "privada"){
       $porcentageTotal =  porcentajeAumentoTotal(40, 20, 10);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 25);
     }
    }
    elseif($cum > 9.0 && $cum <= 10.0){
     if($tipoInst == "publica"){
       $porcentageTotal =  porcentajeAumentoTotal(40, 25, 5);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 25);
     }
     elseif($tipoInst == "privada"){
       $porcentageTotal =  porcentajeAumentoTotal(40, 25, 10);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 25);
     }
    }
  }

  if($carrera == "Tecn. Ing en Redes Informaticos"){
   if($cum > 7.0 && $cum < 8.0){
     if($tipoInst == "publica"){
       $porcentageTotal =  porcentajeAumentoTotal(80, 15, 5);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 35);
     }
     elseif($tipoInst == "privada"){
       $porcentageTotal =  porcentajeAumentoTotal(80, 15, 10);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 35);
     }
   }
   elseif($cum > 8.0 && $cum <= 9.0){
    if($tipoInst == "publica"){
     $porcentageTotal =  porcentajeAumentoTotal(80, 20, 5);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 35);
    }
    elseif($tipoInst == "privada"){
     $porcentageTotal =  porcentajeAumentoTotal(80, 20, 10);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 35);
    }
   }
   elseif($cum > 9.0 && $cum <= 10.0){
    if($tipoInst == "publica"){
     $porcentageTotal =  porcentajeAumentoTotal(80, 25, 5);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 35);
    }
    elseif($tipoInst == "privada"){
     $porcentageTotal =  porcentajeAumentoTotal(80, 25, 10);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 35);
    }
   }
 }

 if($carrera == "Tecn. Ing Civil"){
   if($cum > 7.0 && $cum < 8.0){
     if($tipoInst == "publica"){
       $porcentageTotal =  porcentajeAumentoTotal(20, 15, 5);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 20);
     }
     elseif($tipoInst == "privada"){
       $porcentageTotal =  porcentajeAumentoTotal(20, 15, 10);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 20);
     }
   }
   elseif($cum > 8.0 && $cum <= 9.0){
    if($tipoInst == "publica"){
     $porcentageTotal =  porcentajeAumentoTotal(20, 20, 5);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 20);
    }
    elseif($tipoInst == "privada"){
     $porcentageTotal =  porcentajeAumentoTotal(20, 20, 10);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 20);
    }
   }
   elseif($cum > 9.0 && $cum <= 10.0){
    if($tipoInst == "publica"){
     $porcentageTotal =  porcentajeAumentoTotal(20, 25, 5);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 20);
    }
    elseif($tipoInst == "privada"){
     $porcentageTotal =  porcentajeAumentoTotal(20, 25, 10);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 20);
    }
   }
 }

 if($carrera == "Tecn. Ing Electrica"){
   if($cum > 7.0 && $cum < 8.0){
     if($tipoInst == "publica"){
       $porcentageTotal =  porcentajeAumentoTotal(60, 15, 5);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 30);
     }
     elseif($tipoInst == "privada"){
       $porcentageTotal =  porcentajeAumentoTotal(60, 15, 10);
       $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 30);
     }
   }
   elseif($cum > 8.0 && $cum <= 9.0){
    if($tipoInst == "publica"){
     $porcentageTotal =  porcentajeAumentoTotal(60, 20, 5);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 30);
    }
    elseif($tipoInst == "privada"){
     $porcentageTotal =  porcentajeAumentoTotal(60, 20, 10);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 30);
    }
   }
   elseif($cum > 9.0 && $cum <= 10.0){
    if($tipoInst == "publica"){
     $porcentageTotal =  porcentajeAumentoTotal(60, 25, 5);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 30);
    }
    elseif($tipoInst == "privada"){
     $porcentageTotal =  porcentajeAumentoTotal(60, 25, 10);
     $totalPagar = TotalPagar($costoOriginal, $porcentageTotal, 30);
    }
   }
 }

 return $totalPagar;
}


?>