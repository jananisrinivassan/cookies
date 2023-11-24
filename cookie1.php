<?php
// setcookie("nom","Zied");
// unset($_COOKIE["nom"]);
// if(isset($_COOKIE["nom"])){
//     echo $_COOKIE["nom"];
// }else{
//     echo "pas de cookie";
// }
$t_mn = 60;
$t_hr = 60 * 60;
$t_jr = $t_hr * 24;
$t_an = $t_jr * 365;
var_dump(time());
setcookie("nom","Zied",time() + ($t_an*10));
var_dump($_COOKIE["nom"]);
?>