<?php
//memulai 

session_start();
//cek  adanya  session,  jika  session  ada  maka  akan  di  unset
dan  dilanjutkan  dengan session_destroy
if(ISSET($_SESSION['u
sername'])){ 
UNSET($_SESSION['us
ername']);
}
header("location: index.php");
session_destroy();
?>