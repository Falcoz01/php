<?php
session_start();
if (isset($_SESSION['count'])) {

 $tmp = $_SESSION['count'];
 $tmp = $tmp + 1; 
 
 $_SESSION['count'] = $tmp;
}else{
 $_SESSION['count'] = 0;
}
echo $_SESSION['count'];

?>