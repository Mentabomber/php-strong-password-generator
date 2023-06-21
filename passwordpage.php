<?php   
    include 'functions.php';
    
    echo '<span> La tua password è: ';
    foreach ($_SESSION['password'] as $character) {
    echo $character;
}
echo '</span>';


        // echo var_dump($generatedPsw);
        // if(!empty($_SESSION['password'])){
        //     $generatedPsw =  rngPsw($pswLength);
        //     foreach ($generatedPsw as $character) {
        //         echo $character;
        //     };
        // }
        
          