<?php
    $personajes = [["id" => 'img1', "nombre" => "Lord FarkCua","descripcion" => 'Es un señor que se quiso casar con la novia del prota', "categoria" => 'Villano'],
                    ["id" => 'img2', "nombre" => "Papucho","descripcion" => 'Es la novia de Santos', "categoria" => 'Extra'],
                    ["id" => 'img3', "nombre" => "Shrek","descripcion" => 'Es el protagonista que sale', "categoria" => 'Protagonista'],
                    ["id" => 'img4', "nombre" => "Burro","descripcion" => 'Es el amigo del protagonista', "categoria" => 'Protagonista'],
                    ["id" => 'img5', "nombre" => "Jenjibre","descripcion" => 'el amigo galleta del protagonista', "categoria" => 'Extra']];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrek</title>
</head>
<body>
    <!-- Mostrando los personajes -->
    <?php foreach($personajes as $i => $item ):?>
        <h3>Nombre: <?=$item['nombre'] ?></h3>
        <img style="height: 150px;" src="./images/<?= $item['id']?>.jpg" alt="">
        <h3>descripcion: <?=$item['descripcion'] ?></h3>
        <h3>categoria: <?=$item['categoria'] ?></h3>

    <?php endforeach ?>

</body>
</html>