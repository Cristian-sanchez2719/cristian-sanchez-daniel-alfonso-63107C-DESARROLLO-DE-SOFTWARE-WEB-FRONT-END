<?php
 
    include 'conexion.php';
 
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    //encripción de usuario y contraseña
    //fin de la encripción
    $query= "INSERT INTO TBL_RCREDENCIAL(CRE_CNOMBRE_COMPLETO, CRE_CCORREO, CRE_CUSUARIO, CRE_CPASSWORD)
            VALUES('$nombre_completo', '$correo', '$usuario', '$password')";
       
   
    $verificar_correo_query = "SELECT * FROM TBL_RCREDENCIAL WHERE CRE_CCORREO = '$correo'";
    $verificar_correo = sqlsrv_query($con, $verificar_correo_query);
 
    if($verificar_correo){
        $email_contador = 0;
        while ($row = sqlsrv_fetch_array($verificar_correo, SQLSRV_FETCH_ASSOC)) {
          $email_contador += 1;
      }
      if($email_contador > 0){
      echo '
      <script>
           alert("Error, the email is already registered");
           window.location= "../Login.php";
        </script>
        ';
        exit();
    }else{
        $verificar_usuario_query = "SELECT * FROM TBL_RCREDENCIAL WHERE CRE_CUSUARIO = '$usuario'";
    $verificar_usuario = sqlsrv_query($con, $verificar_usuario_query);
 
    if($verificar_usuario){
        $usuario_contador = 0;
    while ($row = sqlsrv_fetch_array($verificar_usuario, SQLSRV_FETCH_ASSOC)) {
            $usuario_contador += 1;
    }
    if($usuario_contador > 0){
        echo '
        <script>
             alert("Error, the user is already registered");
             window.location= "../Login.php";
          </script>
          ';
          exit();
        }else{
            $ejecutar = sqlsrv_query($con, $query);
        if($ejecutar){
            echo '
            <script>
               alert("Successful Registration");
               window.location= "../Login.php";
            </script>
            ';
        }else{
            echo '
            <script>
               alert("Try Again, Unsuccessful registration");
               window.location= "../Login.php";
            </script>
            ';
        }
        }
      }
    }
}else{
    echo '
    <script>
    alert("Try Again, An error has occurred");
    window.location= "../Login.php";
    </script>
    ';
}
    sqlsrv_close($con);
?>