<?php
  session_start();

  if(!isset($_SESSION['first_name'])){
    header('location:index.php');
  }
    include 'dbconn.php';


   if(isset($_POST['submit'])){      //IF submit button is pressed then the below statesments will execute. 
      $first_name = $_POST['first_name'];  // getting the values using POST method and storing them in their respective variables. 
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $mobile = $_POST['m_number'];
      $symptoms = $_POST['symptom'];
      $message = $_POST['msg'];
      $chk = " ";
      foreach($symptoms as $chk1){
        $chk .= " - ".$chk1." ";
        // echo $chk . "<br>";
      }


    $insert = "INSERT INTO case_table(first_name, last_name, email, mobile, symptoms, message)
    VALUES ('$first_name', '$last_name', '$email', '$mobile', '$chk', '$message')";

    if (mysqli_query($con, $insert)) {
      ?>
      <script>
        alert("Thank you, Your details are submitted.");
      </script>
      <?php 
      } else {
        ?>
        <script>
        alert("Sorry, we coudn't submit your details.");
      </script>
      <?php 
    }

    mysqli_close($con);
  }
  header("Location:../home.php");
?>



<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <?php 
      // include 'links.php';
    ?>
  </head>
  <body>
    <h1>This is submitted</h1>    
  </body>
</html>
 -->