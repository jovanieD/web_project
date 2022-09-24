<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class= "main_view">
    <form  class= "main_form" action="process_register.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFirstname">Firstname</label>
      <input type="Firstname" class="form-control" id="inputFirstname" name ="firstname" placeholder="Firstname">
    </div>

    <div class="form-group col-md-6">
      <label for="inputLastname">Lastname</label>
      <input type="Lastname" class="form-control" id="inputLastname" name = "lastname" placeholder="Lastname">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputConfirm" class="col-sm-2 col-form-label">Confirm</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputConfirm" name="confirm" placeholder="Confirm Password">
    </div>
  </div>
  
  <div class="buttons">
  <input type="submit" name="submit" class="btn btn-primary" value="Register">
  <label for="">Have already an account? <span><a href="login.php">Sign In</a></span></label>
  </div>
</form>

    </div>

</body>
</html>