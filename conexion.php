<?php
  session_start();
  $username="";
  $email="";
  $errors= array();
 $db = mysqli_connect('localhost', 'root','', 'registration');

//is el boton register es clicked
 if(isset($_POST['register'])){

    $username= mysqli_real_escape_string($db,$_POST['username']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $password_1= mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2= mysqli_real_escape_string($db,$_POST['password_2']);

    if(empty($username)){
        array_push($errors, "Username is required");

    }
    if(empty($email)){
        array_push($errors, "Email is required");
        
    }
    if(empty($password_1)){
        array_push($errors, "Password is required");
        
    }

    if($password_2 != $password_1){
        array_push($errors, "Las contrasenas no son iguales");
    }

    //si no hay errores se guarda en la base de datos 
    if(count($errors)==0){
        $password=md5($password_1);
        $sql="INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username']=$username; 
        $_SESSION['success']="Estas logueado";
        header('location: principal.php');//redirigiendo a la pagina principal
        
    }
 }

//logout

if(isset($_GET['logout'])){

    session_destroy();
    unset($_SESSION['username']);
    header('location: principal.php');
}


//login
 if(isset($_POST['index'])){
    $username= mysqli_real_escape_string($db,$_POST['username']);
    $password= mysqli_real_escape_string($db,$_POST['password']);

    if(empty($username)){
        array_push($errors, "Username is required");

    }
    
    if(empty($password)){
        array_push($errors, "Password is required");
        
    }

    if(count($errors)==0){
        $password= md5($password);
        $query="SELECT * FROM users WHERE username ='$username' AND password='$password'";
        $result=mysqli_query($db, $query);
        if(mysqli_num_rows($result)==1){
         
           $_SESSION['username']=$username; 
            $_SESSION['success']="Estas logueado";
            header('location: principal.php');
        }else{
            array_push($errors, "El usuario o password incorrectos");
            header('location: index.php');

        }
    }

   

 }

?>