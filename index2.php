<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
header("location:index.php");
}elseif ($_SESSION['rol']==1) {
header("location:admin.php");
}
?>
	
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PUBLISH FAST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
      

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<!DOCTYPE html>
<h1 class="span">Servicios Publicitarios "PublishFast"</h1></div>
</header>
    
    
    

  <!-- Navbar
    ================================================== -->
<!DOCTYPE html>

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="index2.php">Inicio</a></li>
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
				<li><a href="">Bienvenido <strong> </strong> </a></li>
              <li><a href="connect_db.php"> Quienes somos </a>
                             
            </li>
               <li><a href="connect_db.php"> Municipios </a>
            
            </li>
              <li><a href="connect_db.php">  Servicios</a>
                 
            </li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>
                
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
</html><!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/celudiji.pjg.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Publica Tu Negocio</h4>
				  <p>
				  
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/robot.pjg.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Ofrece tus productos</h4>
				  <p>
				  
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/blanco.pjg.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>haz que tu negocio sea el mejor en el Mercado </h4>
				 
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Servicios que ofrece</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Ubicacion de tu negocio</h4>
					<a href="al.php"><small>Ver detalles</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Visita cada municipio</h4>
					<a href="te.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Consulta a cada negocio</h4>
					<a href="fi.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Busca tu producto</h4>
					<a href="fp.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Eventos en Chontales</h4>
					<a href="fm.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4> Destinosde Chontales</h4>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>

	
			<div class="span12">
				<div class="well well-small">
					<h4 >Se parte y conoce mejor lugares turisticos en Chontales</h4>
					<a href="edf.php"><small>Ver detalles</small></a>

					
					<h4>Negocios que te pueden realizar envio de tu producto</h4>
					<a href="mie.php"><small>Ver detalles</small></a>


				</div>
			</div>
		
			
			
</div>
<h3>Sobre nosotros</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">"Quienes somos</h3>	
	<img src="images/somos.pjg.jpg" alt="#"/>
	<div class="caption">
	<h5></h5>	
	<p align="justify">
	
PublishFast, un comercio electronico que ofrece servicios publicitarios, para los distintos negocios que existen el en municipio de chontales.
	</p>
	<a class="pull-right" href="al.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">PublishFast</h3>	
	<img src="" />
	<div class="caption">
	<h5> Mision y Vision</h5>	
	<p align="justify">
                         
        PublishFast, es un Apps web privada que ofrece servicios publicitarios de aceptacion para promover las micro y las medianas empresas del municipio de juigalpa chontales, capasces de involucrar las nuevas formas de comercio electronico, diseñando un medio que obtenga beneficios para los clienets a nivel municipal. <br><br>
        Sera una Apps web capaz de brindar servicios publicitarios para la gestion de los puntos comerciales del municipio, llegar hacer uno de los mejores en el mercado comercial permitiendo que la poblacion chontaleña visualice el entorno comercial que existe el el departamento de chontales.
	</p>
	<a class="pull-right" href="ta.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Contactenos</h3>	
	<img src="images/computacion.jpg"/>
	<div class="caption">
	<h5></h5>	
	<p align="justify">
	Telefono: 83663323- 55158315 <br><br>
        Correo:Avilesyelin3gmail.com 
               Haroldsalablancagmail.com
           

	</p>
	<a class="pull-right" href="cb.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Importante</h3>	
		<p>
		Lo mejor para nosotros es proporcionar un acceso libre, informacion que le ayude a encontrar lo que esta buscando, que se ofrecen en sus modalidades de estudio presencial y a distancia para educadores, estudiantes y autodidactas de todo el mundo.<br><br></b></b>
		Crear un modelo eficiente basado en estándares generados de OCW Consortium, UNIVERSIA, la tendencia tecnológicas de la Web Social y Semántica.
		</p>
	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3> Lo que vendrá</h3>
		<h5>Nuevos cursos</h5>	
		<p>
		Tendremos una página actualizada y nuestros miembros podrán contar con todos nuestros cursos disponibles, asi como la visualización de nuevos cursos que se añadan a la página.
		
		</p>
		
	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Jelin María Aviles, Harold Salablanca - Noviembre 2018 <br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>