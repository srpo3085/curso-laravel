<?php

class PersonalController extends BaseController{
  
  public function getRegistrar($tipo){
  
    if($tipo=="medico"){
      return View::make('registro.medico');
    }else if($tipo=="enfermera"){
      return View::make('registro.enfermera');
    }else if($tipo=="paciente"){
      return View::make('registro.paciente');
    }else{
      echo "error";
    }
  }
  
  public function getEditar(){
    echo "estoy editandi...";
  }
  public function getEliminar(){
    echo "estoy editandi...";
  }
  
}

