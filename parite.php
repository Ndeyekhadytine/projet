<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parite</title>
</head>
<body>
    <!-- formulaire -->
    <form action="" method="POST">
        <label for="" >nombre</label>
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php
    $nombre= $_POST["number"];
    if($nombre%2==0){
        echo 'le nombre est paire';
    }

     else {
        echo'le nombre est impair';

    }
    ?>
    
</body>
</html>