<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header class="container text-center pt-3">
        <h1>INTRODUCCIÓN A PHP</h1>
    </header>
    <main>
        <!-- ========== Start variables ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Introducción a variables</h5>
            </div>
            <form>
                <div class="mb-3 input-group">
                    <label for="nombre" class="form-label me-5">Nombre:</label>
                    <input type="text" class="form-control" name="Nombre" id="nombre" aria-describedby="helpId" placeholder="Ingresé su nombre">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
            <?php
            $nombreIng = $_GET['Nombre'];
            $Mensaje = "Bienveido de nuevo.... ";
            echo "<h4>" . $Mensaje . "      " . $nombreIng . "</h4>"
            ?>
        </section>
        <!-- ========== End variables ========== -->
        <!-- ========== Start Tipos de Datos ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Tipos de Datos</h5>
            </div>
            <?php
            // Datos Integer
            $dato = 7778;
            // Datos Cadena 
            $dato1 = "JIMY CALVO";
            $dato2 = "$%782@ñá";
            // Datos Decimales
            $dato3 = 5259.589;
            // Datos Booleanos
            $dato4 = true;
            $dato5 = false;
            $dato6 = "";
            //Impresion de datos
            echo "Los datos tipo Integer son: " . $dato . " <br>";
            echo "Los datos tipo cadena son: " . $dato1 . " <br>";
            echo "Los datos tipo cadena son: " . $dato2 . " <br>";
            echo "Los datos tipo decimales son: " . $dato3 . " <br>";
            echo "Los valores booleanos son: [" . $dato4 . "]  y  [" . $dato5 . " ] <br>";
            // La cadena vacía o un variable sin asignar
            echo " Valor Nulo-----> $dato6 <br>";
            echo " Valor Nulo por var_dump-----> ";
            var_dump($dato6);


            ?>
        </section>
        <!-- ========== End Tipos de Datos ========== -->
        <!-- ========== Start Operadores ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Operadores</h5>
            </div>
            <?php
            // Operador de asignación

            $valor = 230;
            echo "El valo por asignacion es: $valor <br>";
            // Operador unario
            $valor2 = -$valor;
            echo " El valor por el operador unario -\$valor es: $valor2 <br>";
            echo "<hr><br>";
            // Operadores aritmeticos
            ?>
            <form method="GET">
                <div class="input-group">
                    <span class="input-group-text bg-dark text-light">Ingrese numeros: </span>
                    <input type="number" class="form-control" placeholder="Ej: 52" name="valor3i">
                    <input type="number" class="form-control" placeholder="Ej: 2" name="valor4i">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
            <?php
            $valor3 = (int) isset($_GET['valor3i']) ? $_GET['valor3i'] : 0;
            $valor4 = (int) isset($_GET['valor4i']) ? $_GET['valor4i'] : 1;
            echo "La suma  es: " . ($valor3 + $valor4) . "<br>";
            echo "La resta es: " . ($valor3 - $valor4) . "<br>";
            echo "La múlti es: " . $valor3 * $valor4 . "<br>";
            echo "La divi es: " . $valor3 / $valor4 . "<br>";
            echo "El residuo es: " . $valor3 % $valor4 . "<br>";
            echo "La potencia es: " . $valor3 ** $valor4 . "<br>";
            echo "<hr>";
            // Orden de presedencia de los operadores
            // () * / + -
            echo "<hr>";
            echo "<b>Orden de presedencia de los operadores </b><br>";
            echo "9 / 3 - 6 + 4 - 5 + 4 * 3 = " . (9 / 3 - 6 + 4 - 5 + 4 * 3);
            echo "<br>";
            echo  "9 / 3 - (6 + 4) - (5 + 4) * 3 = " . (9 / 3 - (6 + 4) - (5 + 4) * 3);
            echo "<br>";
            echo "<hr>";


            // Operadores de comparación
            echo "<hr>";
            echo "<b>Orden de presedencia de comparación </b><br>";
            $valor5 = 33;
            $valor6 = 33;
            echo "($valor5 == $valor6): ";
            var_dump($valor5 == $valor6);
            echo "<br>";
            echo "($valor3 <> $valor4): ";
            var_dump($valor3 <> $valor4);
            echo "<br>";
            echo "($valor3 != $valor4): ";
            var_dump($valor3 != $valor4);
            echo "<br>";
            echo "($valor5 >= $valor6): ";
            var_dump($valor5 >= $valor6);
            echo "<br>";
            echo "($valor5 < $valor6): ";
            var_dump($valor5 < $valor6);
            echo "<br> <br>";
            echo "<hr>";;
            // Operadores lógicos &&

            echo "<hr>";
            echo "<b>Operadores lógicos && </b><br>";
            $valor7 = "";
            $valor8 = 0;
            $valor9 = null;
            echo "var_dump( [  $valor7   ] && [ $valor8 ]) : ";
            var_dump($valor7 && $valor8);
            echo "<br>";
            $valor10 = 7;
            $valor11 = 6;
            echo "($valor10 > $valor11 || $valor11 <= 9): ";
            var_dump($valor10 > $valor11 || $valor11 <= 9);
            echo "<br> <br>";

            echo "<hr>";

            echo "<hr>";
            // Operadores de asignación combinada
            echo "<b>Operadores de asignación combinada </b><br>";
            $val = 10;
            $val1 = 45;
            $val3 = 7;
            $val4 = 9;
            $val5 = 33;
            $val6 = 11;
            echo "++$val : ";
            echo ++$val;
            echo "<br>";
            echo "$val1++ : ";
            echo $val1++;
            echo "<br>";
            echo "$val3 += $val4 : ";
            echo $val3 += $val4;
            echo "<br>";
            echo "$val5 -= $val6 : ";
            echo $val5 -= $val6;


            ?>
        </section>
        <!-- ========== End Operadores ========== -->
        <!-- ========== Start Condicionales ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Condicionales</h5>
            </div>
            <?php
            // Sentencia de decisión
            echo "<b>Sentencia de decisión</b><br>";
            $valor01 = 15;
            $valor02 = 27;

            echo "$valor01 <= $valor02: <br>";
            if ($valor01 <= $valor02) {
                echo "La condicio se a cumplido";
            } else {

                echo "la condicion no se a cumplido <br>";
            }
            echo "<br><hr><hr><br>";
            echo "<b>Decisión múltiple</b><br>";
            // Decisión múltiple
            echo "$valor01 > $valor02";
            if ($valor01 > $valor02) {
                echo "Cumple la condicion: ";
                echo "El valor de a es mayor que b<br> <br>";
            } else if ($valor02 > $valor01) {
                echo "<br>No Cumple la condicion<br>";
                echo "$valor02 > $valor01 <br>";
                echo "Cumple la condicion: ";
                echo "El valor de $valor02 es mayor que $valor01  <br> <br>";
            } else {
                echo "Son iguales <br> <br>";
            }

            ?>
        </section>
        <!-- ========== End Condicionales ========== -->
        <!-- ========== Start Selección ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Selección</h5>
            </div>
            <form method="GET">
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" name="mesinp">
                        <option selected>Selceccione</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
            <?php
            $mes = isset($_GET['mesinp']) ? $_GET['mesinp'] : "";
            echo "El mes seleccionado es: ";
            switch ($mes) {
                case 1: {
                        echo "Enero";
                        break;
                    }
                case 2: {
                        echo "Febrero";
                        break;
                    }
                case 3: {
                        echo "Marzo";
                        break;
                    }
                case '4': {
                        echo "Abril";
                        break;
                    }
                case 5: {
                        echo "Mayo";
                        break;
                    }
                case 6: {
                        echo "Juio";
                        break;
                    }
                case 7: {
                        echo "Julio";
                        break;
                    }
                case 8: {
                        echo "Agosto";
                        break;
                    }
                case 9: {
                        echo "Septiembre";
                        break;
                    }
                case 10: {
                        echo "Octubre";
                        break;
                    }
                case 11: {
                        echo "Noviembre";
                        break;
                    }
                case 12: {
                        echo "Diciembre";
                        break;
                    }
                default: {
                        echo " Incorrecto";
                        break;
                    }
            }
            ?>
        </section>
        <!-- ========== End Selección ========== -->
        <!-- ========== Start Repetición  ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Repetición</h5>
            </div>
            <?php

            ?>
        </section>
        <!-- ========== End Repetición  ========== -->
        <!-- ========== Start Break y continue ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Break y continue</h5>
            </div>
            <?php

            ?>
        </section>
        <!-- ========== End Break y continue ========== -->
        <!-- ========== Start Funciones ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Funciones</h5>
            </div>
            <form method="GET">
                <div class="input-group m-2">
                    <input class="form-control " type="date" name="FechaNac" id="fecna" min="1930-01-01" max="2021-12-31" style="width: 56%;">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
            <?php
                $ahora = new DateTime(date("Y-m-d"));
                $fecha = isset($_GET['FechaNac']) ? $_GET['FechaNac'] : '';
                function FechaNacer($fecha_nacimiento)
                {
                    $nacimiento = new DateTime($fecha_nacimiento);
                    global $ahora;
                    $diferencia =$ahora->diff($nacimiento);
                    return $diferencia->format("%y");
                }
                echo "Nacio el: $fecha y hasta la fecha de hoy, el tiene:  " . FechaNacer($fecha) . " años de edad";
            ?>
        </section>
        <!-- ========== End Funciones ========== -->
        <!-- ========== Start  Ámbito de las variables ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Ámbito de las variables</h5>
            </div>
            <?php
                $hora = date("H:i:s");
                echo " El tiempo actual en el meridiano greenwich +1 es : $hora ";
                function horaEc(){
                    global $hora;
                    $horaM=strtotime('-6 hour', strtotime($hora));
                    return $horaM = date("H:i:s",$horaM);
                }
                echo "La Hora en Ecuador: ".horaEc();
            ?>
        </section>
        <!-- ========== End  Ámbito de las variables ========== -->
        <!-- ========== Start  Cadena de caracteres ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Cadena de caracteres</h5>
            </div>
            <?php

            ?>
        </section>
        <!-- ========== End  Cadena de caracteres ========== -->
        <!-- ========== Start Array unidimensionales  ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Array unidimensionales</h5>
            </div>
            <?php
            $musica = array('electroica' => 'David Getta', 'Salasa' => 'Marti Almar', 'Rege' => 'Lampard', 'Baladas' => 'Jose Torres');

            foreach ($musica as $tipo => $artista) {
                echo "Genero Musical:  " . $tipo . " Artista:  " . $artista . "<br>";
            }
            ?>
        </section>
        <!-- ========== End Array unidimensionales  ========== -->
        <!-- ========== Start Array multidimensionales ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Array multidimensionale</h5>
            </div>
            <?php
            $musica = array('electroica' => ['David Getta', 'Avici'], 'Salasa' => ['Marti', ' Almar'], 'Rege' => ['Bob marly', 'Lampard'], 'Baladas' => ['Jose', ' Torres']);

            foreach ($musica as $tipo => $artistas) {
                echo "<b>Genero Musical:  " . $tipo . "</b><br>";
                foreach ($artistas as $i => $artista) {
                    $i++;
                    echo "$i .- $artista <br>";
                }
            }
            ?>
        </section>
        <!-- ========== End Array multidimensionales ========== -->
        <!-- ========== Start Funciones para arrays ========== -->
        <section class="container">
            <br>
            <hr>
            <div class="container text-center">
                <h5>Funciones para arrays</h5>
            </div>
            <?php

            ?>
        </section>
        <!-- ========== End Funciones para arrays ========== -->

    </main>
</body>

</html>