<?php
function usuarioOk($usuario, $contraseña) :bool {
  $respuesta=false;
  if (strlen($contraseña)>=8 && $contraseña==strrev($usuario)) {
    $respuesta=true;
  }  
   return $respuesta;    
}

function contarPalabras($texto) {   
   return str_word_count($texto,0);  
}


function contarLetras($texto) {  
    $respuesta=0;
    if ($texto!="") {   
        $texto=str_replace(" ", "",$texto);
        
        for ($i = 0; $i < strlen($texto); $i++) {
            $letra=substr($texto,$i,1);            
            if ($letra!="") {
                $numero=substr_count($texto, $letra);
                $texto=str_replace($letra, "",$texto);                
                $contador[$letra]= $numero; 
                if ($i==0) {
                    $maximo=$numero;
                    $respuesta=$letra;
                }
            }            
        } 
        foreach ($contador as $clave=> $value) {
            if ($value>$maximo) {
                $maximo=$value;
                $respuesta=$clave;
            }
        }       
    }      
    return $respuesta;
}

function contadorPalabrasMaxima($texto) {
    $resultado=0;
    if ($texto!="") {  
        $palabras=str_word_count($texto,1);
        $contador=array_count_values($palabras);  
        $maximo=0;
      foreach ($contador as $clave=> $value) {
          if ($value>$maximo) {
             $resultado=$clave;
             $maximo=$value;
          }
      }
    }    
    return $resultado;
}