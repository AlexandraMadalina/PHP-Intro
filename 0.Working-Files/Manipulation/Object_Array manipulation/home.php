<?php

$array = array("John", "Snow",30);
$associative_array = array(
"first"=>"Arya",
"last"=>"Stark",
"years"=> 17
);
class Person{
   public $first_name;
   public $last_name;
   public $age;
   public function __construct($first, $second, $years){
    $this->first_name = $first;
    $this->last_name = $second;
    $this->age = $years;
   }

}
$object = new Person ("Daenerys", "Targaryen", 33);

$array1 = json_decode(json_encode($array));
$all = [$array,$associative_array, $object];
$added_by_loop = "I am added by loop";
foreach($all as $item){
    if(is_assoc($item)){
        $item['added'] = $added_by_loop;
        $keys = array_keys($item);
        $rand_no = rand(0,count( $keys)*5);
        if($rand_no<count($keys)){
          // echo "<span style=\"color:red\">The random key \"{$keys[$rand_no]}\" holds the value \"{$item[$keys[$rand_no]]}\"</span>";
        }else{
          // echo "<span style=\"color:red\">Random key does not exist</span>";
        }
       $last = end($item);
       $key = key($item);
       unset($item[$key]);
          // echo "<br/><br/><span style=\"color:red\">Associative array after removing the last element:</span>";
      reset($item);
        }else if(is_object($item)){
      $item->added = $added_by_loop;
      $array_from_object = (array)$item;
      $obj_keys = array_keys($array_from_object);
      $rand_no_2 = rand(0,count($obj_keys)*5);
      if($rand_no_2<count($obj_keys)){
        // echo "<span style=\"color:red\">The random key \"{$obj_keys[$rand_no_2]}\" holds the value \"{$array_from_object[$keys[$rand_no_2]]}\"</span>";
      }else{
        // echo "<span style=\"color:red\">Random key does not exist</span>";
      }
     
    }else{
      array_push($item, $added_by_loop);
      $rand_no_3 = rand(0,count($item)*5);
      if($rand_no_3<count($item)){
        // echo "<span style=\"color:red\">The random index \"{[$rand_no_3]}\" holds the value \"{$item[$rand_no_3]}\"</span>";
      }else{
        // echo "<span style=\"color:red\">Random index does not exist</span>";
      }
      if(count($item)>2 && count($item)%2==1){
        $first_half = array_slice($item,0,(count($item)-1)/2);
        $second_half = array_slice($item,(count($item)-1)/2);
      }else if(count($item)>1){
        $first_half = array_slice($item,0,count($item)/2);
        $second_half = array_slice($item,count($item)/2);
       
      }
       // echo "<br/><br/><span style=\"color:red\">This is the sliced array:</span>";
         
    }
}
 
function is_assoc($arr){
  if(!is_array($arr))
  return;
    return array_keys($arr) !== range(0, count($arr) - 1);
}

$object->arr1 = $first_half;
$object->arr2 = $second_half;
foreach($associative_array as $key=>$value){
  $object->$key = $value;
  //echo "{$key} = {$value}";
}
$cookie = json_encode($object);
 setcookie("my_coockie", $cookie, time() + 86400,'/');
// time() - 3600
//time() + (86400 * 30),'/'
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
 
} else {
  echo "Cookies are disabled.";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Home</title>
</head>
<body class="p-3 mb-2 bg-dark">
<div class="container bg-light rounded shadow py-5 px-5 centered">
  <div class="row">
    <div class="col">
    <pre class="mx-auto w-50"><?php print_r(json_decode($_COOKIE['my_coockie']));?></pre>
    </div>
  </div>
 </div>
</body>
</html>