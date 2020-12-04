<link rel="stylesheet" type="text/css" href="css/estilos.css">

<?php
if(isset($_POST["btnCalcular"])){

    require_once 'Binario.php';
    require_once 'Byte.php';
    require_once 'Kilobyte.php';
    require_once 'Megabyte.php';
    require_once 'Gigabyte.php';
    require_once 'Terabyte.php';

    $binario = new Binario();
    $byte = new Byte();
    $kilobyte = new Kilobyte();
    $megabyte = new Megabyte();
    $gigabyte = new Gigabyte();
    $terabyte = new Terabyte();

    $valor = $_POST["txtvalor"];

    $tipomedida = $_POST["selmedidas"];
    $opcion = $_POST["medidas"];

    switch($opcion){

        case "bit":
            $binario->setValor($valor);

            switch($tipomedida){

                case "byte":
                    echo "La conversión de Byte a Binario es: " . $binario->calcularByteABinario();
                break;

                case "kilo":
                    echo "La conversión de Kilobyte a Binario es: " . $binario->calcularKilobyteABinario();
                break;

                case "mega":
                    echo "La conversión de Megabyte a Binario es: " . $binario->calcularMegabyteABinario();
                break;

                case "giga":
                    echo "La conversión de Gigabyte a Binario es: " . $binario->calcularGigabyteABinario();
                break;

                case "tera":
                    echo "La conversión de Terabyte a Binario es: " . $binario->calcularTerabyteABinario();
                break;
                
                    default:
                    echo "Imposible calcular";
            }

        break;

        case "byte":
            $byte->setValor($valor);

            switch($tipomedida){

                case "bit":
                    echo "La conversión de Binario a Byte es: " . $byte->calcularBinarioAByte();
                break;

                case "kilo":
                    echo "La conversión de Kilobyte a Byte es: " . $byte->calcularKilobyteAByte();
                break;

                case "mega":
                    echo "La conversión de Megabyte a Byte es: " . $byte->calcularMegabyteAByte();
                break;

                case "giga":
                    echo "La conversión de Gigabyte a Byte es: " . $byte->calcularGigabyteAByte();
                break;

                case "tera":
                    echo "La conversión de Terabyte a Byte es: " . $byte->calcularTerabyteAByte();
                break;

                    default:
                    echo "Imposible calcular";
            }

        break;

        case "kilo":
            $kilobyte->setValor($valor);

            switch($tipomedida){

                case "bit":
                    echo "La conversión de Binario a Kilobyte es: " . $kilobyte->calcularBinarioAKilobyte();
                break;

                case "byte":
                    echo "La conversión de Byte a Kilobyte es: " . $kilobyte->calcularByteAKilobyte();
                break;

                case "mega":
                    echo "La conversión de Megabyte a Kilobyte es: " . $kilobyte->calcularMegabyteAKilobyte();
                break;

                case "giga":
                    echo "La conversión de Gigabyte a Kilobyte es: " . $kilobyte->calcularGigabyteAKilobyte();
                break;

                case "tera":
                    echo "La conversión de Terabyte a Kilobyte es: " . $kilobyte->calcularTerabyteAKilobyte();
                break;

                    default:
                    echo "Imposible calcular";
            }

        break;

        case "mega":
            $megabyte->setValor($valor);

            switch($tipomedida){

                case "bit":
                    echo "La conversión de Binario a Megabyte es: " . $megabyte->calcularBinarioAMegabyte();
                break;

                case "byte":
                    echo "La conversión de Byte a Megabyte es: " . $megabyte->calcularByteAMegabyte();
                break;

                case "kilo":
                    echo "La conversión de Kilobyte a Megabyte es: " . $megabyte->calcularKilobyteAMegabyte();
                break;

                case "giga":
                    echo "La conversión de Gigabyte a Megabyte es: " . $megabyte->calcularGigabyteAMegabyte();
                break;

                case "tera":
                    echo "La conversión de Terabyte a Megabyte es: " . $megabyte->calcularTerabyteAMegabyte();
                break;

                    default:
                    echo "Imposible calcular";
            }

        break;

        case "giga":
            $gigabyte->setValor($valor);

            switch($tipomedida){

                case "bit":
                    echo "La conversión de Binario a Gigabyte es: " . $gigabyte->calcularBinarioAGigabyte();
                break;

                case "byte":
                    echo "La conversión de Byte a Gigabyte es: " . $gigabyte->calcularByteAGigabyte();
                break;

                case "kilo":
                    echo "La conversión de Kilobyte a Gigabyte es: " . $gigabyte->calcularKilobyteAGigabyte();
                break;

                case "mega":
                    echo "La conversión de Megabyte a Gigabyte es: " . $gigabyte->calcularMegabyteAGigabyte();
                break;

                case "tera":
                    echo "La conversión de Terabyte a Gigabyte es: " . $gigabyte->calcularTerabyteAGigabyte();
                break;

                    default:
                    echo "Imposible calcular";
            }

        break;

        case "tera":
            $terabyte->setValor($valor);

            switch($tipomedida){

                case "bit":
                    echo "La conversión de Binario a Terabyte es: " . $terabyte->calcularBinarioATerabyte();
                break;

                case "byte":
                    echo "La conversión de Byte a Terabyte es: " . $terabyte->calcularByteATerabyte();

                case "kilo":
                    echo "La conversión de Kilobyte a Terabyte es: " . $terabyte->calcularKilobyteATerabyte();
                break;

                case "mega":
                    echo "La conversión de Megabyte a Terabyte es: " . $terabyte->calcularMegabyteATerabyte();
                break;

                case "giga":
                    echo "La conversión de Gigabyte a Terabyte es: " . $terabyte->calcularGigabyteATerabyte();
                break;


                    default:
                    echo "Imposible calcular";
            }

        break;

        default:
        echo "Opción incorrecta";

    }

}else{
    echo "Acesso no permitido.";
}

?>

<br><br>

<button onclick="location.href='index.php'">Regresar</button>