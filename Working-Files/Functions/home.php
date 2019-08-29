<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Home</title>
</head>

<body class="p-3 mb-2 bg-light">
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="security.php">
                <i class="fab fa-reddit fa-2x mr-5"></i>
                Security
            </a>
        </nav>
    </header>
    <div class="container">
        <div class="row container mt-5 bg-dark rounded shadow py-5 px-5 centered">
            <div class="col">
                <form action="../Manipulation/Object_Array/home.php">
                    <button type="submit" class="w-100 p-5 bg-light btn btn-outline-secondary">Generate object</button>
                </form>
            </div>
            <div class="col">
                <form action="functions.php">
                    <button type="submit" class="w-100 p-5 bg-light btn btn-outline-secondary">Revert object</button>
                </form>
            </div>
            <div class="col">
                <form action="nickname.php">
                    <button type="submit" class="w-100 p-5 bg-light btn btn-outline-secondary">Get a nickname</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_GET['error'])){
        if($_GET['error']== "generateobject"){
           
          echo "<p class=\"d-block w-25 p-2 bg-danger text-white text-center mt-5 mx-auto\"> Please generate an object first!</p>";
        }
    }
    ?>
</body>

</html>