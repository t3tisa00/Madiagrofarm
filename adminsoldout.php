<?php
require 'config.php';
session_start();
if ($_SESSION["madiboarfarm"] != "OK") {
    header("location:adminindex.php");
}
$id = filter_input(INPUT_GET, 'id');
$sql = "SELECT * from goatdetails WHERE id ='$id'";


$sql1 = "INSERT INTO soldgoatdetails(id,name,dob,sex,grade,color,birthweight,birthtype,fathername,mothername,grandfather,grandmother,maternalgf,maternalgm,otherinformation)
        SELECT id,name,dob,sex,grade,color,birthweight,birthtype,fathername,mothername,grandfather,grandmother,maternalgf,maternalgm,otherinformation FROM goatdetails
        WHERE id='$id'"; 
$conn->query($sql1);

$sql2= "DELETE FROM goatdetails WHERE id= '$id'";
$Result=$conn->query($sql2);

echo "Moved data from goatdetails to soldgoatdetails";
echo header('Refresh: 1; url=adminviewdetails.php');





