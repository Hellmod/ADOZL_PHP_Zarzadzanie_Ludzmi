<?php
session_start();
require_once('subpage/baza.php');

?>
<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
	<meta name="author" content="Rafał Miśkiewicz" />
	<title>Rozdawane ulotek</title>


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>


	<?php
	if (isset($_POST['wyslij'])) {
		$l = @$_POST["Login"];
		$p = md5(@$_POST["Haslo"]);
		$q = "SELECT * from user where LOGIN='" . $l . "' and PASSWORD='" . $p . "'";
		$w = mysql_query($q);
		$wiersz = @mysql_fetch_array($w);
		if (is_null($wiersz['LOGIN'])) echo '<script>alert("zły login lub chasło");</script>';
		else {
			$_SESSION['Login'] = $_POST['Login'];
			$_SESSION['Typ'] = $wiersz['TYPE'];
			$_SESSION['ID'] = $wiersz['ID'];
			header('Location: index.php');
		}

		if ($_SESSION['Typ'] == 'Admin')
			header('Location: index.php?id=subpage/Admin');
		else if ($_SESSION['Typ'] == 'User')
			header('Location: index.php?id=subpage/User');
		else
			header('Location: index.php?id=subpage/start');
	} else if (isset($_POST['Zarejestruj'])) {
		header('Location: index.php?id=subpage/rejestracja');
	} else { }
	?>
<body>
	<header>

		<nav class="navbar navbar-dark bg-jumpers navbar-expand-lg">
			<a class="navbar-brand" href="index.php?id=subpage/start"> Home</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="mainmenu">

				<ul class="navbar-nav mr-auto">

					<li class="nav-item">
						<a class="nav-link" href="index.php?id=subpage/test"> Praca </a>
					</li>

					<?php 
						if(isset($_SESSION['ID'])) 
						echo'
							<li class="nav-item">
							<a class="nav-link" href="index.php?id=subpage/konto"> Konto </a>
							</li>
						';
						if(@$_SESSION['Typ']=="Admin") 
						echo'
							<li class="nav-item">
							<a class="nav-link" href="subpage/downolad.php"> Downolad </a>
							</li>
						';
					?>


				</ul>


			</div>
		</nav>

	</header>
	<main>
		<section class="jumpers">

			<div class="container">

				<header>
					<div class="row">
						<div class="col-sm-6 col-md-8">
							<h1>Rozdawanie ulotek</h1>
							<p>W tej sekcji specjalnie dla Was prezentujemy sylwetki zawodników, których znamy z rywalizacji w konkursach pucharu świata oraz olimpijskich. Poznaj osiągnięcia, statystyki, a także ciekawostki na temat najbardziej rozpoznawalnych zawodników!</p>
						</div>
						<div class="col-sm-6 col-md-4 p-5">

								<?php
								@$i = $_GET['id'];
								if (isset($_SESSION['Login']))	require('subpage/wylogowywanie.php');
								else 							require('subpage/log.php');
								?>


						</div>
					</div>
				</header>

				<div class="row">

					<div class="my-auto mx-auto">

							<?php
							@$i = $_GET['id'];
							if (!isset($i))	require('subpage/start.php');
							else 				require($i . '.php');
							?>

					</div>


				</div>

			</div>

		</section>
	</main>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"></script>

</html>