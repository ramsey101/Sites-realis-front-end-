<?php 
try{
 $base=new PDO("mysql:host=localhost;dbname=abonnement","root","");
 }
 catch(exception $e){
 die("Erreur : ".$e->getMessage()) ;
 }
$eremail=$erville="";
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 $email = $_POST["mail"];
 $ville = $_POST["ville"];
 $isvalidate=true;
 if(empty($email)){
$eremail="Veuillez bien remplir ce champs svp" ;
$isvalidate=false;
 }
 if(empty($ville)){
$erville="Veuillez bien remplir ce champs svp" ;
$isvalidate=false;
 }
 if($isvalidate==true){
 $req=$base->prepare(
 	"INSERT INTO abonne (email,ville)
 	VALUES(?,?)");
 $req->execute(array($email,$ville));
 echo '<script> alert("Vous etes bien inscrit !") </script>';
 }

}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Rubik|Yanone+Kaffeesatz|Open+Sans|Nunito|Zhi+Mang+Xing&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>



		<title> PiscineBay </title>


		<style type="text/css">
			*{
	margin:0; 
	padding:0;
	font-family: 'Open Sans','Yanone Kaffeesatz','Rubik', 'Zhi Mang Xing','Nunito', cursive, serif,sans-serif ;
}
body{
	box-sizing: border-box;
}
.boite{
	width: 1200px;
	margin: 65px auto 0 auto;
	margin-top: 65px;
	box-sizing: border-box;
}

nav{
	display: flex;
	justify-content: space-between;
	align-items: center;
	background-color: transparent;
	padding-top:2px;
	height: 70px;
	position: fixed;
	margin-left:0px;
	width: 100%;
	top:0;
	transition: .3s;
	align-content: center;
	z-index: 2;
	padding: 0 20px; 
	margin-top: 0px;
}
nav ul a {
	text-decoration: none;
	color: rgb(21, 96, 189);
}
nav a::after{
	content: '';
	display: block;
	width: 0;
	height: 3px;
	background: rgb(21, 96, 189);
	transition:width .3s;
}
nav a:hover::after{
	transition: width .3s;
	width: 100%;
}
nav.blak a::after{
	content: '';
	display: block;
	width: 0;
	height: 3px;
	background: white;
	transition: width .3s;
}
nav.blak a:hover::after{
	transition: width .3s;
	width: 100%;
}
nav ul {
	display: flex;
	margin-right: 25px;
	
}
nav ul li {
	list-style: none;
	margin-left: 35px;
}
nav.blak{
	display: flex;
	justify-content: space-between;
	align-items: center;
	background-color: rgb(21, 96, 189);
	padding-top:2px;
	height: 70px;
	position: fixed;
	margin-left:0px;
	width: 100%;
	top:0;
	transition: .3s;
	align-content: center;
	z-index: 1;
	padding: 0 20px; 
}
nav.blak a {
	text-decoration: none;
	color: white;
}

#carouselExampleFade{
	position:relative;
	z-index: -1;
	
}
#carouselExampleFade img{
	filter: brightness(80%);
}
.carousel-caption h1{
margin-top: -500px;
text-align: center;
font-size: 55px;
}
trait1{
	border-bottom: 3px solid white;
	margin-top: 5px;
	margin-bottom: 5px;
	width: 400px;
	margin-left: 415px;
}
trait{
	border-bottom: 3px solid black;
	margin-top: 5px;
	margin-bottom: 20px;
	width: 215px;
}
.arti{
	box-shadow: 15px -15px -15px 15px #000;
}
.hot{

	display: flex;
	flex-wrap: wrap;
	width: 100%;
	justify-content: space-between;

}
.hot section{
	margin-right: 40px;
	margin-bottom: 40px;
}
.hote{
	display: flex;

	width: 1200px;
}
.resis{
	display: flex;
}


.coin{
	display: flex;
	justify-content: space-around;
	background-image:url('Img/1p.jpg') ;
	background-size: cover;
	background-attachment: fixed;
	height: 320px;
	width: 100%;
}
.coin .container-fluid{
	width: 1200px;
}
.faq{
	color: white;
	margin-left: 400px;
}
.cm{
	width: 300px;
	height: 40px;
	background: rgba(255,255,255, 0.5);
	border: 1px solid white;
	color: white;
}
.news{
	margin-left: 200px;
	color: white;
}
.send{
	width: 120px;
	height: 35px;
	background:rgb(21, 96, 189); 
	color:white;
	border: none;
}

.test2{
	display: flex;
	justify-content: space-between;
}






