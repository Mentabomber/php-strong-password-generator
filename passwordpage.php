<?php   
    include 'functions.php';
    include 'index.php';
    session_start();
    echo '<span> La tua password è: ';
    echo $_SESSION['password'];
    echo '</span>';


        // echo var_dump($generatedPsw);
        // if(!empty($_SESSION['password'])){
        //     $generatedPsw =  rngPsw($pswLength);
        //     foreach ($generatedPsw as $character) {
        //         echo $character;
        //     };
        // }
        
          