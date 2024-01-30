<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Tarea 1</title>
</head>
<body>

    <form method ="post" action="">
        <h1>Bienvenid@</h1>
        <div class="input-wrapper">
            <img class="input-icon" src="./img/name.svg" alt="Nombre">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        </div>

        <div class="input-wrapper">
            <img class="input-icon" src="./img/email.svg" alt="Email">
            <input type="text" id="email" name="email" placeholder="Email">
        </div>

        <input class="btn" name="registro" type="submit" value="Enviar">


    </form>

    <?php
        include("registro.php");
    ?>
    
    
</body>
</html>


