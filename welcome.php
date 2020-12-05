<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: rgb(22,25,30);">
    <div class="container">	
	<div class="row justify-content-center text-success" style="margin-top: 200px">
		<div class="col-6">
Welcome to the Devs community <br>
Your email is <?php echo $_POST['email'] ?? "not entered";  ?>    <br>
	Your password is <?php echo $_POST['password'] ?? "not entered";?>  <br>
	</div>
</div>
</body>
</html>