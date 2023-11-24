<?php
$tan = 60*60*24*365;
setcookie("panier[prod1]",0);
setcookie("panier[prod2]",0);
setcookie("panier[prod3]",0);
setcookie("total",0);
header("Location:panier.php");

?>