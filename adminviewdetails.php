
<?php

require 'config.php';
session_start();
if ($_SESSION["madiboarfarm"] != "OK") {
    header("location:adminindex.php");
}
$id = filter_input(INPUT_GET, 'id');
$sql = "SELECT * from goatdetails WHERE id ='$id'";
?>
<?php
require 'config.php';
$query="select*from goatdetails";
$Result=  mysqli_query($conn,$query);
?>
<!DOCTTYPE html>
<html>
    <head> 
        <title>Goat view page</title>
        <style>
            body{
                padding-left: 50px;
                
            }
            td,th{
                font-size: 40px;
            }
        </style>
    </head>
    <body>
        <h1>Here is the list of goat </h1>
        <table border="1">
            <tr>
                <th>S.N</th>
                <th>Goat Name</th>
                
            </tr>
            <?php 
            while ($row = mysqli_fetch_assoc($Result)) {
            ?>
            <tr>
                
                <td><?php  echo "{$row['id']}"?></td>
                <td><?php 
                    echo "<a href='adminindividualgoat.php?id={$row['id']}'>";
                    echo "{$row['name']} </a>"
                        
                ?>
                </td>
                
            </tr>
           <?php
           }
            ?>
        </table>
    </body>
</html>





