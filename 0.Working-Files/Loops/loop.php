<?php

$array = [
	["tv-show" => "Naruto", "rating" => 4, "src" => "https://www.viz.com/naruto"],
	["tv-show" => "Firefly", "rating" => 5, "src" => "https://www.imdb.com/title/tt0303461/"],
	["tv-show" => "Big bang theory", "rating" => 4, "src" => "https://www.imdb.com/title/tt0898266/"],
    ["tv-show" => "Family Guy", "rating" => 5, "src" => "https://www.imdb.com/title/tt0182576/"],
    ["tv-show" => "Game of Thrones", "rating" => 5, "src" => "https://www.hbo.com/game-of-thrones"],
    ["tv-show" => "Grey's Anatomy", "rating" => 4, "src" => "https://www.ctv.ca/Greys-Anatomy"],
    ["tv-show" => "Agents of S.H.I.E.L.D.", "rating" => 3, "src" => "https://www.imdb.com/title/tt2364582/"],
    ["tv-show" => "The Punisher", "rating" => 3, "src" => "https://www.imdb.com/title/tt5675620/"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Loops</title>
</head>

<body>
    <table class="table table-hover w-25 p-3 mx-auto">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tv-Show</th>
                <th scope="col">Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($array as $arr): ?>
            <tr>
                <td><a class="stretched-link" href="<?php echo $arr["src"]; ?>"><?php echo $arr["tv-show"]; ?></a></td>
                <td><?php echo $arr["rating"]; ?></td>
                </a>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

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