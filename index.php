<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos/inicio.css">
  <link rel="shortcut icon" href="imagenes/UMB.ico">
	<title>SIGEP | Docentes UMB - 2016</title>
</head>
<body>
	
  <form action="php/validar.php" method="POST">
          <center><img   class="subimage" src="imagenes/UMB.jpg" ></center> 
         <input type="text"   name="user" placeholder="&#128272;  Nombre de Usuario" maxlength="15"  required/>
         <input type="password"  name="pass"  placeholder="&#128272;  Contraseña" maxlength="20"  required/>
         <input type="submit" value="Ingresar">
         <center><a class="enlace" href="recordar/recordar.php">Olvide Mi Contraseña</a></center>
 </form>
</body>
</html>
