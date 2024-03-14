<?php
 
session_start();
 
    include 'conexion.php';
 
   
    $correo = $_POST['correo'];
    $password = $_POST['passwords'];
 
    $QUERY_VERIFICACION= "SELECT * FROM Login_Registro WHERE correos = '$correo' AND Passwords = '$password'";
    $result = sqlsrv_query($con, $QUERY_VERIFICACION);
 
if($result){
  $existente = 0;
  while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    //echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
    $existente += 1;
}
  if($existente > 0){
    $_SESSION['usuario'] = $correo;
    header("Location: ../../index.php");
  exit;
  }
  else{
    echo '
    <script>
         alert("Error, the email or password is not correct");
         window.location= "../index.php";
      </script>
      ';
      exit;
  }
}else{
  echo '
        <script>
             alert("Error, login failed");
             window.location= "../index.php";
          </script>
          ';
  exit;
}
sqlsrv_close($con);
?>