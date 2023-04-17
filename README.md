# Proyecto Suplos - Prueba Técnica:

## Requisitos: 
- Versión de PHP: 8.0
- Versión de MySQL 8.0

## Utilizo la herramienta del servidor PHP:
- Wampserver

## Estructura del proyecto: 
- Patrones: Arquitecturas en capas: Negocio, Persistencia y Vista
- En la carpeta "BD" se encuentra el archivo SQL. Para permitir la importación del sql. Antes de ejecutar el servidor PHP. 

## Como ejecutar este proyecto:
En caso de usar Wamp Server o XAMPP, se debe ejecutar el enlace: http://localhost/proyecto_suplos/Vista/Oferta.php

Por otro lado, después de importar el sql, debe verificar el estado de "Eventos" en MySQL para saber si está activado o desactivado. Ya que esos eventos están ubicados en el archivo "Info_BasicaDAO.php" dentro de la capa de persistencia.

### Notas: 
1. La parte del cambio de estado:
    - Una vez se crea el proceso en la parte de creación de proceso "Crear". Se muestra el tipo de estado como ACTIVO. 
    - Por lo anterior, se debe seleccionar el botón "Publicar", se le avisa el mensaje: El cambio del estado se ha actualizado. Espera a la fecha de inicio como PUBLICADO y cierre como EVALUACIÓN. 
2. Eventos: 
    - Después de actualizar el estado, debe consultar SQL: 
    ```
    SHOW EVENTS FROM suplos_ofertas;
    ```
3. Credenciales de SQL:
    - Ubicar la carpeta "bd" para cambiar el usuario y contraseña: 
    ```
    proyecto_suplos/Persistencia/bd/Conexion.php;
    ```
Autor: Jaime Gil 
