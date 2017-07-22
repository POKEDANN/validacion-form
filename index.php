<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Depilacion</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="Brand" src="img/logo.png">
          </a>
        </div>
      </div>
    </nav>

    <section id="mainBg">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>¡Sin VELLO <span>para siempre!</span></p>
            <strong>Depilación definitiva</strong> y <strong>Rejuvenecimiento de la piel</strong>
            <p><img src="img/bullets-01.png"> Protocolo exclusivo y patentado</p>
            <p><img src="img/bullets-01.png"> Resultados en tan solo 6 sesiones</p>
            <p><img src="img/bullets-01.png"> Paquetes ilimitados</p>
          </div>
          <div class="col-sm-6">
            <form action="./contacto.php" method="post">
              <p>Diagnóstico personalizado y sesión de prueba gratis</p>
              <div class="form-group">
                <input class="form-control" id="name" name="name" placeholder="Nombre y apellido">
              </div>
              <div class="form-group">
                <input class="form-control" id="email" name="email" placeholder="Correo Electrónico">
              </div>
              <div class="form-group">
                <input class="form-control" id="cel" name="cel" placeholder="Celular">
              </div>
              <div class="checkbox">
                <p>Horario de contacto</p>
                <label>
                  <input type="checkbox" value="1" name="horario[]">Mañana
                </label>
                <label>
                  <input type="checkbox" value="2" name="horario[]">Tarde
                </label>
                <label>
                  <input type="checkbox" value="4" name="horario[]">Noche
                </label>
              </div>
              <select name="sucursal" id="">
                <option value="polanco">Polanco</option>
                <option value="condesa">La Condesa</option>
                <option value="roma">Roma</option>
              </select>
              <button type="submit" name="iniciar" class="btn btn-default">Iniciar tratamiento >></button>
            </form>
              <p>derechos reservados</p>
          </div>
        </div>
      </div>
    </section>

    <section>
      que tranza
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>