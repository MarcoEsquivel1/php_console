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

        <?php 
            include('person.php');
            include('automotores/auto.php');
            include('automatizacion/auto.php');
            include('connection.php');
        ?>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-dark text-white">
                    <h3>Base de Datos</h3>
                    <?php 
                        $persons = $conn->query('SELECT * from persons');

                        foreach($persons as $person) {
                            echo "nombre: " . $person["firstname"] . " " . $person["lastname"] . "<br>";
                        }
                        $conn = null;
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-info text-white">
                    <h3>Namespaces</h3>
                    <?php 
                        $automotor = new \automotores\Auto("Fiat", 4, 4);
                        $automatizador = new \automatizacion\Auto("Bot social", 10, "Jueves 2 de Mayo de 2020");

                        echo $automotor->getAuto() . "<br>";
                        echo $automatizador->getAuto() . "<br>";
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-dark text-white">
                    <h3>Include</h3>
                    <?php 
                        $person = new Person("Marco", "Esquivel");

                        echo $person->greetings();
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 mb-3 bg-success text-white">
                    <h3>Formularios GET</h3>
                    <form class="row g-3" method="get" action="#">
                        <div class="col-auto">
                            <label for="saludo" class="visually-hidden">Saludo</label>
                            <input type="text" class="form-control" id="saludo" name="saludo" placeholder="Di algo">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
                        </div>
                    </form>   
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 mb-3 bg-danger text-white">
                    <h3>Formularios GET</h3>
                    <?php
                    if(isset($_GET["saludo"])){
                        echo $_GET["saludo"];
                    }else{
                        echo "Esperando saludo";
                    }
                        
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 mb-3 bg-primary text-white">
                    <h3>Calculadora FORM</h3>
                    <form class="row g-3" method="post" action="#">
                        <div class="col-auto">
                            <input type="number" class="form-control" id="num1" name="num1">
                        </div>
                        <div class="col-auto">
                            <input type="number" class="form-control" id="num2" name="num2">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-dark text-white mb-3">Sumar</button>
                        </div>
                    </form>   
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 mb-3 bg-warning text-white">
                    <h3>Calculadora Result</h3>
                    <?php
                        if(isset($_POST['num1']) && isset($_POST['num2'])){
                            $result = ($_POST["num1"] + $_POST["num2"]);
                            echo "El resultado es " . $result;
                        }else{
                            echo "Esperando calculo";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 mb-3 bg-success text-white">
                    <h3>Formularios POST</h3>
                    <form class="row g-3" method="post" action="#">
                        <div class="col-auto">
                            <label for="saludo" class="visually-hidden">Saludo</label>
                            <input type="text" class="form-control" id="saludo" name="saludo" placeholder="Di algo">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
                        </div>
                    </form>   
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 mb-3 bg-danger text-white">
                    <h3>Formularios POST</h3>
                    <?php
                    if(isset($_POST["saludo"])){
                        echo $_POST["saludo"];
                    }else{
                        echo "Esperando saludo";
                    }
                        
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-dark text-white">
                    <h3>Metodos Estaticos</h3>
                    <?php
                        class Calculadora{
                            public static function sumar($num1, $num2){return $num1 + $num2 ;}
                            public static function restar($num1, $num2){return $num1 - $num2 ;}
                        }

                        $calc = new Calculadora();

                        echo "El resultado de la suma es: " . Calculadora::sumar(1,1) . "<br>";
                        echo "El resultado de la resta es: " . Calculadora::restar(5,1) . "<br>";

                        /* echo "El resultado de la suma es: " . $calc->sumar(1,1) . "<br>";
                        echo "El resultado de la resta es: " . $calc->restar(5,1) . "<br>"; */
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-danger text-white">
                    <h3>Herencia</h3>
                    <?php
                        class Masscota {
                            public $nombre;
                            public $patas;

                            function __construct($nombre, $patas){
                                $this->nombre = $nombre;
                                $this->patas = $patas;
                            }

                            public function eat(){
                                return "Estoy comiendo";
                            }
                        }

                        class Perro extends Masscota{
                            function run(){
                                return "Estoy corriendo";
                            }
                        }

                        class Gato extends Masscota{

                        }

                        $tommy = new Perro("Tommy", 4);
                        $rocky = new Gato("Rocky", 4);

                        echo $tommy->run() . "<br>";
                        echo $tommy->eat() . "<br>";
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-success text-white">
                    <h3>POO</h3>
                    <?php
                        class Mascota{
                            public $nombre;
                            public $tipo;
                            public $patas;

                            function __construct($nombre, $tipo, $patas){
                                $this->nombre = $nombre;
                                $this->tipo = $tipo;
                                $this->patas = $patas;
                            }

                            public function getDesc(){
                                if($this->patas == 0){
                                    return $this->nombre . " es un " . $this->tipo . " y no tiene patas!!!";
                                }else{
                                    return $this->nombre . " es un " . $this->tipo . " y tiene " . $this->patas . " patas!!!";
                                }
                            }
                        }

                        $perro = new Mascota("Max", "perro", 4);
                        $gato = new Mascota("Sarah", "gato", 4);
                        $pez = new Mascota("Goldeen", "pez", 0);

                        echo $perro->getDesc() . "<br>";
                        echo $gato->getDesc() . "<br>";
                        echo $pez->getDesc();
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-warning text-white">
                    <h3>Funciones</h3>
                    <?php
                        function calc($sign, $num1, $num2){
                            switch ($sign) {
                                case "+":
                                    return $num1 + $num2;
                                    break;

                                case "-":
                                    return $num1 - $num2;
                                    break;    
                                
                                default:
                                    # code...
                                    return 0;
                            }
                        }

                        $resultado = calc("+", 3, 3);
                        echo "El resultado es: " . $resultado;
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 mb-3 bg-primary text-white">
                    <h3>Break</h3>
                    <?php
                        $names = array("Max", "Tom", "Sarah", "Rocky");
                        echo "Valores del array: <br>";

                        foreach ($names as $nombre) {
                            if ($nombre == "Sarah") {
                                break;
                            }
                            echo $nombre . "<br>";
                        }
                    ?>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 mb-3 bg-danger text-white">
                    <h3>Continue</h3>
                    <?php
                        $names = array("Max", "Tom", "Sarah", "Rocky");
                        echo "Valores del array: <br>";

                        foreach ($names as $nombre) {
                            if ($nombre == "Sarah") {
                                continue;
                            }
                            echo $nombre . "<br>";
                        }
                    ?>
                </div>
            </div>
        </div>    

        <div class="row">
            <div class="col-4">
                <div class="p-3 mb-3 bg-primary text-white">
                    <h3>Arrays</h3>
                    <?php
                        $nums = array(1,4,6,7);
                        echo "Valores del array: <br>";

                        for ($i=0; $i < count($nums); $i++) { 
                            echo $nums[$i] . "<br>";
                        }
                    ?>
                </div>
            </div>
            
            <div class="col-4">
                <div class="p-3 mb-3 bg-success text-white">
                    <h3>Arrays</h3>
                    <?php
                        $names = array("Max", "Tom", "Sarah", "Rocky");
                        echo "Valores del array: <br>";

                        for ($i=0; $i < count($names); $i++) { 
                            echo $names[$i] . "<br>";
                        }
                    ?>
                </div>
            </div>
            
            <div class="col-4">
                <div class="p-3 mb-3 bg-danger text-white">
                    <h3>Foreach</h3>
                    <?php
                        $names = array("Max", "Tom", "Sarah", "Rocky");
                        echo "Valores del array: <br>";

                        foreach ($names as $nombre) {
                            echo $nombre . "<br>";
                        }
                    ?>
                </div>
            </div> 
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 mb-3 bg-success text-white">
                    <h3>Bucle While</h3>
                    <?php
                        $num = 0;

                        while ($num <= 5) {
                            echo "El numero es : " . $num . "<br>";
                            $num++;
                        }
                    ?>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 mb-3 bg-warning text-white">
                    <h3>Bucle For</h3>
                    <?php
                        for($i = 0; $i <= 5; $i++ ){
                            echo "El numero es : " . $i . "<br>";
                        }
                    ?>
                </div>
            </div>    
        </div>       

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-danger text-white">
                
                    <h3>Condicional SWITCH</h3>
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
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-primary text-white">
                    <h3>Condicional IF</h3>
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
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-success text-white">
                    <h3>Operadores</h3>
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
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-3 bg-primary text-white">
                    <h3>Variables y tipos de datos</h3>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>