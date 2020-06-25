
<?php
require 'config.php';
$query="select*from goatdetails";
$Result=  mysqli_query($conn,$query);
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
        <style>
            
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
                <a class="navbar-brand" href="#">Goat List</a>
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
                            <a class="nav-link" href="about.html">About Us</a>
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
        </header>

        <section>
  <div class="container">
  <h2>Here are the list of Goats</h2>
  <p>Click on each Goat to know the details Biography.</p>            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
          <th>S.N</th>
        <th>Goat Code</th>
        <th>Percantage</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
            while ($row = mysqli_fetch_assoc($Result)) {
            ?>
      <tr>
          <td><?php  echo "{$row['id']}"?></td>
          <td> <?php 
                    echo "<a href='individualgoat.php?id={$row['id']}'>";
                    echo "{$row['name']} </a>"
                        
                ?>
          </td>
        <td>
            <?php
         echo "{$row['grade']}"
        ?>
        </td>
        
      </tr>
      <?php
           }
            ?>
  </table>
  <footer>
            <p class="text-center bg-dark text-white my-2">@copywright protected <a class="fa fa-facebook navbar-brand text-white " href="https://www.facebook.com/MadiAgroForm/"></a></p>
        </footer>
    </body>
</html>





