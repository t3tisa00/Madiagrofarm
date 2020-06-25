<?php
require 'config.php';
session_start();
if ($_SESSION["madiboarfarm"] != "OK") {
    header("location:adminindex.php");
}
$id = filter_input(INPUT_GET, 'id');
$sql = "SELECT * from goatdetails WHERE id ='$id'";
$Result = mysqli_query($conn, $sql);

$name = "";
$dob = "";
$sex = "";
$grade = "";
$color = "";
$birthweight = "";
$birthtype = "";
$fathername = "";
$mothername = "";
$grandfather = "";
$grandmother = "";
$maternalgf= "";
$maternalgm= "";
$otherinformation= "";




while ($row = mysqli_fetch_array($Result, MYSQLI_NUM)) {

$name = $row['1'];
$dob = $row['2'];
$sex = $row['3'];
$grade = $row['4'];
$color = $row['5'];
$birthweight = $row['6'];
$birthtype = $row['7'];
$fathername = $row['8'];
$mothername = $row['9'];
$grandfather = $row['10'];
$grandmother = $row['11'];
$maternalgf= $row['12'];
$maternalgm= $row['13'];
$otherinformation= $row['14'];

}

if(assert($_POST['submit'])){
    
    $name =$_POST['name'];
    $dob =$_POST['dob'];
    $sex =$_POST['gender'];
    $grade =$_POST['grade'];
    $color =$_POST['color'];
    $birthweight =$_POST['birthweight'];
    $birthtype =$_POST['birthtype'];
    $fathername =$_POST['fname'];
    $mothername =$_POST['mname'];
    $grandfather =$_POST['gfname'];
    $grandmother =$_POST['gmname'];
    $maternalgf =$_POST['maternalgf'];
    $maternalgm =$_POST['maternalgm'];
    $otherinformation =$_POST['otherinformation'];
    
    
    
    
//    $sql="UPDATE goatdetails SET
//             (name,dob,sex,grade,color,birthweight,fathername,mothername,grandfather,grandmother,maternalgf,maternalgm,otherinformation)VALUES
//             ('$name','$dob','$sex','$grade','$color','$birthweight','$fathername','$mothername','$grandfather','$grandmother','$maternalgf','$maternalgm','$otherinformation') where id='$id'";
    $sql = "UPDATE goatdetails SET name='$name', dob='$dob' ,sex='$sex', grade='$grade', color='$color',
            birthweight='$birthweight',birthtype='$birthtype',fathername='$fathername' ,mothername='$mothername', grandfather='$grandfather', grandmother='$grandmother', 
            maternalgf='$maternalgf',maternalgm='$maternalgm',otherinformation='$otherinformation' where id = '$id'";
    
    
    $Result=$conn->query($sql);   
    echo "Successfully Edited";
   echo header('Refresh: 2; url=adminviewdetails.php');
        
} else {
    echo "problem in updateing the goat details";
    
}

?>
<html>
    <head>
        <title>This is the update page</title>
    </head>
    <body>
        <h1> Update the goat details carefully</h1>
<form action="" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" id="name" value="<?php echo $name; ?>"/> <br/> <br/>
    Date of Birth: <input type="date" name="dob" id="dob" value= "<?php echo $dob; ?>"/> <br/>
    
       <b>Gender</b><br/>
       <input type="radio" name="gender" value="male" <?php if($sex=="male"){
     echo "checked";}?> /> Male <br>
       <input type="radio" name="gender"  value="female" <?php if($sex=="female"){
          echo "checked";}?>/> Female <br>
       
       Grade: <input type="text" name="grade" id="grade" value="<?php echo $grade; ?>"/> <br/> 
       Color: <input type="text" name="color" id="color" value=" <?php echo $color; ?>"/> <br/> 
        Birth Weight: <input type="text" name="birthweight" id="birthweight" value="<?php echo $birthweight; ?>"/> <br/> 
        Birthtype: <input type="text" name="birthtype" id="birthtype" value="<?php echo $birthtype; ?>"/> <br/> 
        Father Name: <input type="text" name="fname" id="fname" value="<?php echo $fathername; ?>"/> <br/>
        Mother Name: <input type="text" name="mname" id="mname" value="<?php echo $mothername; ?>"/> <br/>
        Grand Father Name: <input type="text" name="gfname" id="gfname" value="<?php echo $grandfather; ?>"/> <br/>
        Grand Mother Name: <input type="text" name="gmname" id="gmname" value="<?php echo $grandmother; ?>"/> <br/>
        Maternal Grandfather Name: <input type="text" name="maternalgf" id="maternalgf" value=" <?php echo $maternalgf; ?>"/> <br/>
        Maternal Grandmother Name: <input type="text" name="maternalgm" id="maternalgm" value=" <?php echo $maternalgm; ?>"/> <br/>
        Other Information: <input type="text" name="otherinformation" id="otherinformation" value="<?php echo $otherinformation; ?>"/> <br/>
         <input type="submit" name="submit" value="submit">
        
</form>
    </body>
</html>
