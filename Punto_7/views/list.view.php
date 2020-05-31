<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Turnos Medicos</title>
    </head>
    <body>
        <header>
            <h1>Lista de Turnos:</h1>
            <?php include 'views/nav.view.php'; ?>
        </header>
        <main>

            <?php
                $file = file_get_contents('data/turnos.json');
                
                if (!empty($file)){
                    $json = json_decode($file, true);
                
                    foreach ($json as $turno){
                        foreach($turno as $datos){

                            $id = $datos['id'];

                            echo "======================================<br>";
                            echo "INFORMACION DEL TURNO";
                            echo "<br>======================================<br>";
                            echo "ID: " . $datos['id'] . "<br>";
                            echo "Fecha del turno: " . $datos['fecha_turno'] . "<br>";
                            echo "Horario: " . $datos['hora_turno']. "<br>";
                            echo "Nombre del paciente: " . $datos['nombre']. "<br>";
                            echo "Telefono del paciente: " . $datos['telefono']. "<br>";
                            echo "Email del paciente: " . $datos['email']. "<br>";
                            echo "<a href=/show_turno?id=$id>Ficha del turno</a><br>";
                            echo "<br><br>";                
                        }
                    }
                }else {
                    echo "No se encontraron turnos registrados. <br>";
                }
            ?>

        </main>
    </body>
</html>