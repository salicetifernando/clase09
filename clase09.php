<html>
<head>
	<title>LOGIN</title>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax.js"></script>

</head>
<body>
	<div id = "principal">
<input type = "text" name = "usuario" id ="user" value = "<?php if(isset($_COOKIE['usuario'])){ echo $_COOKIE['usuario'];} ?>" />
<input type = "pass" name = "contrasenia" id = "pass"/>
<input type = "button" id = "loguear" value = "LOGUEAR" onclick = "Login()"/>
	</div>
</body>
</html>