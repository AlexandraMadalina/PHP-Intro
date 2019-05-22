<?php

$array = array("John", "Snow", 30);
$associative_array = array(
"first_name"=>"John",
"last_name"=>"Snow",
"age"=> 30
);
class Person{
   private $first_name;
   private $last_name;
   private $age;
   public function __construct($first, $second, $years){
    $this->first_name = $first;
    $this->last_name = $second;
    $this->age = $years;
   }

}
$object = new Person ("John", "Snow", "30");
var_dump($array);
var_dump($associative_array);
var_dump($object);
$array1 = json_decode(json_encode($array));
var_dump($array1);
$all = [$array,$associative_array, $object];
var_dump($all);
$added_by_loop = "I am added by loop";
foreach($all as $item){
    if(is_assoc($item)){
        $item['added'] = $added_by_loop;
        var_dump($item);
    }else if(is_object($item)){
      $item->added = $added_by_loop;
      var_dump($item);
    }else{
      array_push($item, $added_by_loop);
      var_dump($item);
    }
}
 
function is_assoc($arr){
  if(!is_array($arr))
  return;
    return array_keys($arr) !== range(0, count($arr) - 1);
}
?>