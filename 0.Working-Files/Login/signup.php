<?php
require "header.php";
?>
<main>
    <h1 class=" d-block w-25 p-2 bg-dark text-white text-center mx-auto">Signup</h1>
  <?php
  if(isset($_GET['error'])){
if($_GET['error'] == "emptyfields"){
echo '<p class="d-block w-25 p-2 bg-danger text-white text-center mx-auto">Fill in all fields!</p>';
}else if($_GET['error'] == "invalidmailuid"){
    echo '<p class="d-block w-25 p-2 bg-danger text-white text-center mx-auto">Invalid username and e-mail!</p>';
}else if($_GET['error'] == "invaliduid"){
    echo '<p class="d-block w-25 p-2 bg-danger text-white text-center mx-auto">Invalid username!</p>';
}else if($_GET['error'] == "invalidmail"){
    echo '<p class="d-block w-25 p-2 bg-danger text-white text-center mx-auto">Invalid e-mail!</p>';
}else if($_GET['error'] == "passwordcheck"){
    echo '<p class="d-block w-25 p-2 bg-danger text-white text-center mx-auto">Your passwords do not match!</p>';
}else if($_GET['error'] == "usertaken"){
    echo '<p class="d-block w-25 p-2 bg-danger text-white text-center mx-auto">Username is already taken!</p>';
}
  }
  ?>
    <form class="w-25 p-3 mx-auto" action="includes/signup.inc.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="uid" class="form-control" id="username" aria-describedby="emailHelp"
                placeholder="Username">
        </div>
        <div class="form-group">
            <label for="mail">E-mail</label>
            <input type="text" name="mail" class="form-control" id="mail" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="password">Pasword</label>
            <input type="password" name="pwd" class="form-control" id="password" placeholder="Pasword">
        </div>
        <div class="form-group">
            <label for="password-repeat">Reapeat pasword</label>
            <input type="password" name="pwd-repeat" class="form-control" id="password-repeat" placeholder="Reapeat pasword">
        </div>

        <button type="submit" name="signup-submit" class="d-block btn btn-dark mx-auto w-100">Signup</button>
    </form>
</main>


<?php
require "footer.php";
?>