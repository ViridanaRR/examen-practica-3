<?php
    include("conexion.php");
    if(isset($_POST['enviar'])){
        
        if(strlen($_POST['matricula']) >= 1 && strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['gg']) >= 1 && strlen($_POST['correo']) >= 1 ){
                $matricula = $_POST['matricula'];
                $nombre = $_POST['nombre'];
                $gg = $_POST['gg'];
                $correo = $_POST['correo'];
                $contrasena = $_POST['contrasena'];
                $mensaje = $_POST['mensaje'];
                $consulta = "INSERT INTO datos(matricula, nombre, gg, correo, contraseña, mensaje) VALUES ('$matricula', '$nombre', '$gg', '$correo', '$contrasena', '$mensaje')";
                $resultado = mysqli_query($conexion, $consulta);        
            }
    }

    if(isset($_POST['consultar'])){
        $correo = $_POST['correo_dato'];
        $consulta = "SELECT * FROM datos WHERE correo = '$correo'";
        $resultado = mysqli_query($conexion, $consulta);      
        ?>
        
            <?php
            if(mysqli_num_rows($resultado) != 0){
                $mostrar = mysqli_fetch_array($resultado);?>
                    <tr>
                        <td><?php echo "Matricula : ".$mostrar['matricula'];?></td> <br>
                        <td><?php echo "Nombre : ".$mostrar['nombre'];?></td> <br>
                        <td><?php echo "Grado y Grupo : ".$mostrar['gg'];?></td> <br>
                        <td><?php  echo "Contraseña : ".$mostrar['contraseña'];?></td>
                    </tr>
            <?php } ?>
            <?php
            if(mysqli_num_rows($resultado) == 0){
                echo 'No existe ese usuario';
            }
            ?>
               
    <?php   
    }
    if(isset($_POST['borrar'])){
        $correo = $_POST['correo_dato'];
        $consulta = "SELECT * FROM datos WHERE correo = '$correo'";
        $resultado = mysqli_query($conexion, $consulta);
        if(mysqli_num_rows($resultado) != 0){
            $consulta = "DELETE FROM datos WHERE correo = '$correo'";
            $resultado = mysqli_query($conexion, $consulta);
            echo 'Se eliminaron los datos del correo: '.$correo;
        }
        else{
            echo 'No existe ese usuario';
        }        
    }
?>