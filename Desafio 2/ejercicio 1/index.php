<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Biblioteca UDB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <br>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Bienvenido a Biblioteca UDB</h1>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="DUI sin guión">
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre de Mascota">
            </div>
            <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tratamiento"></textarea>
            </div>
            <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Medicamento"></textarea>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col">
                <input type="number" class="form-control" placeholder="Costo $">
            </div>
        </div>
        <br>
        <button type="button" class="btn  btn-lg" style="background-color: #a7e0aa;">Registrar</button>
        <br>
        <br>



        <table class="table" [hidden]="contador == 0">
            <thead style="background-color: #a7e0aa;">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">DUI</th>
                    <th scope="col">Nombre Mascota</th>
                    <th scope="col">Tratamiento</th>
                    <th scope="col">Medicamento</th>
                    <th scope="col">Costo $</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>




    </div>
    </div>
</body>

</html>