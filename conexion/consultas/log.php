<?php
        $host="localhost";
        $basededatos="reser_ambi";
        $usuariodb="root";
        $pass="";
        $usuario=$_POST['email'] ?? '';
        $codigo=$_POST['pass'] ?? '';

        $conexion = mysqli_connect($host,$usuariodb,$pass,$basededatos);

        if(isset($_POST['btn1']))
          {
            $query = "SELECT 1 FROM `usuario` WHERE `id_usuario`= = '$usuario' AND `contra`= = '$codigo'";
            $resultado = mysqli_query($conexion,$query);

            if(mysqli_num_rows($resultado)>0 ){
                echo "Pasaste perro";
            }else{
              echo "0 resultado";
            }
        ?>