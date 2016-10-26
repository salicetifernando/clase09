<?php

if($_POST["data"] == "login")
{
	setcookie("usuario", $_POST["user"], time() + (86400 * 30), "/clase09/");
	setcookie("contraseña",$_POST["pass"],time() + (86400 * 30), "/");

}else
{
	echo "algo fallo!";
}
header("location:clase09.php");
?>