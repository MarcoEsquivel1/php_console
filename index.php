<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP Console</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ms-3" href="#">PHP Console</a>
    </nav>

    <div class="p-5 mb-5 bg-light rounded">
        <div class="container">
            <h1 class="display-4">Consola PHP</h1>
            <p class="lead">Esto es una consola...</p>           
        </div>
    </div>

    <div class="container">
    <div class="row">
            <div class="p-3 mb-3 bg-danger text-white">
                <h3>Clase: Condicional SWITCH</h3>
                <?php
                    $num = 10;

                    switch ($num) {
                        case 1:
                            echo "La calificacion es muy baja";
                            break;
                        case 2:
                        case 3:
                        case 4:        
                            echo "La calificacion sigue siendo baja baja";
                            break;
                        case 5:
                        case 6:        
                            echo "La calificacion sigue es mediocre";
                            break;
                        case 7:
                        case 8:
                        case 9:        
                            echo "La calificacion es buena";
                            break;
                        case 10:        
                            echo "La calificacion es exelente";
                            break;
                        default:
                            echo "No es una nota valida";
                            break;
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="p-3 mb-3 bg-primary text-white">
                <h3>Clase: Condicional IF</h3>
                <?php
                    $name = "Marco";

                    if($name == "Marco"){
                        echo "Hola Marco!";
                    }else{
                        echo "No eres Marco!";
                    }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="p-3 mb-3 bg-success text-white">
                <h3>Clase: Operadores</h3>
                <?php
                    $num1 = 1;
                    $num2 = 1;
                    //$resultado = $num1 + $num2;
                    $num1++;
                    //$num2--;

                    echo "El resultado de la suma es " . ($num1 + $num2) . " <br>"; 
                    echo "El resultado de la resta es " . ($num1 - $num2) . " <br>"; 
                    echo "El resultado de la multiplicacion es " . ($num1 * $num2) . " <br>"; 
                    echo "El resultado de la division es " . ($num1 / $num2) . " <br>"; 
                    echo "El resultado del modulo es " . ($num1 % $num2) . " <br>"; 
                ?>
            </div>
        </div>
        <div class="row">
            <div class="p-3 mb-3 bg-primary text-white">
                <h3>Clase: Variables y tipos de datos</h3>
                <?php
                    $name = "Marco";
                    $isOld = true;
                    $year = 2001;
                    $km = 54.4;

                    echo "Hola " . $name . ", naciste en el año " . $year . ", y estas a " . $km . " kilometros." . "<br>";
                    echo "La variable name es de tipo: " . gettype($name);
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>