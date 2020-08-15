<?php

class Tateti {
 private $board = [['_','_','_'],['_','_','_'],['_','_','_']];

public function display(){
  $string='';
  for ($fil=0; $fil < 3; $fil++) {
    for ($col=0; $col < 3; $col++) { 
        $string .= $this->board[$fil][$col]." ";
    }
    $string.="\n";
  }
  echo $string;
}

public function jugarX(int $fila, int $col){
  $this->play($fila,$col,'X');
}

public function jugarO(int $fila, int $col){
  $this->play($fila,$col,'O');
  }

public function play(int $fila, int $col, string $signo){
  if($this->board[$fila][$col] === '_'){
      $this->board[$fila][$col] = $signo;
      return true;
  }
  return false;
}

public function winner(String $signo){

  if ($this->board[0]===[$signo,$signo,$signo]) {
    return true;
  }
  if ($this->board[1]===[$signo,$signo,$signo]) {
    return true;
  }
  if ($this->board[2]===[$signo,$signo,$signo]) {
    return true;
  }
  if($this->board[0][0]===$signo && $this->board[1][0]===$signo && $this->board[2][0]===$signo){
    return true;
  }
  if($this->board[0][1]===$signo && $this->board[1][1]===$signo && $this->board[2][1]===$signo){
    return true;
  }
  if($this->board[0][2]===$signo && $this->board[1][2]===$signo && $this->board[2][2]===$signo){
    return true;
  }
  if($this->board[0][0]===$signo && $this->board[1][1]===$signo&& $this->board[2][2]===$signo){
    return true;
  }
  if($this->board[0][2]===$signo && $this->board[1][1]===$signo&& $this->board[2][0]===$signo){
    return true;
  }
  return false;
}

public function endTheGame(){

  if ($this->winner('X')) {
    return true;
  }
  if ($this->winner('O')) {
    return true;
  }
    return false;
}

public function tie(){

  if($this->endTheGame()==false && !in_array('_',$this->board[0]) &&
  !in_array('_',$this->board[1]) && !in_array('_',$this->board[2])){
    return true;
  }
  return false;
}


}