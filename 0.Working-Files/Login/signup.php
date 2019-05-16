<?php
require "header.php";
?>
<main>
    <h1 class=" d-block w-25 p-2 bg-dark text-white text-center mx-auto">Signup</h1>
  
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