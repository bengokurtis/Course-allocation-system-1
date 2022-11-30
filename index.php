<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login | Course Allocation</title>
</head>

<body>

    <div class="container">
    <form 
          action="check-login.php"
          method="post">
        <h1 class="text-center p-3">LOGIN</h1>
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
              <?=$_GET['error']?>
          </div>
        <?php } ?>
        
        <div class="mb-3">
          <label for="username" 
                 class="form-label">Username</label>
            <input type="text"
                   name="username" 
                   class="form-control" id="username">
          <div id="usernameHelp" 
               class="form-text">Your Username is your registration no. or Staff ID</div>
        </div>
       
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" 
                 name="password"
                 class="form-control" id="password">
        </div>

        <div class="mb-1">
            <label class="form-label">Select user:</label>
          </div>
        <select class="form-select" 
                name="role">
            <option selected value="student">Student</option>
            <option value="staff">Staff</option>
            <option value="admin">Admin</option>
          </select>
       
        
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div> 
</body>
</html>