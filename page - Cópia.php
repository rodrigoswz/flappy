<html>
	<head><meta charset="utf-8">
		<title>page</title>
		<?php
			session_start();
				if(!isset ($_SESSION['ra']) == true) {
					unset($_SESSION['ra']); 
					header('location:index.php'); 
				}		
								
				if(isset($_SESSION['views'])){
					$_SESSION['views'] = $_SESSION['views']+1;
				}else{
					$_SESSION['views'] = 1;
				}
				$aluno = $_SESSION['ra']; ?>
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
			<link href='//fonts.googleapis.com/css?family=RobotoDraft:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en' rel='stylesheet' type='text/css'>
			
			<style>
			#screen canvas{
				margin: 0 auto;
				height: 100%;
			}
			</style>
	</head>
	<body>
		<center><p class='teste'><?php
				echo $_SESSION['ra'];
				echo "<br>";
				echo $_SESSION['nome'];
				echo "<br>";
				echo $_SESSION['views'];
		?></p></center>
		<div id="loading">carregando</div>
		<div id="screen"></div>
		<div id="github"></div>
		

		<script src="index.min.js?v=02131824"></script>
	</body>
</html>