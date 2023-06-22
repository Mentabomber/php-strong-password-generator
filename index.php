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
        <label for="length">Lunghezza Password:</label>
        <input type="text" name="length">
        <br>
        <span>Consenti ripetizioni di uno o più caratteri: </span>
        <input type="radio" name="repetition_si" value="Si" id="repetitionChoice1">
        <label for="repetitionChoice1">si</label>
        <input type="radio" name="repetition_no" value="No" id="repetitionChoice2">
        <label for="repetitionChoice2">no</label>
        <br>
        <input type="text" name="numbers">
        <label for="numbers">Numeri</label>
        <br>
        <input type="text" name="letters">
        <label for="letters">Lettere</label>
        <br>
        <input type="text" name="symbols">
        <label for="symbols">Simboli</label>
        <br>
        <input type="submit">

    
        <!-- <span>La tua password è:  -->
            <?php  
                session_start();
                include 'functions.php';

                $generatedPsw =  rngPsw($pswLength);
                // foreach ($generatedPsw as $character) {
                //     echo $character;
                // }
                // var_dump($generatedPsw);
                if ($generatedPsw !== []) {
                    
                    header('Location: passwordpage.php');
                }
                $_SESSION['password'] = $generatedPsw;
             ?>
        <!-- </span> -->
        
    </form>
</body>
</html>


        
    