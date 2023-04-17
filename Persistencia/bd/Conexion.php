<?php
class Conexion{
 public function conectarDB(){
   $servername = "localhost";
   $database = "suplos_ofertas";
   $user=  "jgilp";
   $password= "da1ikude*";
   $conexion = mysqli_connect($servername, $user, $password, $database);
   // Comprobar la conexion
   if (!$conexion) {
      die("Error de conexión " . mysqli_connect_error());
   }
   //echo "Conectado correctamente";
   return $conexion;
 }
 public function cerrarDB($conexion){
    $cerrar = mysqli_close($conexion);
    return $cerrar;
 }
}
?>