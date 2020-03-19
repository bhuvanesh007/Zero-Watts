<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Log in / Sign up</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
     <h1>welcome to pportal</h1>
  <div class="container">
     
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Have an account?
            </p>
            <div class="btn">
              Log in
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Don't have an account? 
            </p>
            <div class="btn">
              Sign up
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form">
      <div class="form-item log-in">
        <div class="table">
          <div class="table-cell">
              <form action="validation.php" method="post">
            <input name="user" placeholder="Username" type="text" /><input name="password" placeholder="Password" type="Password" />
           <button type="submit" class="btn btn-primary">Login</button>
              </form>  
        </div>
        </div>
      </div>
      <div class="form-item sign-up">
        <div class="table">
          <div class="table-cell">
           <form action="registration.php" method="post">
  <input type="text" name="user" placeholder="Name" class="form-control" required>
 <input type="email" name="email" placeholder="email id" class="form-control" required>

<input type="password" name="password" placeholder="password" class="form-control" required>
<input type="password" name="repassword" placeholder="retype-password" class="form-control" required>
  <input type="text" name="tin" placeholder="incometax no" class="form-control" required>
 <input type="text" name="phone" placeholder="phone no" class="form-control" required>
 <button type="submit" class="btn btn-primary" onclick="alert('registration successful')">register</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="jq/index.js"></script>

</body>
</html>
