<?php

function hasil(){
	$string = $_POST['string'];
	$array = str_split($string);

	foreach ($array as $arr) {
		echo $arr;
		echo hiddenChar();
	}
}	

function hiddenChar()
{
	$isi = "<font style='color:transparent;font-size:0px'>".rand(1,999)."</font>";
	return htmlspecialchars($isi);
}

?>

<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Letter Encryption - Spammer ID</title>
	
	</head>
	<body>

	<div class="container mt-5">
		<p class="h3 text-center">Encrypt text with HTML Hidden Characters</p>
	</div>

	<!-- input -->
	<div class="container mt-5">
		<div class="card">
			<h5 class="card-header">Enter Text</h5>
			<div class="card-body">
				<form method="post" action="">
					<div class="form-group">
						<textarea class="form-control" id="string" name="string" rows="5" required=""></textarea>
					</div>
					<button type="submit" class="btn btn-danger">Let's Encrypt</button>
				</form>
			</div>
		</div>
	</div>

	<!-- output -->
	<div class="container mt-3">
		<div class="card">
			<h5 class="card-header">
				Result of Encryption 
				<button type="button" class="btn btn-outline-danger btn-sm float-right" onclick="copy()">Copy</button>
			</h5>
			<div class="card-body">
				<div class="form-group">
					<textarea class="form-control" id="output" name="output" rows="5"><?php	if (isset($_POST['string'])) {hasil();}	?></textarea>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-3">
		<blockquote class="blockquote text-center">
  		<footer class="blockquote-footer">Dedicated to Spammer ID</cite></footer>
		</blockquote>	
	</div>	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function copy() {
			var copyText = document.getElementById("output");
			copyText.select();
			document.execCommand("copy");
		}	
	</script>
	
	</body>
</html>
