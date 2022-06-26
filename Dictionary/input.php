<?php require_once("./core/init.php"); ?>
<!DOCTYPE html>
<//link ref="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert page</title>
</head>
<header class="header">
    <body bgcolor=paleturquoise background=sunset2.jpg>
    <font color=black size=10 align=center font=sans-sarif>
     Amharic/English Dictionary <font>
</header>

<form action="input.php" method="GET">
<div class="search">
<input type="text" name="word" class="box">

        
        <br>
         <br>
         <br>
    <input type="submit" value="translate" class="btn">
    </div>
</form>
</div>

</body>



<?php 
$t=$_GET["word"];
require 'core/init.php';
include 'menu.php';
echo $lang["$t"];
?>