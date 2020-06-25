<?php

require 'config.php';
$id = filter_input(INPUT_GET, 'id');
$sql = "SELECT * from goatdetails WHERE id ='$id'";
?>
<!DOCTYPE html>
<html>
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>About Us</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
                <a class="navbar-brand" href="#">Individual Goat</a>
                <a class="fa fa-facebook navbar-brand bg-primary " href="https://www.facebook.com/MadiAgroForm/"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Goats
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="goatgallery.html">Gallery</a>
                                <a class="dropdown-item" href="fetchgoat.html">View List Of Goat</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="goatgallery.html">Gallery</a>
                        </li>
                    
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <h4 class="text-capitalize text-center bg-dark text-white">Madi Agro Farm </h4>
        </header>

        <?php

$Result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($Result, MYSQLI_NUM)) {
     echo'<div class="row">';
     echo '<div class="col-lg-6 col-md-12 col-12 mb-4">';
    echo '<section class="pt-3 mx-5">';
    echo"<b>Goat Name:</b><br>";
    echo"{$row['1']}<br>";
    
    echo"<b>Date of Birth:</b><br>";
    echo"{$row['2']}<br>";
    
    echo"<b>Sex:</b><br>";
    echo"{$row['3']}<br>";
    
    echo"<b>Grade:</b><br>";
    echo"{$row['4']}<br>";
    
    echo"<b>Color:</b><br>";
    echo"{$row['5']}<br>";
    
    echo"<b>Birth Weight:</b><br>";
    echo"{$row['6']}kg<br>";

    echo"<b>Birth Type:</b><br>";
    echo"{$row['7']}<br>";

    echo '</section>';
    echo '</div>';
    echo '<div class="col-lg-6 col-md-12 col-12 mb-4">';
    echo '<aside class="pt-3 mx-5">';

    echo"<b>Father Name:</b><br>";
    echo"{$row['8']}<br>";

    echo"<b>Mother Name:</b><br>";
    echo"{$row['9']}<br>";
    
    echo"<b>Grand Father Name:</b><br>";
    echo"{$row['10']}<br>";
    
    echo"<b>Grand Mother Name:</b><br>";
    echo"{$row['11']}<br>";
    
    echo"<b>Maternal GrandFather Name:</b><br>";
    echo"{$row['12']}<br>";
    
    echo"<b>Maternal GrandMother Name:</b><br>";
    echo"{$row['13']}<br>";
    
    echo"<b>Other Information:</b><br>";
    echo"{$row['14']}<br>";
    
    echo '</aside>';
    echo '</div>';
    echo '</div>';
      
}
?>

     <button class="mx-4"onclick="myFunction()">Print this page</button><br>
    
<script>
function myFunction() {
  window.print();
} 
</script>
    
    <footer>
            <p class="text-center bg-dark text-white my-2">@copywright protected <a class="fa fa-facebook navbar-brand text-white " href="https://www.facebook.com/MadiAgroForm/"></a></p>
        </footer>    
</body>
</html>

