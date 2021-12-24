<?php
require_once 'partials/header.php';
require_once 'database.php';
require_once 'flash.php';

$error = false;
$success = false;


if (isset($_GET['s'])) {
    $success = true;
}

if (isset($_GET['e'])) {
    $error = true;
}

if(isset($_POST['submit']))
{
    if(isset($_POST["email"]) && isset($_POST["password"]))
    {
        $DB = new Database();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $DB->query("SELECT * FROM users WHERE email = :email AND password = :password");
        $DB->bind(":email",$email);
        $DB->bind(":password",$password);

        $DB->execute();
        var_dump($DB->rowCount());
        if ($DB->rowCount() > 0)
        {

            header("Location: home.php");

        } else
        {

            header("Location: login?e=t.php");
        }
    }

}

?>
    <div class="mt-5 container w-75">
        <div class="card">
            <div class="card-header text-right">
                <a class="text-danger" href="register.php">Register</a>
                Login
            </div>
            <div class="card-body">
                <?php if($error): ?>
                    <div class="alert alert-danger">
                        Erreur
                    </div>
                <?php endif; ?>
                <?php if($success): ?>
                    <div class="alert alert-success">
                        Success
                    </div>
                <?php endif; ?>
               <form method="post" >
                   <div class="mb-3 row">
                       <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                       <div class="col-sm-10">
                           <input type="text" name="email" class="form-control" id="staticEmail" placeholder="email@example.com">
                       </div>
                   </div>
                   <div class="mb-3 row">
                       <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                       <div class="col-sm-10">
                           <input type="password" name="password" class="form-control" id="inputPassword">
                       </div>
                   </div>
                   <div class="mb-3 row p-2">
                       <button class="btn btn-primary" type="submit" name="submit" >Login</button>
                   </div>
               </form>
            </div>
        </div>
    </div>

<?php
require 'partials/footer.php';
?>