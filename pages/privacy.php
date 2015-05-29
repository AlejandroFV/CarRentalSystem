<?php 
	session_start(); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Política de privacidad</title>
		<meta charset='UTF-8' />
		<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
	</head>

	<body id="top">
		<div class="wrapper col1">
			<div id="topbar">
				<p>Tel: (999)2-19-43-79 | Mail: <a href="mailto:AlejandroFV@mail.com">AlejandroFV@mail.com</a></p>
				<ul>
					<?php
						if (!empty($_SESSION['nick_user'])){
							$name_user = $_SESSION['nick_user'];
							//$rol_user = $_SESSION['rol_user'];
							echo "<li> Bienvenido: ".$name_user."</li>";
							echo "<li class='last'><a href='layout/php/closeSession.php'>Cerrar sesión</a></li>";
						}else{
					?>
							<li><a href="pages/login.html">Iniciar Sesión</a></li>
							<li class="last"><a href="pages/register.html">Registrarse</a></li>
					<?php
						}
					?>
					
				</ul>
				<br class="clear" />
			</div>
			<?php
				if (!empty($_SESSION['nick_user'])){
					$rol_user = $_SESSION['rol_user'];
					if ($rol_user == "manager") {
						echo "<div id='topbar'>
								<p class='center'><a href='pages/menuManager.php'>Administrar sistema de autos</a></p>
								<br class='clear' />
							</div>";
					}
				}
			?>
			
		</div>
		
		<div class="wrapper col2">
			<div id="header">
				<div class="fl_left">
					<h1><a href="../index.php">Car Rental System</a></h1>
					<p>¡Los mejores vehículos al mejor precio!</p>
				</div>
				<br class="clear" />
			</div>
		</div>
		
		<div class="wrapper col5">
			<div id="container">
				<h2>Política de privacidad</h2>
				<p>Bienvenido al sitio web de Car Rental System (CRS).</p>
				<p>Este es un ejemplo de la política de privacidad. Aquí "explicamos" que es lo que podemos hacer con la información que nos llega.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ad maxime odio doloribus, odit voluptate ut reprehenderit omnis, debitis sint eligendi animi, adipisci amet impedit doloremque aliquam! Similique, velit saepe.</p>
				<ul>
					<li>Que información recolectamos de los usuarios</li>
					<li>Cómo usamos esa información</li>
					<li>Con quién compartimos esa información</li>
					<li>Cómo accesamos a ella</li>
					<li>Algún cambio en esta política</li>
				</ul>
				<p>Bacon ipsum dolor amet tri-tip corned beef strip steak kevin, salami pastrami pig landjaeger ball tip fatback ribeye prosciutto brisket. Tri-tip sirloin corned beef salami meatloaf kevin tail. Salami t-bone boudin, prosciutto tri-tip meatball strip steak tail picanha bacon. Beef ribs landjaeger brisket turkey ground round, drumstick flank pancetta turducken short ribs pork loin cupim. Jerky drumstick tenderloin spare ribs meatball shoulder beef ribs ham sausage cow pig pork belly pastrami.</p>
				<p>Pig ham ham hock strip steak fatback, tongue bresaola turkey shoulder hamburger ground round swine shank pork. Rump beef ribs filet mignon, corned beef short loin sausage salami leberkas swine beef bacon cow boudin landjaeger ham hock. Swine tongue strip steak tenderloin pork belly. Bacon sirloin venison pastrami jerky, tri-tip chuck doner drumstick short loin brisket boudin. Doner chicken tri-tip, ham hock beef ribs drumstick capicola sirloin tenderloin leberkas meatball tail pig tongue.</p>
				<p>Frankfurter turkey t-bone beef, tongue sausage salami. Kevin venison salami, pig kielbasa boudin fatback shoulder tail chicken ribeye prosciutto tongue ham hock flank. Spare ribs prosciutto andouille bacon ground round turducken. Kevin kielbasa strip steak sirloin beef ribs pig.</p>
				<p>T-bone beef ribs ham doner. Pastrami ball tip fatback prosciutto turkey shoulder. Rump tri-tip short ribs swine spare ribs shank bresaola shankle jerky. Capicola strip steak ball tip prosciutto landjaeger. Pork chop salami pork loin, chicken corned beef frankfurter turducken. Shankle tongue ham hock pork tri-tip.</p>
				<p>Strip steak leberkas cow meatloaf picanha beef andouille prosciutto shankle boudin short loin. Alcatra chuck rump, tenderloin prosciutto doner leberkas. Salami pork belly ground round, strip steak biltong kielbasa jowl capicola spare ribs pork chop short loin bresaola beef ribs. Fatback shank tri-tip, landjaeger rump turducken pork prosciutto andouille venison ribeye meatball porchetta sausage. Ham hock rump tail, ham short loin frankfurter tri-tip shankle.</p>
				<p>Para mayor información, comuníquese al telefono (999) 2 - 19 - 43 - 79 o mándenos un email a <a href="mailto:AlejandroFV@mail.com">AlejandroFV@mail.com</a></p>
			</div>
		</div>
		
		<div class="wrapper col7">
			<div id="copyright">
				<p class="fl_left">Copyright &copy; 2015 - Todos los derechos reservados - <a href="../index.php">CRS</a></p>
				<br class="clear" />
			</div>
		</div>
	</body>
</html>
