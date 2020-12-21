<?php


 include('conexion.php');
 //esto en caso de que no se haya logueado el usuario no podra llegar a esta pagina 
 if(empty($_SESSION['username'])){
     header('location: index.php');
 }


?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>YourMusic</title>
        <link href="css/styles.css" rel="stylesheet" />
        <!--<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">YourMusic</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                    
                    <?php if(isset($_SESSION["username"])):?>
                      Bienvenido    <?php  echo $_SESSION['username']; ?>
                   
                    <?php endif ?>
                    <i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php">Login</a>
                        <a class="dropdown-item" href="register.php">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="principal.php?logout='1' ">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav" color="#B22222"  >
       
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="display-5">Bienvenido </div>
                            <a class="nav-link" href="principal.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Inicio
                            </a>
                            <br>
                            <br>
                            <br>
                            <div class="display-5">Plataformas</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus-circle"></i></div>
                                Agregar
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="lyrics.php">LYRICS</a>
                                    <a class="nav-link" href="cancion.php">SONG  </a>
                                    <a class="nav-link" href="video.php">VIDEO</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Similares
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Coincidencia con otros 
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="cl.php">letra</a>
                                            <a class="nav-link" href="cs.php">Cancion</a>
                                            <a class="nav-link" href="cv.php">video</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="display-5">Lista de Favoritos</div>
                            <a class="nav-link" href="favletra.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-music"></i></div>
                                FAVORITOS LYRICS
                            </a>
                            <a class="nav-link" href="favsong.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-play"></i></div>
                                FAVORITOS SONGS
                            </a>
                            <a class="nav-link" href="favideo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-video" aria-hidden="true"></i></div>
                                FAVORITOS VIDEOS
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Busca la letra de tu cancion favorita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Tus letras favoritas</a></li>
                            <li class="breadcrumb-item active">Cancion y autor </li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                <div class="card-body">
                                        <form method="post"> 
                                        <?php include('errors.php')?>
                                            <div class="form-group">
                                                <label class="small mb-1" >Artista</label>
                                                <input class="form-control py-4"  type="text" name="artist" placeholder="Ingresa el nombre del artista/banda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" >Cancion</label>
                                                <input class="form-control py-4"  type="text" name="song" placeholder="Ingresa el nombre de la cancion" />
                                            </div>
                                           
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                               
                                                <input type="submit" name="enviar" class="btn btn-primary" value="Find Lyrics y Agregar a Favorita" />
                                            </div>
                                        </form>
                                    </div>
                                </p>

                                <!--
                               <form method="post">
                                <button  type="submit" name="agregarl" class="btn btn-secondary"  >Agregar letra a favoritas </button>
                                
                                </form>-->
                                 
                                    
                                
                            </div>
                            <?php 
if(isset ($_POST['enviar'])){
    $artist=$_POST['artist'];
    $song=$_POST['song'];
    $newartist=str_replace(' ', '%20', $artist);
    $newsong=str_replace(' ', '%20', $song);
    $songautor="Artista-".$artist." Cancion-".$song;
    $usuario=$_SESSION['username'];
    $url="https://api.lyrics.ovh/v1/".$newartist."/".$newsong;
   // echo $url;
    $json=file_get_contents($url);
    $data=json_decode($json, true);
    echo "Letra de la cancion:<br/> <br/>". $data['lyrics'];
    //no funciona   $todo="Letra de la cancion - $song por $artist  es:<br/> ". $data['lyrics'];
   // $letra=$data['lyrics'];
    //se inserta la url en la tabla temporal 
   // $sql="INSERT INTO temporal(agregarle) VALUES ('$url')";
   // mysqli_query($db, $sql);
   $sql="INSERT INTO letrafav(link, usuario, songautor) VALUES ('$url', '$usuario', '$songautor')";
    mysqli_query($db, $sql);
   // echo $todo;
echo "<br/>";
  // var_dump ($letra);
   //verificar si letra es un array
//   echo is_array($letra)?'Array':'No es un array';
   //verificar si es es string
/*
   foreach($letra as $letras){
       echo "is string(";
       var_export($letras);
       echo ")";
       echo var_dump(is_string($letras));
   }
   */
   //echo $url."<br />";
  
    //ahora se inserta en la tabla del usuario  el url
   // $sql="INSERT INTO users(lyricsfav) VALUES ('$url')";
/*
$query="SELECT agregarle FROM temporal";
$result= mysqli_query($db,$query);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        //echo $data1['lyrics'];
        //echo $row['agregarle']."<br/>";
       // echo  $row;
       
        $url1=$row['agregarle'];
        $json=file_get_contents($url1);
        $data1=json_decode($json, true);
       // echo $data1['lyrics'];
       // $sql="INSERT INTO temporal(agregarle) VALUES ('$data1['lyrics']')";
    //mysqli_query($db, $sql);
    }
}*/
//print_r($result);

} 
if(isset ($_POST['agregarl'])){







    echo "hola";
      $nombre=$_SESSION['username'];
      $query="SELECT agregarle FROM temporal";
      $result= mysqli_query($db,$query);
      if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
           // $stuff = array('name' => 'Joe', 'email' => 'joe@example.com');
foreach ($row as $valor => $value) {
    echo "\n $value\n";
   // $sqlo="UPDATE users SET lyricsfav='hola' WHERE username==$nombre";
      //      mysqli_query($db, $sqlo);
}
           
        }
    }
      //$sql="UPDATE users SET lyricsfav=$query WHERE username==$nombre";
     // mysqli_query($db, $sql);
      //elimina el registro de la tabla temporal 
    // $query="DELETE FROM temporal";
    // mysqli_query($db, $query);
$id=$_POST['id'];
echo $id;
echo $nombre;
$sqlo="UPDATE users SET lyricsfav=$value WHERE username=$nombre";
mysqli_query($db, $sqlo);

}

?>


                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        


       
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>