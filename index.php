<?php
session_start();

//
$song_lyrics1 = "Ulan";
$song_lyrics2 = "Bad Liar";
$song_lyrics3 = "Imahe";
$song_lyrics4 = "Simpleng Tao";
$song_lyrics5 = "You're still the one";

//
$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];


//kung keri iclick buttons
if(isset($_REQUEST['search_button'])=== true){
    //url
    if($_REQUEST['song_title'] == $song_lyrics1){
        header("Location: ".$url_add."?Ulan");
    }
    else if($_REQUEST['song_title'] == $song_lyrics2){
        header("Location: ".$url_add."?Bad Liar");
    }
    else if($_REQUEST['song_title'] == $song_lyrics3){
        header("Location: ".$url_add."?Imahe");
    }
    else if($_REQUEST['song_title'] == $song_lyrics4){
        header("Location: ".$url_add."?pinkskies");
    }
    else if($_REQUEST['song_title'] == $song_lyrics5){
        header("Location: ".$url_add."?hurts");
    }

        //ses var
        $_SESSION['ses_lyrics1'] = $song_lyrics1;
        $_SESSION['ses_lyrics2'] = $song_lyrics2;
        $_SESSION['ses_lyrics3'] = $song_lyrics3;
        $_SESSION['ses_lyrics4'] = $song_lyrics4;
        $_SESSION['ses_lyrics5'] = $song_lyrics5;
          
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Melomaniac Activity</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"> KENNSBRY RECORDS Records </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light" href="song1.php">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song2.php">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song3.php">Song 3</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song4.php">Song 4</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song5.php">Song 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to KENNSBRY STUDIO</h1>
                <p class="lead">"Keep a song in your heart here in KENNSBRY RECORDS."</p>
                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <form method="POST" class="login-form">
                            <div class="form-group">


                            
                                <?php
                                //sa search
                                if(isset($_REQUEST['Ulan']) === true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song1.php");
                                }else if(isset($_REQUEST['Bad Liar'])=== true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song2.php");
                                }else if(isset($_REQUEST['Imahe'])===true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song3.php");
                                }else if(isset($_REQUEST['pinkskies'])=== true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song4.php");
                                }else if(isset($_REQUEST['hurts'])===true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song5.php");
                                }

                                    
                                ?>
                                

                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Song Title here" name="song_title" ></div>
                                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="search_button"> Search </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </section>

        <footer class="py-3 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Kenneth Bryan Ramiro</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>