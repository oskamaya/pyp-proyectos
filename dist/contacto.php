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
            <form class="form-horizontal" action="process.php" method="post" id="contactForm">
              	<div class="form-group">
                	<label for="inputName" class="col-sm-3 control-label">Nombres</label>
                	<div class="col-sm-9">
                  	<input id="cname" type="text" class="form-control" name="name" placeholder="Escriba su nombre" required>
               	</div>
             	</div>
              	<div class="form-group">
               	<label for="inputLastname" class="col-sm-3 control-label">Apellidos</label>
                	<div class="col-sm-9">
                  	<input id="clastname" type="text" class="form-control" name="lastname" placeholder="Apellidos" requiered>
                	</div>
              	</div>
              	<div class="form-group">
               	<label for="inputEmail" class="col-sm-3 control-label">Email</label>
                	<div class="col-sm-9">
                  <input id="cemail" type="email" class="form-control" name="email" placeholder="Email" required>
               </div>
              	</div>
              	<div class="form-group">
               	<label for="message" class="col-sm-3 control-label">Su mensaje</label>
                	<div class="col-sm-9">
                  	<textarea id="ccomment" class="form-control" name="message" rows="3" requiered></textarea>
                	</div>
              	</div>
              	<div class="form-group">
                	<div class="col-sm-offset-3 col-sm-9">
                  	<button type="submit" class="btn btn-primary">ENVIAR DATOS</button>
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
          <a href="http://instagram.com/pyp_proyectos" title="PyP Proyectos en Instagram">
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
   <!-- jquery validaion link -->
   <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
   <script>
   $().ready(function) {
      ("#contactForm").validate({
        	rules: {
        		name: {
        			required: true,
        			minlenght: 2
        		},
        		lastname {
        			required: true,
        			minlenght: 2
        		},
        		email {
        			required: true,
        			email. true
        		},
        		message {
        			required: true,
        			minlenght: 10
        		}
        	},
        	messages: {
        		name: {
					required: "Ingrese un nombre válido por favor"
        			minlenght: "Un nombre no puede tener una sola letra"
        		},
        		lastname: {
        			required: "Ingrese un apellido válido por favor"
        			minlenght: "Un apellido no puede tener una sola letra"
        		},
        		email: {
        			required: "Ingrese un email por favor"
        			email: "Un nombre un email válido por favor"
        		},
        		message: {
        			required: "Ingrese su mensaje"
        			minlenght: "Su mensaje no puede ser tan corto"
        		}
        	}
     	});
   }






    </script>
  </body>
</html>