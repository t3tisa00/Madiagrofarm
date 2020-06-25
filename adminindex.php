<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            @media print {
    html, body {
       display: none;  /* hide whole page */
    }
}
        </style>
        <title></title>
    </head>
    <body>
        <h1>MADI AGRO FARM BOAR GOAT REGISTRATION</h1>
        <h3>Write the username and password that is assign to you</h3>
        
        <form action="adminchecklogin.php" method="POST">

    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br> 
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
       <br>   
    <button type="submit">Login</button>
    
  
</form>
    </body>
</html>
