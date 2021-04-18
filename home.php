<!DOCTYPE html>
<html>
<head>
	<title> This is the title. </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/framework.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/af5649ea4c.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.typekit.net/gve2jgq.css">
</head>
	<body>

		<div class="row main">

			<div class="row text-white">

				<div class="col-3 logo">sz.</div>

				<div class="col-3"></div>

					<div class="col-6 nav">
						<div class="nav-links">
							<a href="development.html">development</a>
						</div>
						<div class="nav-links">
							<a href="design.html">design</a>
						</div>
						<div class="nav-links">
							<a href="home.php">home</a>
						</div>
					</div>




			</div>

				<div class="row text-center text-white">
					<h3 class= "intro">i'm sam zobott</h3>
					<h1 class="title">web designer <br>& developer</h1>
				</div>

		</div>

		<div class="row aboutme">
			<div class="col-12 words wordstwo">about me.</div>
		</div>


		<div class="row">
			<div class="col-5">
				<div class="col-4"></div>
				<div class="col-8 me">
					<img src="img/me.jpg">
				</div>	
			</div>
			<div class="col-7">
				<div class="col-12 about">
					<div class="col-10 inside">
						<h5>hello.</h5>
						<h5>__________</h5>
						<p>Sam Zobott is a Web Designer and front end web developer, with experience in designing all types of graphics and websites using HTML and CSS. Sam would love to help you with whatever it is you are looking for, design or development. Reach out!</p>
					</div>
				</div>
			</div>

			<div>
				<div class="col-12 spacerone"></div>
			</div>

		<div class="row contact-title">
			<div class="col-12 words wordstwo">contact.</div>
		</div>



		<?php
		 //if there is a post
		if(!empty($_POST)){
		//var_dump($_POST);

		$server = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "testForm";

		// connect to the database
		$conn = new mysqli($server, $username, $password, $dbname);

		if($conn->connect_error){
			die('something has gone wrong');
		}else{
			//echo "yeah it worked!";
		}

		$sql = "INSERT INTO contacts (name, email, message)
		VALUES (
		'".$_POST['name']."',
		'".$_POST['email']."',
		'".$_POST['message']."'
		)";

		if($conn->query($sql) === TRUE){
			$success = "yes";
		} else{
			die("you did not save a record");
		}

		}
		 ?>

		 <div class="row container">
			<div class="col-md-12 col-2">
		</div>
	
			<form class="col-md-12 col-8" method="POST" action="">
				<input class="col-s-12 col-6" type="text" name="name" placeholder= "name">
				<input class="col-s-12 col-6 mt-0 mt-s-1" type="text" name="email" placeholder= "email">
				<textarea class="col-12 mt-1" name="message..." placeholder= "message"></textarea>
				<input class="mt-1 col-s-12" type="submit" value="submit">
			</form>

		<div class="row container">
			<div class="col-md-12 col-2">
		</div>
	</div>

		</div>


		<footer class="footer">
			<div class="icon">
				<a href="https://www.linkedin.com/" target="_blank">
				<img src="img/linkedin.png"></a>
			</div>

			<div class="icon">
				<a href="https://www.pinterest.com/" target="_blank">
				<img src="img/pinterest.png"></a>
			</div>


			<div class="icon">
				<a href="https://www.instagram.com/" target="_blank">
				<img src="img/insta.png"></a>
			</div>

		</footer>
		
	





	</body>
</html>
<script type="text/javascript" src="js/index.js"></script>
<script>
	var success = "<?php echo $success; ?>";
</script>
























