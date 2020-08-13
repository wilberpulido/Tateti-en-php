<?php

class Tateti {
 private $tablero = [['_','_','_'],['_','_','_'],['_','_','_']];

public function mostrar(){
  $string='';
  for ($fil=0; $fil < 3; $fil++) {
    for ($col=0; $col < 3; $col++) { 
        $string .= $this->tablero[$fil][$col]." ";
    }
    $string.="\n";
  }
  echo $string;
}

public function jugarX(int $fila, int $col){
  $this->jugar($fila,$col,'X');
}

public function jugarO(int $fila, int $col){
  $this->jugar($fila,$col,'O');
  }

public function jugar(int $fila, int $col, string $signo){
  if($this->tablero[$fila][$col] === '_'){
      $this->tablero[$fila][$col] = $signo;
      return true;
  }
  return false;
}

public function ganoX(){

  if ($this->tablero[0]===['X','X','X']) {
    return true;
  }
  if ($this->tablero[1]===['X','X','X']) {
    return true;
  }
  if ($this->tablero[2]===['X','X','X']) {
    return true;
  }
  if($this->tablero[0][0]==='X' && $this->tablero[1][0]==='X' && $this->tablero[2][0]==='X'){
    return true;
  }
  if($this->tablero[0][1]==='X' && $this->tablero[1][1]==='X' && $this->tablero[2][1]==='X'){
    return true;
  }
  if($this->tablero[0][2]==='X' && $this->tablero[1][2]==='X' && $this->tablero[2][2]==='X'){
    return true;
  }
  if($this->tablero[0][0]==='X' && $this->tablero[1][1]==='X'&& $this->tablero[2][2]==='X'){
    return true;
  }
  if($this->tablero[0][2]==='X' && $this->tablero[1][1]==='X'&& $this->tablero[2][0]==='X'){
    return true;
  }
  return false;
}

public function ganoO(){

    if ($this->tablero[0]===['O','O','O']) {
      return true;
    }
    if ($this->tablero[1]===['O','O','O']) {
      return true;
    }
    if ($this->tablero[2]===['O','O','O']) {
      return true;
    }
    if($this->tablero[0][0]==='O' && $this->tablero[1][0]==='O' && $this->tablero[2][0]==='O'){
      return true;
    }
    if($this->tablero[0][1]==='O' && $this->tablero[1][1]==='O' && $this->tablero[2][1]==='O'){
      return true;
    }
    if($this->tablero[0][2]==='O' && $this->tablero[1][2]==='O' && $this->tablero[2][2]==='O'){
      return true;
    }
    if($this->tablero[0][0]==='O' && $this->tablero[1][1]==='O'&& $this->tablero[2][2]==='O'){
      return true;
    }
    if($this->tablero[0][2]==='O' && $this->tablero[1][1]==='O'&& $this->tablero[2][0]==='O'){
      return true;
    }
    return false;
  }

public function gano(){
  if ($this->ganoX()) {
    return true;
  }
  if ($this->ganoO()) {
    return true;
  }
    return false;
}

public function empate(){
  if($this->gano()==false && !in_array('_',$this->tablero[0]) &&
  !in_array('_',$this->tablero[1])&& !in_array('_',$this->tablero[2])){
    return true;
  }
  return false;
}


}