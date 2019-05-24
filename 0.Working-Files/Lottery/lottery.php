<?php

if(!empty($_POST['option'])){
    $options = array("fries", "hamburger", "pizza");
    $random = rand(0,2);
    $luckyEmoji = $options[$random];
    $user_choise = $_POST['option'];
    if( $user_choise == $luckyEmoji){
    $message = "Congratulation. You won!";
    
    }else{
      $message = "You lose!";
     
    }
  
}else{

  header("Location: index.php?error=emptyfields");
  exit();
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

  
<p class="d-block w-50 p-2 bg-danger text-white text-center mx-auto"><?php echo $message?></p>
  <div class="container w-50 mx-auto">
    <div class="row">
      <div class="col text-center">
        <h2>Your choice</h2>
        <img src="<?php echo "Img/{$_POST['option']}.png"?>" alt="#">
      </div>
      <div class="col text-center">
        <h2>Computer choice</h2>
        <img src="<?php echo "Img/{$luckyEmoji}.png"?>" alt="#">
      </div>
    </div>
  </div>
  <form action="index.php" method="post">

  <button type="submit" class="btn btn-secondary d-block mx-auto">Try again</button>
  </form>
  
</body>

</html>