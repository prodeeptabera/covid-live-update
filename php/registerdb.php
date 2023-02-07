<?php
   include 'dbconn.php';
  if(isset($_POST['submit'])){      //IF submit button is pressed then the below statesments will execute. 
      $first_name = $_POST['first_name'];  // getting the values using POST method and storing them in their respective variables. 
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $mobile = $_POST['m_number'];
      $address = $_POST['address'];
      $password = $_POST['pass'];
      // $c_password = $_POST['c_pass'];
      $en_password = password_hash($password, PASSWORD_BCRYPT);

      $emailquery = "select * from users where email = '$email'";
      $query = mysqli_query($con, $emailquery);
      $emailcount = mysqli_num_rows($query);
      if($emailcount>0){
        ?>
          <script>
            alert("email already exists.");
          </script>
          <?php
      }
      else{
        $insert = "INSERT INTO users(first_name, last_name, email, mobile, address, password)
        VALUES ('$first_name', '$last_name', '$email', '$mobile', '$address', '$en_password')";

        if (mysqli_query($con, $insert)) {
          ?>
          <script>
            alert("Thank you, Your details are submitted.");
          <?php 
          header('Location:../login.php');
          } else {
            ?>
            <script>
            alert("Sorry, we coudn't submit your details.");
          </script>
          <?php 
        }

        mysqli_close($con);
      }
      // header("Location:../home.php");
    }
?>