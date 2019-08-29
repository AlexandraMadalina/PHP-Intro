<?php
session_start();
if(!isset($_SESSION['preference'], $_SESSION['movies'], $_SESSION['shows'])){
	$_SESSION['preference'] = array();
	$_SESSION['movies'] = array();
	$_SESSION['shows'] = array();
}
?>

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
?>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active " id="country-tab" data-toggle="tab" href="#country" role="tab" aria-controls="country"
				aria-selected="true">
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
	<form method=></form>
	<?php
	$list = "<table class=\"table w-25\">
	<thead>
    <tr>
      <th scope=\"col\">Key</th>
      <th scope=\"col\">Value</th>
    </tr>
  </thead>";
	foreach($_REQUEST as $key=>$value){
		$list.= "<tr> 
				<td>$key</td>
				<td>$value</td>
				</tr>";
		
	}
	$list.="</table>";
	echo $list;

	class Movie{
		private $mov1;
		private $mov2;
		private $mov3;
		private $mov4;
		private $mov5;
		
		public function __construct($one, $two,$three, $four, $five){
			$this->mov1 = $one;
			$this->mov2 = $two;
			$this->mov3 = $three;
			$this->mov4 = $four;
			$this->mov5 = $five;
		}
	public function list(){
		$properties = get_object_vars($this);
		$list = "<ul class=\"list-group\">";
		foreach($properties as $key=>$value){
			$list .=  "<li class=\"list-group-item\">{$key}: {$value}</li>";
		}
		$list .="</ul>";
		return $list;
	}

}
	class Show{
		private $show1;
		private $show2;
		private $show3;
		private $show4;
		private $show5;
		
		public function __construct($one, $two,$three, $four, $five){
			$this->show1 = $one;
			$this->show2 = $two;
			$this->show3 = $three;
			$this->show4 = $four;
			$this->show5 = $five;
		}
	public function list(){
		$properties = get_object_vars($this);
		$list = "<ul class=\"list-group\">";
		foreach($properties as $key=>$value){
			$list .=  "<li class=\"list-group-item\">{$key}: {$value}</li>";
		}
		$list .="</ul>";
		return $list;
	}
	
	}
	$newMovie = new Movie($_POST['mov1'], $_POST['mov2'], $_POST['mov3'], $_POST['mov4'], $_POST['mov5']);
	$newSow = new Show($_POST['show1'], $_POST['show2'],$_POST['show3'],$_POST['show4'],$_POST['show5']);
var_dump($newMovie);
var_dump($newSow);
class Data{
	public	$movies;
	public $shows;
	public function __construct($arrMovie, $arrShow){
		$this->movies = $arrMovie;
		$this->shows = $arrShow;
	}
	
}
$data_object = new Data($newMovie, $newSow);
echo ($data_object->movies->list());

	?>
	<form action="superdata.php" method="post">
	<button type="submit">Data</button>
	</form>

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