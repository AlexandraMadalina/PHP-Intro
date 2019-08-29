<?php
session_start();

if(isset($_GET['error'])){
if($_GET['error'] == "emptyfields"){
    $message = "Please select an option";
   echo "<p class=\"d-block w-50 p-2 bg-danger text-white text-center mx-auto\">{$message}</p>";
}
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
    <title>Home</title>
</head>

<body>
    <form action="lottery.php" method="post" class="w-25 p-3 mx-auto text-center">
        <div class="form-check">
            <img src="Img/pizza.png" alt=""><input type="radio" name="option" value="pizza">
        </div>
        <div class="form-check">
            <img src="Img/hamburger.png" alt=""><input type="radio" name="option" value="hamburger">
        </div>
        <div class="form-check">
            <img src="Img/fries.png" alt=""><input type="radio" name="option" value="fries">
        </div>
        <button type="submit" class="btn btn-success mt-4">Try yout luck</button>
    </form>
</body>

</html>