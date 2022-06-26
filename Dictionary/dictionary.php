<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert page</title>
</head>
<header class="header">
   Dictionary 
</header>
<form action="input.php" method="GET">
<div class="search">
<input type="text" name="word" class="box">
    <div>
    <input type="submit" value="translate" class="btn">
    </div>
    
    
</form>
</div>



<?php 
$t=$_GET["word"];
require 'core/init.php';
include 'menu.php';
echo $lang["$t"];
?>