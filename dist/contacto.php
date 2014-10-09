<?php

$hasError = false;
$sent = false;

if(isset($_POST['submitform'])) {
  $name = trim(htmlspecialchars($_POST['fname'], ENT_QUOTES));
  $lastname = trim(htmlspecialchars($_POST['flastname'], ENT_QUOTES));
  $email = trim($_POST['femail']);
  $message = trim(htmlspecialchars($_POST['fmessage'], ENT_QUOTES));

  $fieldsArray = array(
    'fname' => $name,
    'flastname' => $lastname,
    'femail' => $email,
    'fmessage' => $message
  );

  $errorArray = array();

  foreach ($fieldsArray as $key => $val) {
    switch ($key) {
      case 'fname':
      case 'flastname':
      case 'fmessage':
        if(empty($val)) {
          $hasError = true;
          $errorArray[$key] = ucfirst($key) . "El campo ha quedado vacío";
        }
        break;
      case 'femail':
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $hasError = true;
          $errorArray[$key] = "Email inválido";
        } else {
          $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        }
        break;
    }  
  }

  if($hasError !== true) {
    $to           = "oskamaya@yahoo.com.co";
    $subject      = "Contacto - PYP Proyectos";
    $msgcontents  = "Nombre: $name<br>Apellidos: $lastname<br>Email: $email<br> Mensaje: $message";
    $headers      = 'From: $name <$email>' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
    $mailsent = mail($to, $subject, $msgcontents, $headers);
    if ($mailsent) {
      $sent = true;
      unset($name);
      unset($lastname);
      unset($email);
      unset($message);
    }
  }     
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>P&P Proyectos - Proyectos con Sentido</title>

     <!-- Bootstrap -->
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/styles.css" rel="stylesheet">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
   <!-- <div class="container"> starts container-->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Brand</a> -->
            <a href="index.html" class="navbar-brand"><img src="images/logo-pp.svg"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1"
          >
            <ul class="nav navbar-nav">
              <li><a href="index.html">INICIO</a></li>
              <li><a href="servicios.html">SERVICIOS</a></li>
              <li><a href="proyectos.html">PROYECTOS</a></li>
              <li><a href="equipo.html">EL EQUIPO</a></li>
              <li class="active"><a href="#">CONTACTO</a></li>
            </ul>
            <ul id="sel-lang" class="nav navbar-bar navbar-right">
              <form class="form-inline">
                <div class="form-group">
                  <label class="control-label">Idioma/Language</label>
                  <select id="selectLang1" class="form-control">
                    <option>Español</option>
                    <option>English</option>
                  </select>
                </div>
              </form>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </div>
    </nav>
    <div class="head-contact">
      <div class="container">
        <h1>ESCRÍBANOS</h1>
      </div>
    </div>
    <!-- main container  -->
    <div id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6" id="form-cont">
            <h3>Complete los siguientes datos y estaremos respondiendo a sus inquietudes a la brevedad.</h3>

            <!-- formulario -->
            <form id="contactForm" method="post" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
                <?php  
                  if($sent === true) {
                    echo "<h2 class='success'> Gracias, su mensaje ha sido enviado satisfactoriamente </h2>";
                  } elseif($hasError === true) {
                    echo '<ul class="error_list">';
                    foreach($errorArray as $key => $val) {
                      echo "<li>" . ucfirst($key) . " field error - $val</li>";
                    }
                    echo '</ul>';
                  }
                ?>

                <div class="form-group">
                  <label for="inputName" class="col-sm-3 control-label">Nombres</label>
                  <div class="col-sm-9">
                    <input id="name" type="text" class="form-control" name="fname" value="<?php echo(isset($name) ? $name : ""); ?>">
                </div>
              </div>
                <div class="form-group">
                <label for="inputLastname" class="col-sm-3 control-label">Apellidos</label>
                  <div class="col-sm-9">
                    <input id="lastname" type="text" class="form-control" name="flastname" value="<?php echo(isset($lastname) ? $lastname : ""); ?>">
                  </div>
                </div>
                <div class="form-group">
                <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                  <input id="email" type="email" class="form-control" name="femail" value="<?php echo(isset($email) ? $email : ""); ?>">
               </div>
                </div>
                <div class="form-group">
                <label class="col-sm-3 control-label">Su mensaje</label>
                  <div class="col-sm-9">
                    <textarea id="message" class="form-control" name="fmessage" rows="3" value="<?php echo(isset($message) ? $message : ""); ?>"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <input type="submit" name="submitform" class="btn btn-primary" value="ENVIAR DATOS">
                  </div>
                </div>
            </form>
            <!-- termina el formulario -->

          </div>
          <div class="col-md-6" id="pp-info">
            <div class="pp-pin">
              <img src="images/pp-pin.png">
            </div>
            <div class="popover bottom pop-wider">
              <div class="arrow "></div>
              <h3 class="popover-title">NUESTRAS OFICINAS</h3>
              <div class="popover-content">
                <div class="img-loc">
                  <img src="images/edificio-terpel.jpg" class="img-responsive">
                </div>
                <div class="add-loc">
                  <address>
                    Carrera 7 No. 75-51 Oficina 302<br>
                    PBX 519-0905<br>
                    Bogotá, DC, Colombia<br>
                    <a href="mailto:empresa@pyp-proyectos.com">contacto@pyp-proyectos.com</a>
                  </address>
                </div>     
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- footer -->
    <footer id="contact-ft">
      <div class="container">
        <div class="navbar-left">
          <a href="" title="PyP Proyectos en Twitter">
            <img src="images/twitter.svg">
          </a>
          <a href="http://instagram.com/pyp_proyectos" target="_blank" title="PyP Proyectos en Instagram">
            <img src="images/instag.svg">
          </a>
        </div>
        <address>
          <strong>PyP Proyectos S.A.S.</strong><br>
          Carrera 7 No. 75-51 Oficina 302<br>
          Bogotá DC, Colombia<br>
          PBX: 519-0905
        </address>
      </div>
    </footer>
    
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- jquery validation link -->
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#contactForm").validate({
      rules: {
        fname: {
          required: true,
          minlength: 2
        },
        flastname: {
          required: true,
          minlength: 2
        },
        femail: {
          required: true,
          email: true
        },
        fmessage: {
          required: true,
          minlength: 10
        }
      },
      messages: {
        fname: {
          required: "Este campo es obligatorio",
          minlength: "Un nombre no puede tener una sola letra"
        },
        flastname: {
          required: "Este campo es obligatorio",
          minlength: "Un apellido no puede tener una sola letra"
        },
        femail: {
          required: "Ingrese tu dirección de correo",
          email: "Ingresa una dirección de correo válida"
        },
        fmessage: {
          required: "Ingrese su mensaje", 
          minlength: "Su mensaje no puede ser tan corto"
        }
      }
    });
   });
  </script>
  </body>
</html>