
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setup</title>
</head>

<body>
    <form method="get" action="result.php">
        <input type="text" name="country" placeholder="Favorite country...">
        <input type="text" name="bad_movie" placeholder="worst movie ever...">
        <input type="submit" value="save">
    </form>
    <form method="post" action="result.php">
        <fieldset>
            <legend>Top 5 tv shows</legend>
            <input type="text" name="show1" placeholder="show 1...">
            <input type="text" name="show2" placeholder="show 2...">
            <input type="text" name="show3" placeholder="show 3...">
            <input type="text" name="show4" placeholder="show 4...">
            <input type="text" name="show5" placeholder="show 5...">
        </fieldset>
        <fieldset>
            <legend>Top 5 movies</legend>
            <input type="text" name="mov1" placeholder="movie 1...">
            <input type="text" name="mov2" placeholder="movie 2...">
            <input type="text" name="mov3" placeholder="movie 3...">
            <input type="text" name="mov4" placeholder="movie 4...">
            <input type="text" name="mov5" placeholder="movie 5...">
        </fieldset>
        <input type="submit" value="save">
    </form>
</body>

</html>