<?php 
       if(!isset($_SESSION)) 
       { 
           session_start(); 
       } 
       include './config/connectDB.php';
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $sql = "SELECT * FROM user Where Email = '$email' AND PassW = '$password'";
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) {
                $_SESSION['Email'] = $email;
                header('location:/mywebsite/Admin/_LayoutAdmin.php');
            }
        }else{
              ?>
              <script>
                  alert('Email or Password not correct !'); 
                  window.location= "/mywebsite/login.php"; 
              </script>
              <?php
        }
        $conn->close(); 
?>