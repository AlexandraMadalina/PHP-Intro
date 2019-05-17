<?php
require "header.php";

?>
<main>
<?php
if(isset($_SESSION['userUid'])){
    echo $_SESSION['userUid'];
echo '<p class="d-block w-50 p-2 bg-dark text-white text-center mx-auto">You are logged in!</p>';
}else{
print_r($_SESSION);
   echo '<p class=" d-block w-50 p-2 bg-dark text-white text-center mx-auto">You are logged out!</p>';
}
?>


</main>


<?php
require "footer.php";
?>