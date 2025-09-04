<?php  
    # CONVERSOR DE TEMPERATURA
    if($_POST){
        $dato = $_POST['temperatura'];
        if(!$grados = $_POST['tipo']){
            echo "<p style='color: red;'> Error, debe de seleccionar la temperatura a convertir</p>";
        }
        else{
            echo $dato;
            echo $grados;

            if($grados == 'Grados C'){
                $calculo = Far($dato);
                echo "<h3 style='color: green;'> $dato C  ==> $calculo F </h3>" ;
            } else {
                $calculo = CEL($dato);
                echo "<h3 style='color: green;'> $dato F  ==> $calculo C </h3>" ;
            }
            
        }
    }

    function Far($temp){
        return ($temp * (9/5)) + 32;
    }

    function Cel($temp){
        return ($temp - 32) * (5/9);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPERATURA </title>
</head>
<body>
    <form action="" method="post">
        <label for="temperatura">Ingrese la temperatura</label>
        <div>
            <input type="text" name="temperatura" id="temperatura">
        </div>
        <div>
            <label for="tipo">Seleccione a que desea convertir</label>
        </div>
        <div>
            <input type="radio" name="tipo" value="Grados C" > grados C 
            <input type="radio" name="tipo" value="Grados F" > grados F
        </div>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>