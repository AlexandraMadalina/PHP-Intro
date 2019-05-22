<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>NickName Generator</title>
</head>

<body>
    <p class="d-block w-50 p-2 bg-info text-white text-center mx-auto">Cool NickName Generator</p>
    <form action="" class="w-25 p-3 mx-auto" method="post">
        <div class="form-group text-center">
            <label for="nickname">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="username" placeholder="username...">
            <button type="submit" class="btn btn-info mt-4" disabled>Info</button>
        </div>
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $reverse =strrev(strtoupper(strrev($_POST['username'])));
    $upper_letters = range(chr(65),chr(90));
    $lower_letters = range(chr(97),chr(122));
    $zero_to_nine = range(chr(48),chr(57));
    $alpha_numeric_chars = array_merge($upper_letters, $lower_letters, $zero_to_nine);
    $two_or_four = array(2,4);
    $rand_no_char = array_rand($two_or_four);
    $rand_char = array_rand($alpha_numeric_chars, $two_or_four[$rand_no_char]);
    $letters = array();
    for($i=0; $i<count($rand_char); ++$i){
        array_push($letters,$alpha_numeric_chars[$rand_char[$i]]);
    }
    $final_letters = implode("", $letters);

    echo "<p class=\"d-block w-25 p-2 bg-info text-white text-center mx-auto\">x--{$final_letters}{$reverse}--</p>";
   print_r($two_or_four[$rand_no_char]);
   print_r($alpha_numeric_chars);
    print_r($final_letters);
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