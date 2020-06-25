<?php

require 'config.php';
$id = filter_input(INPUT_GET, 'id');
$sql = "SELECT * from goatdetails WHERE id ='$id'";
?>
<html>
    <head>
        <title>individual goat details</title>
        <style>
            aside{
                
                font-size: 20px;
                float: right;
                width: 60%
            }
            b{
                font-size: 20px;
            }
            section{
                width: 40%;
                float: left;
            }
            footer{
                position: absolute;
                bottom: 0;
               width: 15%;
               height: 50px;   
            }
            @media print{
                button{
                    display: none;
                }
            }
            footer a button{
                float: right;
                color: red;
                bottom: 0;
            }
        </style>
       
    </head>
    <body>
        <b> This is the certificate of the goat </b><br>
    <footer> <button onclick="myFunction()">Print this page</button><br>
       
        
        <a href="admineditpopup.php?id=<?php echo $id;?>"> EDIT</a> <br>
        <a href="admindeletpopup.php?id=<?php echo $id;?>">SOLD OUT</a>
        
    </footer>

<script>
function myFunction() {
  window.print();
} 
</script>
    
        
    </body>
</html>
<?php

$Result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($Result, MYSQLI_NUM)) {

    echo '<section>';
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
    
    echo "...................<br>";
    echo "<b>Owner Signature</b>";
    echo '</section>';
    
    echo '<aside>';
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
      
}

