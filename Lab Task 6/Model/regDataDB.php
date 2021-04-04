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
      echo "Registration successful";
      echo "Your ID is: " . $last_id;
      echo "<p>Go Back To <a href='..//View//loginV.php'>Login</a> Page</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    $conn->close();

?>