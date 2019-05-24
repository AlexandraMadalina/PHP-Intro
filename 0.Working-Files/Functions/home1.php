<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<p class="d-block w-50 p-2 bg-info text-white text-center mx-auto">Cool NickName Generator</p>
    <form action="functions.php" class="w-25 p-3 mx-auto" method="post">
        <div class="form-group text-center">
            <label for="nickname">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="username" placeholder="username...">
            <button type="submit" class="btn btn-info mt-4" disabled>Info</button>
        </div>
    </form>
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