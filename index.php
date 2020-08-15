<?php 
require_once('./Tateti.php');


do{
$juego = new Tateti();


    do {
        echo "Enter the value of the row and fill in, in that order, where you want to play X: ";
        echo "\n";
        $numFil=readline();
        $numCol=readline();

        while(!$juego->play($numFil, $numCol,'X')){
            echo "The chosen location is already occupied, choose another row and column for X: ";
            echo "\n";
            $juego -> display();
            echo "\n";
            $numFil=readline();
            $numCol=readline();

        }

        echo "\n";
        $juego->display();

        if($juego->endTheGame()==false && $juego->tie()==false){
            echo "Enter the value of the row and fill in, in that order, where you want to play O: ";
            echo "\n";
            $numFil=readline();
            $numCol=readline();

            while (!$juego->play($numFil, $numCol, 'O')) {
                echo "The chosen location is already occupied, choose another row and column: ";
                echo "\n";
                $juego -> display();
                echo "\n";
                $numFil=readline();
                $numCol=readline();
            }

            echo "\n";
            $juego->display();
        }


    }while($juego->endTheGame()==false && $juego->tie()==false);


    if($juego->winner('X')){
        echo "\n Congratulations X!, you have won! \n";
    }
    if($juego->winner('O')){
        echo "\n Congratulations O!, you have won! \n";
    }
    if ($juego->tie()) {
        echo "\n The game is tied. \n";
    }

    echo "\n If you want to keep playing write 'y', otherwise write any other letter: ";
    $validate = readline();

    if (strtolower($validate) === 'y') {
        $refresh = true;
    }else $refresh = false;

}while($validate);