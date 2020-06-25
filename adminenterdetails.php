<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'config.php';
session_start();
if ($_SESSION["madiboarfarm"] != "OK") {
    header("location:adminindex.php");
}

$name = $_POST['name'];
$dob = $_POST['dob'];
$sex = $_POST['gender'];
$grade = $_POST['grade'];
$color = $_POST['color'];
$birthweight = $_POST['birthweight'];
$birthtype = $_POST['birthtype'];
$fathername = $_POST['fname'];
$mothername = $_POST['mname'];
$grandfather = $_POST['gfname'];
$grandmother = $_POST['gmname'];
$maternalgf= $_POST['maternalgf'];
$maternalgm= $_POST['maternalgm'];
$otherinformation= $_POST['otherinformation'];

if(assert($_POST['submit'])){
    $sql="INSERT INTO goatdetails 
             (name,dob,sex,grade,color,birthweight,birthtype,fathername,mothername,grandfather,grandmother,maternalgf,maternalgm,otherinformation)VALUES
             ('$name','$dob','$sex','$grade','$color','$birthweight','$birthtype','$fathername','$mothername','$grandfather','$grandmother','$maternalgf','$maternalgm','$otherinformation')";
    $Result=$conn->query($sql);   
        header("Refresh: 2;adminviewdetails.php");

} else {
    echo "problem in entering the goat details";
    
}

?>
<h1> Enter the goat details carefully</h1>
<form action="" method="post" enctype="multipart/form-data">
       Name: <input type="text" name="name" id="name"/> <br/> <br/>
       Date of Birth: <input type="date" name="dob" id="dob"/> <br/>
       <b>Gender</b><br/>
       <input type="radio" name="gender"  value="male"> Male <br>
       <input type="radio" name="gender"  value="female"> Female <br>
       Grade: <input type="text" name="grade" id="grade"/> <br/> 
       Color: <input type="text" name="color" id="color"/> <br/> 
        Birth Weight: <input type="text" name="birthweight" id="birthweight"/> <br/> 
        Birthtype: <input type="text" name="birthtype" id="birthtype"/> <br/> 
        Father Name: <input type="text" name="fname" id="fname"/> <br/>
        Mother Name: <input type="text" name="mname" id="mname"/> <br/>
        Grand Father Name: <input type="text" name="gfname" id="gfname"/> <br/>
        Grand Mother Name: <input type="text" name="gmname" id="gmname"/> <br/>
        Maternal Grandfather Name: <input type="text" name="maternalgf" id="maternalgf"/> <br/>
        Maternal Grandmother Name: <input type="text" name="maternalgm" id="maternalgm"/> <br/>
        Other Information: <input type="text" name="otherinformation" id="otherinformation"/> <br/>
         <input type="submit" name="submit" value="submit">
        
</form>
