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

        <!-- <span>La tua password è:  -->
            <?php  
                session_start();
                include 'functions.php';

                $generatedPsw =  rngPsw($pswLength);
                foreach ($generatedPsw as $character) {
                    echo $character;
                }
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


        
    