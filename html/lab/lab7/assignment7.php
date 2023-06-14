<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_vit_21BCE7469";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "CREATE TABLE 21BCE7469_users (
        uname VARCHAR(50) NOT NULL PRIMARY KEY,
        password VARCHAR(50) NOT NULL,
        Cpassword VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        dob DATE NOT NULL
      )";
      
      if (mysqli_query($conn, $sql)) {
        echo "Table 21BCE7469_users created successfully";
      } else {
        echo "Error creating table: " . mysqli_error($conn);
      }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uname = $_POST['uname'];
        $password = $_POST['password'];
        $cpassword = $_POST['Cpassword'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];

        if(empty($uname) || empty($password) || empty($cpassword) || empty($email) || empty($dob)) {
            echo "<script>alert('All fields are mandatory');</script>";
        }
        else if($password != $cpassword) {
            echo "<script>alert('Password and Confirm Password fields should match');</script>";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid Email ID');</script>";
        }
        else {
            $query = "SELECT * FROM 21BCE7469_users WHERE uname='$uname'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                echo "<script>alert('Choose a different username');</script>";
            }
            else {
                $insert_query = "INSERT INTO 21BCE7469_users (uname, password, email, dob) VALUES ('$uname', '$password', '$email', '$dob')";
                if(mysqli_query($conn, $insert_query)) {
                    echo "<script>alert('DATA INSERTED SUCCESSFULLY');</script>";
                    header('Location: 21BCE7469_success.php');
                    exit();
                }
                else {
                    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
                }
            }
        }
    }

    mysqli_close($conn);
?>