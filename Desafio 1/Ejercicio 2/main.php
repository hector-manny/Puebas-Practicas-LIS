<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <br><br>
    <h1>Calculadora de prestamos</h1><br>
    <div class="card" style="padding: 15px !important;">
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <label for="tipo">Seleccione el periodo: </label>
    <select name="tipo" id="tipo">
        <option value="1">simple</option>
        <option value="2">compuesto</option>
    </select><br><br>
    <label for="date">Ingrese la fecha de desembolso:</label>
    <input type="date" name="date" id="date"><br><br>
    <label for="monto">Ingrese el monto:</label>
    <input type="number" step="0.01" name="num1" id="num1"><br><br>
    <label for="periodo">Seleccione el periodo: </label>
    <select name="periodo" id="periodo">
        <option value="diaro">Diaro</option>
        <option value="semanal">Semanal</option>
        <option value="quincenal">Quincenal</option>
        <option value="mensual">Mensual</option>
        <option value="anual">Anual</option>
    </select><br><br>
    <label for="interes">Ingrese el interes: </label>
    <input type="number"  step="0.01" name="interes" id="interes"><br><br>
    <label for="tiempo">Ingrese los plazos: </label>
    <input type="number" name="tiempo" id="tiempo"><br><br>
    <input type="submit" class="btn btn-danger" value="Calcular" name="enviar" id="enviar">
    </form>
    </div>
    <h1>This are the results my nigga!</h1>
    <div class="card">
    <table>
    <tr><td>Fecha de prestamo:</td></tr>
    <tr><td><?php echo $_POST['date'];?></td><td>Tipo: <?php if($_POST['tipo'] == "1") {echo "Simple"; } else{ echo "Compuesto";} ?></td></tr>
    <tr><td>Monto: <?php echo $_POST['num1']?></td><td>Interes: <?php echo $_POST['interes'] . "%";  ?> </td></tr>
    <tr><td>Periodo: <?php echo $_POST['periodo'];?></td><td>Plazo: <?php echo $_POST['tiempo'];?></td></tr>
    </table>
    </div>
    <table class="table table-danger table-striped">
    <tr><td>Fecha </td><td>Cuota</td><td>Capital</td><td>Interes</td><td>Saldo</td></tr>
    <?php
        $tipo = $_POST['tipo'];
        $fecha = date_create($_POST['date']);//Creamos un objeto para poder sumarle los dias,meses or years.
        $monto = $_POST['num1'];
        $periodo = $_POST['periodo'];
        $interes = $_POST['interes'];
        $tiempo = $_POST['tiempo'];
        if ($tipo == "1") {
            $interesT = $monto * ($interes/100);
            
            switch ($periodo) {
                case "diaro":
                    $cuota = ($monto / $tiempo) + $interesT;
                    $capital = $monto / $tiempo;
                    while ($monto > 0) {
                        
                        $monto = $monto - $capital;

                        echo "<tr>";                   
                        date_add($fecha, date_interval_create_from_date_string("1 day"));//Sumanamos la fecha
                        echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                        echo "<td>". round($cuota,2) ."</td>";
                        echo "<td>". round($capital,2) ."</td>";
                        echo "<td>". round($interesT,2) ."</td>";
                        echo "<td>".round($monto,2)."</td>";
                        echo "</tr>";
                    } 
                    break;
                case "semanal":
                    $cuota = ($monto / $tiempo) + $interesT;
                    $capital = $monto / $tiempo;
                    while ($monto > 0) {
                        
                        $monto = $monto - $capital;

                        echo "<tr>";                   
                        date_add($fecha, date_interval_create_from_date_string("1 week"));//Sumanamos la fecha
                        echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                        echo "<td>". round($cuota,2) ."</td>";
                        echo "<td>". round($capital,2) ."</td>";
                        echo "<td>". round($interesT,2) ."</td>";
                        echo "<td>".round($monto,2)."</td>";
                        echo "</tr>";
                    } 
                    break;
                    case "quincenal":
                        $cuota = ($monto / $tiempo) + $interesT;
                        $capital = $monto / $tiempo;
                        while ($monto > 0) {
                            
                            $monto = $monto - $capital;
    
                            echo "<tr>";                   
                            date_add($fecha, date_interval_create_from_date_string("15 days"));//Sumanamos la fecha
                            echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                            echo "<td>". round($cuota,2) ."</td>";
                        echo "<td>". round($capital,2) ."</td>";
                        echo "<td>". round($interesT,2) ."</td>";
                        echo "<td>".round($monto,2)."</td>";
                            echo "</tr>";
                        } 
                        break;
                        case "mensual":
                            $cuota = ($monto / $tiempo) + $interesT;
                            $capital = $monto / $tiempo;
                            while ($monto > 0) {
                                
                                $monto = $monto - $capital;
        
                                echo "<tr>";                   
                                date_add($fecha, date_interval_create_from_date_string("1 month"));//Sumanamos la fecha
                                echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                                echo "<td>". round($cuota,2) ."</td>";
                        echo "<td>". round($capital,2) ."</td>";
                        echo "<td>". round($interesT,2) ."</td>";
                        echo "<td>".round($monto,2)."</td>";
                                echo "</tr>";
                            } 
                            break;
                            case "anual":
                                $cuota = ($monto / $tiempo) + $interesT;
                                $capital = $monto / $tiempo;
                                while ($monto > 0) {
                                    
                                    $monto = $monto - $capital;
            
                                    echo "<tr>";                   
                                    date_add($fecha, date_interval_create_from_date_string("1 year"));//Sumanamos la fecha
                                    echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                                    echo "<td>". round($cuota,2) ."</td>";
                        echo "<td>". round($capital,2) ."</td>";
                        echo "<td>". round($interesT,2) ."</td>";
                        echo "<td>".round($monto,2)."</td>";
                                    echo "</tr>";
                                } 
                                break;
                default:
                   echo "What's up my nigga? something was wrong check the code!";
                    break;
            }
        }else{
            $interesT = $monto * ($interes/100);
            $cuota = ($monto / $tiempo) + $interesT;
            
            switch ($periodo) {
                case "diaro":
                    
                    $capital = $monto / $tiempo;
                    while ($monto > 0) {
                        
                        $monto = $monto - $capital;

                        echo "<tr>";                   
                        date_add($fecha, date_interval_create_from_date_string("1 day"));//Sumanamos la fecha
                        echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                        echo "<td>". round($cuota,2) ."</td>";
                        echo "<td>". round($capital,2) ."</td>";
                        echo "<td>". round($interesT,2) ."</td>";
                        echo "<td>".round($monto,2)."</td>";
                        echo "</tr>";
                        $interesT = ($interesT * ($interes/100)) + $interesT;
                        $cuota = $capital + $interesT;
                    } 
                    break;
                case "semanal":
                    $cuota = ($monto / $tiempo) + $interesT;
                    $capital = $monto / $tiempo;
                    while ($monto > 0) {
                        
                        $monto = $monto - $capital;

                        echo "<tr>";                   
                        date_add($fecha, date_interval_create_from_date_string("1 week"));//Sumanamos la fecha
                        echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                        echo "<td>". round($cuota,2) ."</td>";
                        echo "<td>". round($capital,2) ."</td>";
                        echo "<td>". round($interesT,2) ."</td>";
                        echo "<td>".round($monto,2)."</td>";
                        echo "</tr>";
                    } 
                    break;
                    case "quincenal":
                        $cuota = ($monto / $tiempo) + $interesT;
                        $capital = $monto / $tiempo;
                        while ($monto > 0) {
                            
                            $monto = $monto - $capital;
    
                            echo "<tr>";                   
                            date_add($fecha, date_interval_create_from_date_string("15 days"));//Sumanamos la fecha
                            echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                            echo "<td>". round($cuota,2) ."</td>";
                            echo "<td>". round($capital,2) ."</td>";
                            echo "<td>". round($interesT,2) ."</td>";
                            echo "<td>".round($monto,2)."</td>";
                            echo "</tr>";
                        } 
                        break;
                        case "mensual":
                            $cuota = ($monto / $tiempo) + $interesT;
                            $capital = $monto / $tiempo;
                            while ($monto > 0) {
                                
                                $monto = $monto - $capital;
        
                                echo "<tr>";                   
                                date_add($fecha, date_interval_create_from_date_string("1 month"));//Sumanamos la fecha
                                echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                                echo "<td>". round($cuota,2) ."</td>";
                        echo "<td>". round($capital,2) ."</td>";
                        echo "<td>". round($interesT,2) ."</td>";
                        echo "<td>".round($monto,2)."</td>";
                                echo "</tr>";
                            } 
                            break;
                            case "anual":
                                $cuota = ($monto / $tiempo) + $interesT;
                                $capital = $monto / $tiempo;
                                while ($monto > 0) {
                                    
                                    $monto = $monto - $capital;
            
                                    echo "<tr>";                   
                                    date_add($fecha, date_interval_create_from_date_string("1 year"));//Sumanamos la fecha
                                    echo "<td>". date_format($fecha,"d-m-Y"). "</td>";
                                    echo "<td>". round($cuota,2) ."</td>";
                                    echo "<td>". round($capital,2) ."</td>";
                                    echo "<td>". round($interesT,2) ."</td>";
                                    echo "<td>".round($monto,2)."</td>";    
                                    echo "</tr>";
                                } 
                                break;
                default:
                   echo "What's up my nigga? something was wrong check the code!";
                    break;
            }
        }
        
    ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>