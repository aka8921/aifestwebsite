
<!DOCTYPE html>
<html>
<head>
	<title>AI FEST 2.0</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="speakers.css">
	<link rel="stylesheet" type="text/css" href="schedule.css">
	<link rel="stylesheet" type="text/css" href="app.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
	<?php
		include_once('navbar.php');
	?>

	<div class="container">
		<div class="row topRow">
			<div class="col-sm-12 text-center fontWhite">
				<h1>Date goes here</h1>
			</div>
		</div>	
	</div>

	<div class="bottom_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="section_title fontWhite">Speakers</h2>
				</div>	
			</div>
			<div class="speakercontentrow">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-3 text-center">
					<img src="pic.png" class="speaker_img">
					<p class="speaker_text">Somebody</p>
				</div>
				<div class="col-sm-3 col-sm-offset-3 text-center">
					<img src="pic.png" class="speaker_img">
					<p class="speaker_text">Somebody</p>
				</div>
				<div class="col-sm-3 col-sm-offset-3 text-center">
					<img src="pic.png" class="speaker_img">
					<p class="speaker_text">Somebody</p>
				</div>
				<div class="col-sm-3 col-sm-offset-3 text-center">
					<img src="pic.png" class="speaker_img">
					<p class="speaker_text">Somebody</p>
				</div>
			</div>
			</div>
			<?php 
				include_once('schedule.php');
				include_once('app.php');
				include_once('contact.php');
			?>
		</div>
	</div>

	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

<?php
	function printtextBox($label, $type, $max, $name, $placeholder, $value){
		echo '<label class="control-label">';
			echo $label;
		echo '</label>';
		echo '<input type="' . $type . '" class="form-control" maxlength="' . $max . '" name="' . $name . '" placeholder="' . $placeholder . '" value="' . $value . '"/>';
	}

	function printSubmit($label){
		echo '<div style="width:100%;text-align:center;">';
			echo '<br/>';
			echo '<button class="apply_btn" type="submit">';
				echo $label;
			echo '</button>';
		echo '</div>';
	}

	function printTextarea($label, $name){
		echo '<label class="control-label">';
			echo $label;
		echo '</label>';
		echo '<textarea class="form-control" name="' . $name . '"></textarea>';
	}

	function printAdd(){
		echo '<div style="width:100%;text-align:center;">';
			echo '<br/>';
			echo '<input type="button" class="apply_btn" id="add" value="Add Group Members(If Any)" onClick="increment()">';
			echo '</input>';
		echo '</div>';
	}
?>