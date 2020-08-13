<?php 
require_once('./Tateti.php');

$juego = new Tateti();


do {
    echo "Ingrese el valor de la fila y la colunma, en ese orden, donde desea jugar X: ";
    echo "\n";
    $numFilx=readline();
    echo "\n";
    $numColx=readline();

    while(!$juego->jugar($numFilx, $numColx,'X')){
        echo "Le ubicacion elegida ya esta ocupada, elija otra fila y columna para X: ";
        echo "\n";
        $juego -> mostrar();
        echo "\n";
        $numFilx=readline();
        echo "\n";
        $numColx=readline();

    }

    $juego->jugar($numFilx, $numColx,'X');
    echo "\n";
    $juego->mostrar();

    if($juego->gano()==false && $juego->empate()==false){
        echo "Ingrese el valor de la fila y la colunma, en ese orden, donde desea jugar O: ";
        echo "\n";
        $numFilO=readline();
        echo "\n";
        $numColO=readline();

        while (!$juego->jugar($numFilO, $numColO, 'O')) {
            echo "Le ubicacion elegida ya esta ocupada, elija otra fila y columna: ";
            echo "\n";
            $juego -> mostrar();
            echo "\n";
            $numFilx=readline();
            $numColx=readline();
        }
        $juego->jugar($numFilx, $numColx, 'O');
        echo "\n";
        $juego->mostrar();
    }


}while($juego->gano()==false && $juego->empate()==false);

if($juego->ganoX()){
    echo "\n Felicidades X!, has ganado! \n";
}
if($juego->ganoO()){
    echo "\n Felicidades O!, has ganado! \n";
}
if ($juego->empate()) {
    echo "\n El juego ha quedado empatado. \n";
}