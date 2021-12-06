<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
    <link href="../../css/styletitulo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
  </head>
  <body class="body1" background="../../imagenes/lolo.jpg">
    <div class="menu">
      <ul>
        <li><img src=""></li>
        <li><a href="../../index.php" class="hvr-underline-reveal"><b>INICIO</b></a></li>
        <li><a href="../../paginas/catalogo.php" class="hvr-underline-reveal"><b>PRODUCTOS</b></a></li>
        
      </ul>
      <div class="iniciar">
        <a>INICIAR SESIÓN</a>
      </div>
    </div><br><br><br><br><br><br>
    <div class="cuadro_formulario">
      <div class="formulario">
          <div class="login">

            <form action="../../php/validarusuario.php" method="POST" autocomplete="off" class="form">
              <b><a>INICIAR SESIÓN</a></b>
              <div class="group">
                <input type="text" required="required" name="usuario"/><span class="highlight"></span><span class="bar"></span>
                <label><span class="icon-users"></span>Usuario:</label>
              </div>
              <div class="group">
                <input type="password" required="required" name="contra"/><span class="highlight"></span><span class="bar"></span>
                <label><span class="icon-lock"></span>Contraseña:</label>
              </div>
              <div class="btn-box">
                <input class="btn btn-submit" name="enviar" type="submit" value="validar">
                <input class="btn btn-cancel" type="reset" value="cancelar">
              </div>
            </form>
          </div>
          <div class="registro">

            <form action="../../php/registrousuario.php" method="post" autocomplete="off" class="form">
              <b><a>REGISTRARSE</a></b>
              <div class="group">
                <input type="text" required="required" name="nombre"/><span class="highlight"></span><span class="bar"></span>
                <label><span class="icon-users"></span>Nombre:</label>
              </div>
              <div class="group">
                <input type="text" required="required" name="apellido"/><span class="highlight"></span><span class="bar"></span>
                <label><span class="icon-lock"></span>apellidos:</label>
              </div>
              <div class="group">
                <input type="text" required="required" name="usuario"/><span class="highlight"></span><span class="bar"></span>
                <label><span class="icon-lock"></span>nombre de usuario para el sitio:</label>
              </div>
              <div class="group">
                <input type="password" required="required" name="contra"/><span class="highlight"></span><span class="bar"></span>
                <label><span class="icon-lock"></span>contraseña:</label>
              </div>
              <div class="group">
                <input type="text" required="required" name="correo"/><span class="highlight"></span><span class="bar"></span>
                <label><span class="icon-lock"></span>correo:</label>
              </div>
              <div class="btn-box">
                <input class="btn btn-submit" name="enviar" type="submit" value="Registrarse">
                <input class="btn btn-cancel" type="reset" value="cancelar">
              </div>
            </form>
          </div>
      </div>
    </div>

  </body>
</html>
