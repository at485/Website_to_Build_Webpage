<?php
	$name=$_REQUEST['nm'];
	$ing=$_REQUEST['ing'];
	$recipe=$_REQUEST['recipe'];
	$color=$_REQUEST['color'];
	
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, search, form, icons" />

	<title>Footer with a Search Form</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-search.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


</head>
<body bgcolor="<?php echo $color;?>">
		<div style='background-color:#FFFF66;width:100%;height:60px;'>
			<?php echo "<h1>Recipe Name: " . $name . "</h1>" ; ?>
		
		</div>	
		
		
			<div style='background-color:#FFFF99;float:left;width:150px;overflow:hidden;height:300'>
				<?php 
					echo "<h2><b> Ingrediants: </b></h2>";
					echo "<h2>" . $ing . "</h2>";
				?>
				
				
			</div>	
			<div style='height:300'>
		<h3> Recipe: </h3>
		<h3><?php	echo $recipe; ?></h3>
		
		</div>
		<div align="right">
			<a href="download.php?filename=download3.txt">Rs.50/-<b>DOWNLOAD</b></a>
		</div>
		
		 <footer class="footer-distributed">

			<div class="footer-left" style='background-color:#FFFF99;width:100%' >

				<p class="footer-company-name">Company Name: ©designs-ramp.tk; 2015</p>

			</div>

			

		</footer>
		
	</body>
</html>