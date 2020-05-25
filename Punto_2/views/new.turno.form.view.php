<form action="save_turno" method="POST">

      <label for="nombre">Nombre del paciente*: </label>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido" required>
      
      <br>
      
      <label for="email">Email*: </label>
      <input type="email" name="email" id="email" placeholder="correo@mail.com" required>
      
      <br>
      
      <label for="telefono">Teléfono*: </label>
      <input type="tel" id="telefono" name="telefono" placeholder="11-4545-8678" pattern="[0-9]{2-3}-[0-9]{5-8}" required>
      
      <br>
      
      <label for="edad">Edad: </label>
      <input type="number" id="edad" name="edad" min="1" max="130">
      
      <br>
      
      <label for="talla_calzado">Talla de calzado: </label>
      <input type="number" id="talla_calzado" name="talla_calzado" min="20" max="45" value="20">
      
      <br>
      
      <label for="altura">Altura: </label>
      <input type="range" list="tickmarks" id="altura" name="altura" min="0.00" max="2.50" step="0.01">
      <datalist id="tickmarks">
            <option value="0.00" label="0.00">
            <option value="0.50" label="0.50">
            <option value="1.00" label="1.00">
            <option value="1.50" label="1.50">
            <option value="2.00" label="2.00">
            <option value="2.50" label="2.50">
      </datalist>
      
      <br>
      
      <label for="fecha_nacimiento">Fecha de nacimiento*: </label>
      <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" min="1020-01-01" max="<?= date("d-m-Y") ?>" value="<?= date("d-m-Y") ?>" required>
      
      <br>
      
      <label for="color_pelo">Color de pelo: </label>
      <select name="color_pelo" id="color_pelo">
            <option value="negro">Negro</option>
            <option value="rubio">Rubio</option>
            <option value="castanio">Castaño</option>
            <option value="pelirojo">Pelirojo</option>
      </select>
      
      <br>
      
      <label for="fecha_turno">Fecha del turno: </label>
      <input type="date" name="fecha_turno" id="fecha_turno" value="<?= date("d-m-Y") ?>" min="1020-01-01" max="2020-12-31" value="<?= date("d-m-Y") ?>" required>
      
      <br>
      
      <label for="hora_turno">Horario del turno: </label>
      <input type="time" name="hora_turno" min="08:00" max="17:00" step="15" value="09:00:00">
      
      <br>
      
      <input type="submit" name="enviar" value="Enviar">
      <input type="reset" name="limpiar" value="Limpiar">
</form>
