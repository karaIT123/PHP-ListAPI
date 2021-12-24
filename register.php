<?php
require_once 'partials/header.php';
require_once 'database.php';
require_once 'flash.php';


$error = false;
$success = false;

var_dump($_GET);
if(isset($_GET['s'])) {
    $success = true;
}

if(isset($_GET['e'])) {
    $error = true;
}


if(isset($_POST["submit"]))
{
    $DB = new Database();

    $email = $_POST['email'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];


    $DB->query("INSERT INTO users (fullname,email,password) VALUES  (:fullname,:email,:password)");
    //Bind values
    $DB->bind('fullname',$fullname);
    $DB->bind('email',$email);
    $DB->bind('password',$password);

    #$DB->execute();
    //Execute function
    if ($DB->execute())
    {
        #var_dump("AAa");
        header("Location: index.php?s=t");
    }
    else
    {
        #var_dump("fff");
        header("Location: register?e=t.php");
    }
}


?>
    <div class="mt-5 container w-75">
        <div class="card">
            <div class="card-header text-right">
                <a class="text-danger" href="index.php">Login</a>
                Register
            </div>
            <div class="card-body">
            <?php if($error): ?>
                <div class="alert alert-danger">
                    Erreur
                </div>
            <?php endif; ?>
                <?php if($success): ?>
                    <div class="alert alert-danger">
                        success
                    </div>
                <?php endif; ?>
                <form method="post" action="">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Fullname</label>
                        <div class="col-sm-10">
                            <input type="text" name="fullname" class="form-control" id="staticEmail" placeholder="Fullname">
                        </div>
                    </div>
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
                        <button class="btn btn-primary" type="submit" name="submit" >Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
require 'partials/footer.php';
?>