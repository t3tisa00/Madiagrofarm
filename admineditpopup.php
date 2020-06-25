<?php

require 'config.php';
session_start();
if ($_SESSION["madiboarfarm"] != "OK") {
    header("location:adminindex.php");
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
        background:#b33c00;
        color:  #ffffff;
    }
   a #yes{
        float:right;
        color:green;
   }
       
    a #nop{
        float: left;   
        color:  red;
    }
</style>
<div id="pop">
    
    <h3 style="color:yellow; float:50%;">Attention !!!!!!!</h3>
    <h4>Are you sure you want to edit the goat details?  </h4>
    <a href="admineditindividualgoat.php?id=<?php echo $id;?>"><button id ="yes"> Yes Edit </button></a>
    <a href="adminviewdetails.php"><button id ="nop"> No </button></a>
</div>