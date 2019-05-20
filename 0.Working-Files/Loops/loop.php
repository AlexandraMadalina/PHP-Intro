<?php

$array = [
	["tv-show" => "Naruto", "rating" => 4],
	["tv-show" => "Firefly", "rating" => 5],
	["tv-show" => "Big bang theory", "rating" => 4],
    ["tv-show" => "Family Guy", "rating" => 5],
    ["tv-show" => "Game of Thrones", "rating" => 5],
    ["tv-show" => "Grey's Anatomy", "rating" => 4],
    ["tv-show" => "Agents of S.H.I.E.L.D.", "rating" => 3],
    ["tv-show" => "The Punisher", "rating" => 3]
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
                <td><a target="_blank" class="stretched-link" href="<?php echo "https://www.google.com/search?q={$arr["tv-show"]}"; ?>"><?php echo $arr["tv-show"]; ?></a></td>
                <td><?php echo $arr["rating"]; ?></td>
                </a>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

  
</body>

</html>