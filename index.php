<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de unidades de medida informática</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <h1>Conversión de unidades de medida informática</h1>
    <br>
    <form name="form1" method="POST" action="Calcular.php">

        <p>Ingrese valor y seleccione la unidad a convertir: <input type="text" id="txtvalor" name="txtvalor">
        <select name="selmedidas">
            <option value="">Seleccione...</option>
            <option value="bit">Dígito binario</option>
            <option value="byte">Byte</option>
            <option value="kilo">Kilobyte</option>
            <option value="mega">Megabyte</option>
            <option value="giga">Gigabyte</option>
            <option value="tera">Terabyte</option>
        </select>
        </p>
        
        <p>Marque la unidad a la que desea convertir: </p>
        <p>
                <input type="radio" name="medidas" value="bit">Dígito binario
            <br><input type="radio" name="medidas" value="byte">Byte
            <br><input type="radio" name="medidas" value="kilo">Kilobyte
            <br><input type="radio" name="medidas" value="mega">Megabyte
            <br><input type="radio" name="medidas" value="giga">Gigabyte
            <br><input type="radio" name="medidas" value="tera">Terabyte
        </p>

        <p><input type="submit" name="btnCalcular" value="Calcular"></p> 
        <p><input type="reset" name="btnBorrar" value="Borrar"> </p>

    </form>
    
</body>
</html>