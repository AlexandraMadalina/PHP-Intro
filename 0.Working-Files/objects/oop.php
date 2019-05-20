<?php
session_start();
if(!isset($_SESSION['contacts'])){
    $_SESSION['contacts'] = array();
}
?>


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
       public function  __construct($name1,$name2, $phNo){
            $this->first_name = $name1;
            $this->last_name = $name2;
            $this->phone = $phNo;
        }
        public function getName1(){
            return $this->first_name;
        }
    }
    foreach($_REQUEST as $key=>$value)
    var_dump($value);
   
    $newPerson = new Person($_REQUEST['item1'],
                            $_REQUEST['item2'],
                            $_REQUEST['item3']);
    var_dump($newPerson);
    array_push( $_SESSION['contacts'], $newPerson);
    var_dump($_SESSION['contacts']);
    foreach($_SESSION['contacts'] as $value){
        echo $value->getName1();
    }
    ?>
</body>
</html>