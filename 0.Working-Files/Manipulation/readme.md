## Indexed Versus Associative Arrays

There are two kinds of arrays in PHP: indexed and associative. The keys of an indexed array are integers, beginning at 0. Indexed arrays are used when you identify things by their position. Associative arrays have strings as keys and behave more like two-column tables. The first column is the key, which is used to access the value.

#### Indexed array
```
data = array("John", "Snow",30);
echo data[0]; //Outputs "John"
```