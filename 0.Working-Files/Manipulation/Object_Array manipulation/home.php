<?php

$array = array("John", "Snow", 30);
$associative_array = array(
"first_name"=>"John",
"last_name"=>"Snow",
"age"=> 30
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
        $keys = array_keys($item);
        $rand_no = rand(0,count( $keys)*5);
        if($rand_no<count($keys)){
          echo "<span style=\"color:red\">The random key \"{$keys[$rand_no]}\" holds the value \"{$item[$keys[$rand_no]]}\"</span>";
        }else{
          echo "<span style=\"color:red\">Random key does not exist</span>";
        }
        
      }else if(is_object($item)){
      $item->added = $added_by_loop;
      var_dump($item);
      $array_from_object = (array)$item;
      var_dump($array_from_object);
      $obj_keys = array_keys($array_from_object);
      $rand_no_2 = rand(0,count($obj_keys)*5);
      if($rand_no_2<count($obj_keys)){
        echo "<span style=\"color:red\">The random key \"{$obj_keys[$rand_no_2]}\" holds the value \"{$array_from_object[$keys[$rand_no_2]]}\"</span>";
      }else{
        echo "<span style=\"color:red\">Random key does not exist</span>";
      }
     
    }else{
      array_push($item, $added_by_loop);
      var_dump($item);
      $rand_no_3 = rand(0,count($item)*5);
      if($rand_no_3<count($item)){
        echo "<span style=\"color:red\">The random index \"{[$rand_no_3]}\" holds the value \"{$item[$rand_no_3]}\"</span>";
      }else{
        echo "<span style=\"color:red\">Random index does not exist</span>";
      }
    }
}
 
function is_assoc($arr){
  if(!is_array($arr))
  return;
    return array_keys($arr) !== range(0, count($arr) - 1);
}
?>