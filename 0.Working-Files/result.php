<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Results</title>
</head>

<body>
	<?php
$method = $_SERVER['REQUEST_METHOD'];
echo $method;

?>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active " id="country-tab" data-toggle="tab" href="#country" role="tab"
				aria-controls="country" aria-selected="true">
				<?php
				 echo $method =='GET'?'Favorite country':'Top 5 tv shows';
				 ?>
			</a>
		</li>
		<li class="nav-item <?php echo $method =='POST'?'hidden':'show';?>">
			<a class="nav-link <?php echo $method =='POST'?'hidden':'show';?>" id="badMovie-tab" data-toggle="tab"
				href="#badMovie" role="tab" aria-controls="badMovie" aria-selected="false">
				<?php
				 echo $method =='GET'?'Worst movie':'Top 5 movies';
				 ?>
			</a>
		</li>

	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="country" role="tabpanel" aria-labelledby="country-tab">
			<ul class="list-group">
				<?php
			if($method == 'GET'){
				echo '<li class="list-group-item">'.$_GET['country'].'</li>';
			}else{
				echo "<li class=\"list-group-item\">{$_POST['show1']}</li>
				<li class=\"list-group-item\">{$_POST['show2']}</li>
				<li class=\"list-group-item\">{$_POST['show3']}</li>
				<li class=\"list-group-item\">{$_POST['show4']}</li>
				<li class=\"list-group-item\">{$_POST['show5']}</li>";
			}
			?>

			</ul>
		</div>
		<div class="tab-pane fade" id="badMovie" role="tabpanel" aria-labelledby="badMovie-tab">
			<ul class="list-group">
				<?php
			if($method == 'GET'){
				echo '<li class="list-group-item">'.$_GET['bad_movie'].'</li>';
			}else{
				echo "<li class=\"list-group-item\">{$_POST['mov1']}</li>
				<li class=\"list-group-item\">{$_POST['mov2']}</li>
				<li class=\"list-group-item\">{$_POST['mov3']}</li>
				<li class=\"list-group-item\">{$_POST['mov4']}</li>
				<li class=\"list-group-item\">{$_POST['mov5']}</li>";
				}
				?>
			</ul>
		</div>

	</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>

</html>