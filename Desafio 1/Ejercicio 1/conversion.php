<?php
if(!$_POST){
    header('Location:index.html');
}
     function convertir(){
         $cantidad = $_POST['cantidad'];
         $moneda = $_POST['moneda'];
         $dinero = $_POST['dinero'];
         //vemos si cantidad es mayor que 0  y moneda es dolar y valida si es eur, jpy, gbp o el mismo
         if( $cantidad>0 && $moneda == 'usd' && $dinero == 'eur'){
            $precioD = 1.00;
            $Eu = 0.82;
             $dolar = $cantidad * $precioD;
             $total = $Eu * $dolar;
         }
        if( $cantidad>0 && $moneda == 'usd' && $dinero == 'jpy'){
            $precioD = 1.00;
            $Jp = 104.96;
            $dolar = $cantidad * $precioD;
            $total = $Jp * $dolar;

         }
         if( $cantidad>0 && $moneda == 'usd' && $dinero == 'gbp'){
             $precioD = 1.00;
             $Gb = 0.72;
             $dolar = $cantidad * $precioD;
             $total = $Gb * $dolar;
         }
         if( $cantidad>0 && $moneda == 'usd' && $dinero == 'usd'){
             $precioD = 1.00;
             $dolar = $precioD * $cantidad;
             $total = $dolar;
         }
         // valida si cantidad es mayor que 0 y moneda es igual a eur y lo valida si es usd, jpy, gbp o el mismo
         if($cantidad>0 && $moneda == 'eur' && $dinero == 'usd'){
             $presioE = 1.20;
             $us = 1.00;
             $euro = $presioE * $cantidad;
             $total = $euro * $us;
         }if($cantidad>0 && $moneda == 'eur' && $dinero == 'jpy'){
             $presioE = 1.00;
             $jp = 127.21;
             $euro = $presioE * $cantidad;
             $total = $euro * $jp;
         }
         if($cantidad>0 && $moneda == 'eur' && $dinero == 'gbp'){
            $presioE = 1.00;
            $Gb = 0.87;
            $euro = $presioE * $cantidad;
            $total = $euro * $Gb;
         }
         if($cantidad>0 && $moneda == 'eur' && $dinero == 'eur'){
            $presioE = 1.00;
            $euro = $presioE * $cantidad;
            $total = $euro;
         }
         // valida si cantidad es mayor que 0 y moneda es igual a jpy y valida a la moneda a convrtir si es usd, eur, gbp o el mismo 
         if($cantidad>0 && $moneda == 'jpy' && $dinero == 'usd'){
           $precioJ = 1.00;
           $us = 0.0095;
           $yen = $precioJ * $cantidad;
           $total = $yen * $us;
         }
         if($cantidad>0 && $moneda == 'jpy' && $dinero == 'eur'){
            $precioJ = 1.00;
            $eu = 0.0078;
            $yen =  $precioJ * $cantidad;
            $total = $yen * $eu;
         }
         if($cantidad>0 && $moneda == 'jpy' && $dinero == 'gbp'){
            $precioJ = 1.00;
            $Gb = 0.0069;
            $yen = $precioJ * $cantidad;
            $total = $yen * $Gb;
         }
         if($cantidad>0 && $moneda == 'jpy' && $dinero == 'jpy'){
            $precioJ = 1.00;
            $yen = $cantidad * $precioJ;
            $total = $yen;
         }
         // valida si cantidad es mayor que 0 y moneda es igual a gbp y valida  si dinero es usd, eur, gbp o el mismo 
         if($cantidad>0 && $moneda == 'gbp' && $dinero == 'usd'){
            $precioG = 1.00; 
            $us = 1.38;
            $libra = $precioG * $cantidad;
            $total = $libra * $us;
         }
         if($cantidad>0 && $moneda == 'gbp' && $dinero == 'eur'){
             $precioG = 1.00;
             $eu = 1.14;
             $libra = $precioG * $cantidad;
             $total = $libra * $eu;
         }if($cantidad>0 && $moneda == 'gbp' && $dinero == 'jpy'){
             $precioG = 1.00;
             $jp = 144.84;
             $libra = $precioG * $cantidad;
             $total = $libra * $jp;

         }if($cantidad>0 && $moneda == 'gbp' && $dinero == 'gbp'){
            $precioG = 1.00;
            $libra = $precioG * $cantidad;
            $total = $libra;

         }else{
            if($cantidad<=0){
                $total = 'por favor ingresa una cantidad valida';
            }
         }
         return round($total, 4);
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Conversor De Monedas</title>
</head>
<body>
    <h1 class="titulo">Bienvenidos a Conversiones de Divisas UDB</h1>
    <br>
    <div class="row justify-content-md-center tarjeta">
        <div class="col-sm-8">
    <div class="card  border-dark text-center color ">
        <div class="card-header">
         
        </div>
        <div class="card-body-md">
            <br>
          <h5 class="card-title">convertir de X a Y moneda</h5>
          <br>
          <br>
          <form class="form-row" action="conversion.php" method="POST">
            <div class="col">
                <input type="text" name="cantidad" class="form-control" placeholder="cantidad">
              </div>
            <div class="col-7">
            <select class="form-control form-control-lg" name="moneda">
                <option value="usd">Dolar</option>
                <option value="eur">Euro</option>
                <option value="jpy">Yen Japonés</option>
                <option value="gbp">Libra Esterlina</option>
            </select>
            </div>
            <br>
            <br>
            <br>
            <div class="col-12 justify-content-md-center">
                <input type="submit" class="btn btn-primary btn-lg" value="convertir">
            </div>
            <br>
            <br>
            <br>
            <div class="col justify-content-md-center">
                <select class="form-control form-control-lg" name="dinero">
                    <option value="usd">Dolar</option>
                    <option value="eur">Euro</option>
                    <option value="jpy">Yen Japonés</option>
                    <option value="gbp">Libra Esterlina</option>
                </select>
                <br>
                <br>
                <br>
                <h3>La conversion es de: </h3>
                <?php
                    echo convertir();
                ?>
                <br>
                <br>
        </form>
        <br>
        </div>
      </div>
        </div>
    </div>
</body>
</html>