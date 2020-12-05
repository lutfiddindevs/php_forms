<!DOCTYPE html>
<html>
<head>
  <title>sign in</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    body {
  background-image: url("thedevs.png");
  background-size: cover;
  background-repeat: no-repeat;
  
}
.form-container {
  position: absolute;
  top: 15vh;
  background: #fff;
  padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px #255;
}

  </style>
</head>
<body>
     <section class="container-fluid shadow">
     <section class="row justify-content-center">
     <section class="col-12 col-sm-6 col-md-3">
     <form class="form-container" action="welcome.php" method="post">
    <div class="form-group">
     <label for="exampleInputEmail1">Email</label>
     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="email">
     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
   </div>
   <div class="form-group">
     <label for="exampleInputPassword1">Password</label>
     <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password">
   </div>
   <div class="form-group form-check">
     <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
     <label class="form-check-label" for="exampleCheck1">Check me out</label>
   </div>
   <button type="submit" class="btn btn-primary btn-block">Submit</button>
 </form>
      </section>
    </section>
  </section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>