footer{
	background-color: black;
	color:white;
	text-align: center;
	height: 70px;
	padding: 20px 0 0 0;
	width: 100%;
}


		</style>

				
	</head>
	<body>
		
			<header>
				

					<nav class="navbar navbar-style">
						<div class="container-fluid">
								<div class="navbar-header">
									
								
									<h1>
										<a class="navbar-bran" href="#">
										PiscineBay
										</a>
									</h1>
								</div>
							
								<ul class="nav  navbar-right">
									<li>
										<a href="#propos">
										A propos
										</a>
									</li>
									<li>
										<a href="#hotel">
										Piscines d'hotels
										</a>
									</li>
									<li>
										<a href="#resi">
										Résidences avec piscines
										</a>
									</li>
									<li>
										<a href="#lof">
										FAQ
										</a>
									</li>
									<!--<li>
										<a href="Pages/log.html">
										Connexion
										</a>
									</li>-->
									<li>
										<a href="#lof">
										Inscrivez vous
										</a>
									</li>
								</ul>
							
				   		</div>
					</nav>
					
					<div class="row">
						<div class="col-sm-12">
					<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Img/1a.jpg" height="900" width="1600" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      			<span class="h1"><h1>
					Vous recherchez un cadre ideal avec piscine ?
					<div class="trait1"></div>
					Nous vous facilitons la tache.
				</h1></span>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Img/2a.jpg" height="900" width="1600" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
      			<span class="h1"><h1>
      				Vous recherchez un cadre ideal avec piscine ?
					<div class="trait1"></div>
					Nous vous facilitons la tache.
					
				</h1></span>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Img/3a.jpg" height="900" width="1600" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
      			<span class="h1"><h1>
Decouvrez <br>Les meilleures piscines d'hotels et résidences en Cote d'Ivoire
				</h1></span>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
			</header>
			<!--Fin du menu et debut présentation meilleurs-->
			<div class="container-fluid">
				<div class="row">
			<div class="boite">
					
				<div id="propos">
				<h1 style="color: rgb(21, 96, 189)" >
					A PROPOS
				</h1>
				<div class="trait"></div>
				<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div>
				<!--Hotels-->
				<div id="hotel">
					<div>
						<h1 style="color: rgb(21, 96, 189)">
							Hotels
						</h1>
					</div>
					<div class="trait"></div>
					<!--Chaque hotel-->
					<div class="container-fluid">
					<div class="row">

							
					<div class="hote">
					<div class="hot">
						<?php
						try{
						 $base=new PDO("mysql:host=localhost;dbname=abonnement","root","");
						 $sql='SELECT * FROM hotel ';
						 $q=$base->query($sql);
						 $q->setFetchmode(PDO::FETCH_ASSOC);
						 }
						 catch(exception $e){
						 die("Erreur : ".$e->getMessage()) ;
						 }
						 
						while($row=$q->FETCH()){

						//echo htmlspecialchars($row['nom']);
							echo'<div class="arti">';
						      echo'<p> <img src="'.$row['titre'].'" width="470px" height="250px"></p>';
						      echo'<p width="470px">'.$row['descrip'].'</p>';
						      echo'<p>'.$row['prix'].'</p>';
						      echo '</div>';

						}
							
						?>
					</div>	
					</div>
					</div>	
					</div>
					</div>
				</div>
				<!--Fin Hotels et debut résidences-->

					<!--Chaque résidence-->
					<div>
						<h1 style="color:rgb(21, 96, 189) ">
							Residences
						</h1>
						<div class="trait"></div>
					</div>
					<div class="resis">
				<div id="resi">
					
					
					
					<!--Chaque hotel-->
					<div class="hot">
						<?php
						try{
						 $base=new PDO("mysql:host=localhost;dbname=abonnement","root","");
						 $sql='SELECT * FROM residence ';
						 $q=$base->query($sql);
						 $q->setFetchmode(PDO::FETCH_ASSOC);
						 }
						 catch(exception $e){
						 die("Erreur : ".$e->getMessage()) ;
						 }
						while($row=$q->FETCH()){

						//echo htmlspecialchars($row['nom']);
							echo "<div>";
						      echo'<p> <img src="'.$row['title'].'" width="470px" height="250px"></p> <br>';
						      echo'<p>'.$row['info'].'</p><br>'; 
						      echo'<p>'.$row['price'].'</p>';
						      echo "</div>";
						}

						?>
						</div>
						</div>
						</div>
				
			</div>
			</div>
			</div>
		</div>
			<section id="lof" >
				<div class="container-fluid">
					<div class="row">
						<div class="coin">
				<!--<div>
					<h3>
						Connexion
					</h3>
					<form>
						<input type="email" name="mail" placeholder="Email">
						<br>
						<br>
						<input type="password" name="mdp" placeholder="Mot de passe">
						<br>
						<br>
						<input type="submit" name="log" value="Se connecter">
					</form>
				</div>-->
			
				<div class="news">
					<h3 style="color: white">
						Inscrivez vous à la newsletter 
					</h3>
					<form action="" method="POST">
						<input type="text" name="mail" placeholder="Votre email" class="cm">
						<p><?=$eremail?></p>
						<input type="text" name="ville" placeholder="Votre ville" class="cm">
						<p><?=$erville?></p>
						<input type="submit" name="login" value="S'inscrire" class="send">
					</form>
				</div>
				<div class="faq">
				<p>
					<h3 style="color: white">
						FAQ
					</h3>
				</p>
				<p>
					<h5>
						Lorem ipsum dolor sit amet ?
					</h5>
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.
				</p>
								<p>
					<h5>
						Lorem ipsum dolor sit amet ?
					</h5>
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.
				</p>
			</div>
			</div>
			</div>
			</div>
			</section>
		</div>
			<div>
				<footer>
					Copyright &copy PiscineBay 2020 - NaN3.20
				</footer>
			</div>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(window).on('scroll',function(){
		if($(window).scrollTop()){
			$('nav').addClass('blak');
		}
		else{
			$('nav').removeClass('blak');
		}
	})
	</script>
	</body>
</html>
