<?php session_start();?>

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
    <title>Nickname Generator</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="security.php">
                <i class="fab fa-reddit fa-2x mr-5"></i>
                Security
            </a>
        </nav>
    </header>
    <p class="d-block w-50 p-2 bg-info text-white text-center mx-auto">Cool NickName Generator</p>
    <form action="functions.php" class="w-25 p-3 mx-auto" method="post">
        <div class="form-group text-center">
            <label for="nickname">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="username" placeholder="username...">
            <button type="submit" class="btn btn-info mt-4" disabled>Info</button>
        </div>
    </form>
    <?php
    if(isset($_SESSION["nickname"])){
        echo $_SESSION["nickname"];
        session_unset();
        session_destroy();
    }
    ?>
    <script type="text/javascript">
        const input = document.getElementById('nickname');
        const button = document.querySelector("button");

        input.oninput = function (e) {
            let letters = e.target.value;
            if (letters.length > 1) {
                button.removeAttribute("disabled");
            }

        }
    </script>
</body>

</html>