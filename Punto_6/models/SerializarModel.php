<?php

namespace App\models;
use App\models\ListaTurno;

class Serializar{
    private $path_data_file = 'data/turnos.json';
    
    public function save_json($turno)
    {
        $lista = new ListaTurno();
        $lista->add_turno($turno);

        $file = file_get_contents($this->path_data_file);

        if (!empty($file)){
            $json = json_decode($file, true);
            
            foreach ($json as $line){

                foreach($line as $datosJson){
                        
                    $datos = [];        
                    $datos['nombre'] = $datosJson['nombre'];
                    $datos['email'] = $datosJson['email'];
                    $datos['telefono'] = $datosJson['telefono'];
                    $datos['edad'] = $datosJson['edad'];
                    $datos['talla_calzado'] = $datosJson['talla_calzado'];
                    $datos['altura'] = $datosJson['altura'];
                    $datos['fecha_nacimiento'] = $datosJson['fecha_nacimiento'];
                    $datos['color_pelo'] = $datosJson['color_pelo'];
                    $datos['fecha_turno'] = $datosJson['fecha_turno']; 
                    $datos['hora_turno'] = $datosJson['hora_turno'];

                    $new_turno = new Turno($datos);  

                    $lista->add_turno($new_turno);
                }
            }
        }

        // Regenero el archivo
        $file = "";
        chmod($this->path_data_file, 755);

        $file = fopen($this->path_data_file, "w+");
        fwrite($file, "");
        fclose($file);

        // Vuelvo a guardar todos los turnos
        $json_string = json_encode($lista);
        file_put_contents($this->path_data_file, $json_string); 
    }
}

?>