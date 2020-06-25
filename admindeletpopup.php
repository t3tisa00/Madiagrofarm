<?php

require 'config.php';
session_start();
if ($_SESSION["madiboarfarm"] != "OK") {
    header("location:index.php");
}
$id = filter_input(INPUT_GET, 'id');
$sql = "SELECT * from goatdetails WHERE id ='$id'";
?>

<style>
    #pop{
        height:280px;
        width:470px;
        position:fixed;
        bottom:40%;
        right:25%;
        border:2px solid;
        padding:10px;
        border-radius:9px;
        background:yellow;
        color:red;
    }
   a #yes{
        float:right;
        color:green;
   }
       
    a #nop{
        float: left;   
        color: red;
    }
</style>
<div id="pop">
    
    <h3 style="color:red; float:50%;">Attention !!!!</h3>
    <h4>Are you sure it is sold out ??? </h4>
    <a href="adminsoldout.php?id=<?php echo $id;?>"><button id ="yes"> Yes </button></a>
    <a href="adminviewdetails.php"><button id ="nop"> No </button></a>
</div>