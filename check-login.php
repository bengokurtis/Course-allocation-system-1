<?php

include "../db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $username  = validate($_POST['username']);
      $password  = validate($_POST['password']);
      $role  = validate($_POST['role']);

      $user_data = 'username=' .$username. '&password=' .$password. '&role=' .$role;

      if (empty($username)){
        header("Location: ../index.php?error=User Name is Required");
      }
      
      else if(empty($password)){
        header("Location: ../index.php?error=Password is Required");
      }
      else {
        $password = md5($password);

        $sql = "SELECT * FROM users WHERE username= '$username' AND password= '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            echo "<pre>";
            print_r($row);
        }
      }
    
    
} else{
    header("Location: ../Login/index.php");
}
