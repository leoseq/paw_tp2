# Trabajo Práctico Nro 2 - PAW

### Tecnologías del lado del servidor
***Autor:*** Leonardo Ariel Sequeira <br>
***Legajo:*** 112776 <br>
**Objetivo:** Entender cómo un formulario HTML se traduce en una petición HTTP y cómo la misma es procesada por una aplicación.

* * *
#### 1. Elabore una aplicación que presente al usuario un formulario implementado por HTML para la carga de los datos de una persona que solicita turno médico.
El ejercicio se encuentra en la carpeta: *Punto_1*.

#### ¿Por qué cree usted que se requiere validar los datos en ambos extremos de la comunicación?
Las validaciones del lado del front end son importantes por la experiencia que el usuario tiene con la aplicación. Una aplicacion con indicaciones sobre posibles valores de un determinado campo termina siendo mucho mas amigable que otra que no le indica al usuario el porque un campo no es válido.
<p>
En cuanto a las validacione del lado del back end siempre se deben realizar debido a que son datos de entrada del lado del usuario y nunca se sabe que tan malisioso puede ser para nuestra aplicacion.


* * *
#### 2. 
El ejercicio se encuentra en la carpeta: *Punto_2*.


* * *
#### 3. Realice las modificaciones necesarias para que el script del punto anterior reciba los datos mediante el método GET. ¿Qué diferencia nota? ¿Cuándo es conveniente usar cada método?

El ejercicio se encuentra en la carpeta: *Punto_3*.


* * *
#### 4. Agregue al formulario un campo que permita adjuntar una imagen, y que la etiqueta del campo sea Diagnóstico. El campo debe validar que sea un tipo de imagen valido (.jpg o .png) y será optativo. La imagen debe almacenarse en un subdirectorio del proyecto y también debe mostrarse al usuario al mostrar el resumen del turno del ejercicio 2. 

El ejercicio se encuentra en la carpeta: *Punto_4*.

####¿Qué sucede si 2 usuarios cargan imágenes con el mismo nombre de imagen? 


####¿Qué mecanismo implementar para evitar que un usuario sobrescriba una imagen con el mismo nombre?


* * *
#### 5. Utilice las herramientas para desarrollador del navegador y observe cómo fueron codificados por el navegador los datos enviados por el navegador en los dos ejercicios anteriores. ¿Qué diferencia nota?


* * *
#### 6. Agregar persistencia al sistema de turnos.


* * *
#### 7. Construya la vista de ficha de turno. Dicha vista debe permitir acceder al turno y mostrar todos sus datos, recuperados del mecanismo de persistencia elaborado en el punto anterior. ¿Cómo se identifica y discrimina un turno de otro? Debe funcionar el link a la ficha que se encuentra en la tabla de turnos. Recuerde agregar un enlace para volver a la tabla de turnos.


* * *
