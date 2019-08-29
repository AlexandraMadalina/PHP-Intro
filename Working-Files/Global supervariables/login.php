

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
    <title>Login</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="" class="navbar-brand">
                <i class="fab fa-reddit fa-2x"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Portofolio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Razvan</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>

                <form action="login.php" method="post" class="form-inline my-2 my-lg-0">
                    <input type="text" name="username" placeholder="Username..." class="form-control mr-sm-2">
                    <input type="password" name="pwd" placeholder="Password..." class="form-control mr-sm-2">
                    <button type="submit" class="btn btn-dark my-2 my-sm-0">Login</button>
                </form>
                <a class="btn btn-outline-dark my-2 my-sm-0">Signup</a>
                <form  method="post" class="form-inline my-2 my-lg-0">

                    <button type="submit" name="logout-submit" class="btn btn-dark my-2 my-sm-0">Logout</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <?php
    if(isset($_POST['username'])){
        $user = "madalina";
        $pwd = "becode";
    if($_POST['username'] == $user && $_POST['pwd']== $pwd){
        echo '<p class="d-block w-50 p-2 bg-dark text-white text-center mx-auto">You are logged in!</p>';
    }else{
        echo '<p class=" d-block w-50 p-2 bg-dark text-white text-center mx-auto">You are logged out!</p>';
    }
    }
    ?>
    </main>
</body>

</html>