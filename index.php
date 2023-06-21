<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        error_reporting(E_ALL);
    ?>
</head>
<body>
    <form >
        <label for="" name="length" >Lunghezza Password:</label>
        <input type="text" name="length">
        <input type="submit">
    </form>
</body>
</html>

<?php 

    
    function rngPsw($length){
            $allLettersArray = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9","'",'"',"£","$","%","&","/","(",")","=","?",":","^",",",".",];

            $charactersArray = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

            $capsCharactersArray = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

            $numbersArray = ["0","1","2","3","4","5","6","7","8","9"];

            $symbolsArray =["'",'"',"£","$","%","&","/","(",")","=","?",":","^",",","."];
            
            $psw = [];
            for ($i=0; $i < $length; $i++) { 
                
                // $psw[] = array_search(rand(0, 25), $charactersArray);
                // echo "<br>";
                // var_dump($psw);
                // echo "<br>";


                $psw[] = array_search(rand(0, 76), $allLettersArray);
                echo "<br>";
                var_dump(rand(0, 76));
                echo "<br>";
                var_dump($psw);
                echo "<br>";
            }
            
        return $psw;
    };


    $pswLength = $_GET["length"];
    var_dump($pswLength); 
    var_dump(rngPsw($pswLength));

    
?>