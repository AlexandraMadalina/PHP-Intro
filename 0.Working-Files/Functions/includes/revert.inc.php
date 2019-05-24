<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=F, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Functions</title>
</head>
<body class="p-5 mb-2 bg-dark">
<div class="container bg-light rounded shadow py-5 px-5 mt -5 centered">
  <div class="row">
 <?php foreach($_SESSION['revert'] as $element):?>
    <div class="col">
    <pre class="mx-auto w-100"><?php print_r($element);?></pre>
    </div>
    <?php endforeach; ?>
  </div>
 </div>
    
</body>
</html>