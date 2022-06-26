

<?php
require 'core/init.php';
include 'menu.php';
echo  "   
             <div id='formGroup'>   
                  <form action='index.php' method='GET'>
                        <input type='search' name='n' class='input'>
                       <input type='submit' value='translate' class='btn-dark'>
                   </form>
             </div>";
$t = $_GET['n'];
echo $lang["$t"];
?>