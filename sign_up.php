<?php   

$errors = [];
$firstname = '';
$lastname = '';
$email = '';
$password = '';
$psw_confirm = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstname = test_data($_POST['firstname']) ?? '';
    $lastname = test_data($_POST['lastname']) ?? '';
    $email = test_data($_POST['email']) ?? '';
    $password = test_data($_POST['password']) ?? '';
    $psw_confirm = test_data($_POST['psw_confirm']) ?? '';

    if(empty($firstname)) {
       $errors['firstname'] = 'First name is required';
    }
    else if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
        $errors['firstname'] ="Only letters and white space allowed";
    }
    if(empty($email)) {
        $errors['email'] = 'Email is required';
    }  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email must be valid';
    }
    if(empty($password)) {
        $errors['password'] = 'Password is required'; 
    }
     else if (strlen($password) < 8 || strlen($password) > 20 ) {
        $errors['password'] = 'Password should have between 8 and 20 characters';
    }
    
    if(empty($psw_confirm)) {
        $errors['psw_confirm'] = 'Confirmation of password is required';
    }
     if($password && $psw_confirm && strcmp($password, $psw_confirm) !== 0) {
         $errors['psw_confirm'] = 'Your password must match the password you created first';
    }
     if (empty($errors)) {
    header("location: ./welcome_home.php");
   }
}
function test_data($data) {
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

    <title>Sign up</title>
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
        <div class="row justify-content-center" style="margin-top: 60px">
            <div class="col-10 col-md-6 card card-body shadow-lg p-3 mb-5 bg-white rounded">
                 <h1 class="text-center">Create an account</h1>
                <form action="sign_up.php" method="post">
  <div class="row">
    <div class="col">
        <label>First name</label>
      <input type="text" class="form-control <?php echo isset($errors['firstname']) ? 'is-invalid' : '' ?>" placeholder="Enter your first name" name="firstname" value="<?php echo $firstname?>">
      <div class="invalid-feedback">
          <?php echo $errors['firstname'] ?? '' ?>
      </div>
    </div>
    <div class="col">
        <label>Last name</label>
      <input type="text" class="form-control" placeholder="Enter your last name" name="lastname" value="<?php echo $lastname ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" style="margin-top: 10px">Email address</label>
    <input type="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby placeholder="Enter your email address" name="email" value="<?php echo $email ?>">
    <small id="emailHelp" class="form-text text-muted text-center">We'll never share your email with anyone else.</small>
    <div class="invalid-feedback">
          <?php echo $errors['email'] ?? '' ?>
      </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : '' ?>" id="exampleInputPassword1" placeholder="Create a password" name="password" value="<?php echo $password ?>">
    <div class="invalid-feedback">
          <?php echo $errors['password'] ?? '' ?>
      </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm your password</label>
    <input type="password" class="form-control <?php echo isset($errors['psw_confirm']) ? 'is-invalid' : '' ?>" id="exampleInputPassword1" placeholder="Confirm your password" name="psw_confirm" value="<?php echo $psw_confirm ?>">
    <div class="invalid-feedback">
          <?php echo $errors['psw_confirm'] ?? '' ?>
      </div>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary" style="width: 250px">Submit</button>
</div>
<div class="card-footer text-center" style="margin-top: 20px">
    <p>Already have an account? <a href="http://localhost/forms/sign_in.php">Sign in here</a></p>
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