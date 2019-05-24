<?php

function nickname_generate($nickname){
    $reverse =strrev(strtoupper(strrev($nickname)));
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
 
    $pic_letter = array_rand($letters,1);
   
    if(ctype_alpha($letters[$pic_letter])){
        $new_letter = $letters[$pic_letter];
        if(ctype_lower($new_letter)){
            $new_letter = strtoupper($new_letter);
           
        }else{
            $new_letter = strtolower($new_letter);
        }
        $letters[$pic_letter] =  $new_letter;
    }
    $grad = 255/count($letters);
    $red = $grad;
    $colored_leters = array();
    foreach($letters as $letter){
        
        $color_letter = "<span style=\"color: rgb({$red},0,255)\">{$letter}</span>";
        $red += $grad;
        array_push($colored_leters, $color_letter);
        // echo $color_letter."<br/>";
    }
    $final_letters ="[".implode("][", $colored_leters)."]";
  
    $object = "<p class=\"d-block w-25 p-2 bg-light text-darck text-center mx-auto\">x--{$final_letters}{$reverse}--</p>";
        echo $object;
}

nickname_generate($_POST['username']);

function object_generate(){

    return $_COOKIE['my_coockie'];
}


function object_revert($object){
    session_start();
    if($object !== object_generate()){
        $object = new stdClass();
        $object->roses = "red";
        $object->violets = "blue";
        $object->unexpected ="'{' on line 32";
        $object->arr1 = ["Daenerys", "Targaryen"];
        $object->arr2 = ["is", "favorite"];
        $object->first = "Daenerys";
        $object->last = "Targaryen";
        $object->years = 33;
    }
    $revert_arr = [];
    $assoc_arr =[];
    $decoded_obj = json_decode($object);
    $vars = get_object_vars($decoded_obj);
    $halfs = [$vars['arr1'], $vars['arr2']];
 
    foreach($vars as $key=>$value){
        if($key == "arr1" || $key == "arr2"){
          
            foreach($value as $element){
                array_push($revert_arr, $element);
            }
            unset($vars[$key]);
         }elseif($key == "first" || $key == "last" || $key == "years"){
            array_push($assoc_arr, $value);
            unset($vars[$key]);
         }
    }
    $object = (object) $vars;
    $_SESSION['revert'] = array($revert_arr,  $assoc_arr, $object);
    header("Location: includes/revert.inc.php");
 }

object_revert($_COOKIE['my_coockie']);
echo $_COOKIE['my_coockie'];
// if(count($_COOKIE) > 0) {
//     echo "Cookies are enabled.";
//     var_dump($_COOKIE['my_coockie']);
//   } else {
//     echo "Cookies are disabled.";
//   }

?>
