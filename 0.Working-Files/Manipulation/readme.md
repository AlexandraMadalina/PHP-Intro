## Indexed Versus Associative Arrays

There are two kinds of arrays in PHP: indexed and associative. The keys of an indexed array are integers, beginning at 0. Indexed arrays are used when you identify things by their position. Associative arrays have strings as keys and behave more like two-column tables. The first column is the key, which is used to access the value.

#### Indexed array
```
$data = array("John", "Snow",30);
echo $data[0]; //Outputs: "John"
```

#### Associative arrays
```
$data = array(
    "first"=>"John",
    "second"=>"Snow",
    "age"=>30);
    echo $data[0]; // Outputs: Undefined offset: 0...
    echo $data["first"]; //Outputs: John
```

#### Objects
An array is simply an ordered map, that associate values to the keys. This map can be used as arrays, lists, hash table, dictionary, collection, stack, queue and much more. But after all it is a data structure, that holds data. You can iterate through it to get data and perform builtin array functions to achieve results.

Object on the other hand is the physical manifestation of a class. A class is just a blue print, an object holds all the properties you defined in a class. It can have data members and member functions.

```
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
$data = new Person ("John", "Snow", "30");
echo $data[0]; //Outputs: Fatal error: Uncaught Error: Cannot use object of type Person as array
echo $data['first_name']; //Outputs: Fatal error: Uncaught Error: Cannot use object of type Person as array 
echo $object->first_name; //Outputs: John
```
