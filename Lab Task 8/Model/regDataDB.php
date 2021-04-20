<?php     
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "myDB";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "INSERT INTO student (name, email, username, password, gender, dob)
      VALUES 
      ('{$_POST['name']}','{$_POST['email']}','{$_POST['uname']}','{$_POST['psw']}','{$_POST['gender']}','{$_POST['dob']}')";



    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      // echo "<body style='background-color:pink'>";
      // echo "Registration successful ";
      // echo "Your ID is: " . $last_id;
      // //include '../View/loginV.php';
      // echo "<p>Go Back To <a href='../View/loginV.php'>Login</a> Page</p>";
      session_start();
      $_SESSION['id'] = $last_id;
      header('Location: ../View/regToLogin.php');
      exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    $conn->close();

?>