<?php  

$errors = [];
$email = '';
$password = '';
if($_SERVER['REQUEST_METHOD'] === "POST") {
   $email = test_input($_POST['email']);
   $password = test_input($_POST['password']);

   if(empty($email)) {
    $errors['email'] = "Email is required";
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Please enter a valid email address"; 
   }
   if(empty($password)) {
    $errors['password'] = "Password is required";
   }  else if (strlen($password) < 8 || strlen($password) > 20 ) {
        $errors['password'] = 'Password should have between 8 and 20 characters';
   }
   if (empty($errors)) {
       header("location: ./welcome_home.php");
   }
}

function test_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>    

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Sign in</title>
    <style type="text/css">
    body {
  background-image: url("img.png");
  background-size: cover;
  background-repeat: no-repeat;
  
}
</style>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 130px">
            <div class="col-10 col-md-6 card card-body shadow-lg p-3 mb-5 bg-white rounded">
                <h1 class="text-center">Sign in</h1>
                <form action="sign_in.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <div class="invalid-feedback">
        <?php echo $errors['email'] ?? '' ?>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : '' ?>" id="exampleInputPassword1" name="password" value="<?php echo $password ?>">
    <div class="invalid-feedback">
        <?php echo $errors['password'] ?? '' ?>
    </div>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary" style="width: 200px">Submit</button>
</div>
<div class="card-footer text-center" style="margin-top: 20px">
    <p>Do not have an account? <a href="http://localhost/forms/sign_up.php">Create one here</a></p>
  </div>
</form>
            </div>
        </div>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>