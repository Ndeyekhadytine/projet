<?php
$rayon = $_POST["number"];
$diametre = $rayon*2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1</title>
</head>
<body>
    <form action="" method="post">
        <label for=""> tapez le rayon : </label>

        <input type="text" placeholder="entrer le rayon" name="number">
        <button>valider</button>
    </form>
    <?php echo"le diametre est $diametre" ?>
</body>
</html>