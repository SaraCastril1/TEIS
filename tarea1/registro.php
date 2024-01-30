<?php
    include("conexion.php");
    if(isset($_POST['registro'])){
        if($_POST['nombre']  && $_POST['email']){
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);


            $check_email = "SELECT * FROM datos WHERE email = '$email'";
            $check_resultado = mysqli_query($conexion, $check_email);

            if (mysqli_num_rows($check_resultado) == 0){
                $my_query = "INSERT INTO datos(nombre, email) 
                            VALUES ('$nombre', '$email')";
                $resultado= mysqli_query($conexion, $my_query); 

                if ($resultado){
                    echo "<script>alert('Registro Exitoso');</script>";
                }
                
            }else{
                echo "<script>alert('El correo ya se encuentra registrado');</script>";
            }

            
        }
    }
?>