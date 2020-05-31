# Trabajo Práctico Nro 2 - PAW

### Tecnologías del lado del servidor
***Autor:*** Leonardo Ariel Sequeira <br>
***Legajo:*** 112776 <br>
**Objetivo:** Entender cómo un formulario HTML se traduce en una petición HTTP y cómo la misma es procesada por una aplicación.

* * *
#### 1. Elabore una aplicación que presente al usuario un formulario implementado por HTML para la carga de los datos de una persona que solicita turno médico.
El ejercicio se encuentra en la carpeta: *Punto_1* del branch *master*.

##### ¿Por qué cree usted que se requiere validar los datos en ambos extremos de la comunicación?
Las validaciones del lado del front end son importantes por la experiencia que el usuario tiene con la aplicación. Una aplicacion con indicaciones sobre posibles valores de un determinado campo termina siendo mucho mas amigable que otra que no le indica al usuario el porque un campo no es válido.
<p>
En cuanto a las validacione del lado del back end siempre se deben realizar debido a que son datos de entrada del lado del usuario y nunca se sabe que tan malisioso puede ser para nuestra aplicacion.


* * *
#### 2. Extienda el ejercicio anterior para que al enviar el formulario mediante el método POST se muestre al usuario un resumen del turno.
El ejercicio se encuentra en la carpeta: *Punto_2* del branch *master*.


* * *
#### 3. Realice las modificaciones necesarias para que el script del punto anterior reciba los datos mediante el método GET. 
El ejercicio se encuentra en la carpeta: *Punto_3* del branch *master*.


##### ¿Qué diferencia nota? 
La principal diferencia que se observan es en la request que el browser envia al servidor:

##### Con POST:<br>
Request URL: http://localhost:8000/save_turno

##### Con GET:<br>
Request URL: http://localhost:9000/save_turno?nombre=Leonardo+Ariel&email=leo.sequeira%40hotmail.com&telefono=11-44443333&edad=29&talla_calzado=20&altura=1.25&fecha_nacimiento=2020-05-31&color_pelo=negro&fecha_turno=2020-05-31&hora_turno=09%3A00%3A00&enviar=Enviar
<p>
Con GET los campos del form viajan en la url de la peticion.

##### ¿Cuándo es conveniente usar cada método?
En el caso que los campos a enviar al servidor sean muchos es conveniente realizar la peticion mediante POST.


* * *
#### 4. Agregue al formulario un campo que permita adjuntar una imagen, y que la etiqueta del campo sea Diagnóstico. El campo debe validar que sea un tipo de imagen valido (.jpg o .png) y será optativo. La imagen debe almacenarse en un subdirectorio del proyecto y también debe mostrarse al usuario al mostrar el resumen del turno del ejercicio 2. 
El ejercicio se encuentra en la carpeta: *Punto_4* del branch *master*.

##### ¿Qué sucede si 2 usuarios cargan imágenes con el mismo nombre de imagen? 
En el caso que dos usuarios suban imagenes con el mismo nombre, el archivo se sobre escribe perdiendo la primer imagen subida.

##### ¿Qué mecanismo implementar para evitar que un usuario sobrescriba una imagen con el mismo nombre?
El mecanismo que implementé para evitar la sobre escritura de las imagenes es renombrando los archivos concatenando ciertos datos, como por ejemplo *fechaTurno_horaTurno*.


* * *
#### 5. Utilice las herramientas para desarrollador del navegador y observe cómo fueron codificados por el navegador los datos enviados por el navegador en los dos ejercicios anteriores. ¿Qué diferencia nota?


* * *
#### 6. Agregar persistencia al sistema de turnos.
El ejercicio se encuentra en la carpeta: *Punto_6* del branch *master*.


* * *
#### 7. Construya la vista de ficha de turno. Dicha vista debe permitir acceder al turno y mostrar todos sus datos, recuperados del mecanismo de persistencia elaborado en el punto anterior. ¿Cómo se identifica y discrimina un turno de otro? Debe funcionar el link a la ficha que se encuentra en la tabla de turnos. Recuerde agregar un enlace para volver a la tabla de turnos.
El ejercicio se encuentra en la carpeta: *Punto_7* del branch *master*.

* * *
