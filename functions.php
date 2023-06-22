<?php 
    session_start();
    error_reporting(E_ALL);

    $pswLength = $_GET["length"];
    // $repetitionChoice = $_GET[""];
    $pswLettersChoice = $_GET["letters"];
    $pswCharactersChoice = $_GET["characters"];
    $pswSymbolsChoice = $_GET["symbols"];
    $pswNumbersChoice = $_GET["numbers"];


    function rngPsw($length){
            $allLettersArray = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9","'",'"',"£","$","%","&","/","(",")","=","?",":","^",",",".",];
                                // = [...$charactersArray, ...$charactersArray, ...$numbersArray, ...$symbolsArray];
            $charactersArray = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
                                // = range("a","z");
            $capsCharactersArray = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
                                // = range("A","Z");
            $numbersArray = ["0","1","2","3","4","5","6","7","8","9"];
                            // = range("0","9");
            $symbolsArray =["'",'"',"£","$","%","&","/","(",")","=","?",":","^",",","."];
                            // = [...range("!","/"),
                            //    ...range(":","@"),
                            //    ...range("[","`"),
                            //    ...range("{","~") ];

            if($pswLength === null || $pswLength === "") return;
            if ($charactersArray === null && $numbersArray === null && $symbolsArray === null) return;

            $selected = [];

            // if($pswLettersChoice == "on"){
            //     for ($i=0; $i < count($); $i++) { 
                    
            //     }
            // }


            $psw = [];
            for ($i=0; $i < $length; $i++) { 
                
                // $psw[] = array_search(rand(0, 25), $charactersArray);
                // echo "<br>";
                // var_dump($psw);
                // echo "<br>";

                $randInt = rand(0, count($allLettersArray) - 1);
                $psw[] = $allLettersArray[$randInt];
                
                // $psw[] = $allLettersArray[rand(0, 76)];
                // echo "<br>";
                // var_dump(rand(0, 76));
                // echo "<br>";
                // var_dump($psw);
                // echo "<br>";
            }
            
        return $psw;
    };

?>