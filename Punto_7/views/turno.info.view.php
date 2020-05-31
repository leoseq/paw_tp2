    
    <label>Nombre del Paciente</label>
    <input type="text" name="nombre" id="nombre" value="<?= $turno->nombre?>" disabled>
    <br>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email"  value="<?= $turno->email?>" disabled>
    <br>
    <label for="telefono">Teléfono: </label>
    <input type="tel" id="telefono" name="telefono" value="<?= $turno->telefono?>" disabled>
    <br>
    <label for="edad">Edad: </label>
    <input type="number" id="edad" name="edad" value="<?= $turno->edad?>" disabled>
    <br>
    <label for="talla_calzado">Talla de calzado: </label>
    <input type="number" id="talla_calzado" name="talla_calzado" value="<?= $turno->talla_calzado?>" disabled>
    <br>
    <label for="altura">Altura: </label>
    <input type="text" value="<?= $turno->altura?>" disabled>
    <br>
    <label for="fecha_nacimiento">Fecha de nacimiento*: </label>
    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= $turno->fecha_nacimiento?>" disabled>
    <br>
    <label for="color_pelo">Color de pelo: </label>
    <input type="color_pelo" name="color_pelo" id="color_pelo" value="<?= $turno->color_pelo?>" disabled>
    <br>    
    <label for="fecha_turno">Fecha del turno: </label>
    <input type="date" name="fecha_turno" id="fecha_turno" value="<?= $turno->fecha_turno?>" disabled>
    <br>
    <label for="hora_turno">Horario del turno: </label>
    <input type="time" name="hora_turno" value="<?= $turno->hora_turno?>" disabled>
    <br>

