<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oject</title>
</head>
<body>
<?php
    class Person{
        private $first_name;
        private $last_name;
        private $phone;
       public function  construct($first_name,$last_name, $phone){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->phone = $phone;
        }
    }
    foreach($_REQUEST as $key=>$value)
    var_dump($value);
    ?>
</body>
</html>