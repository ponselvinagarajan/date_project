<?php 
   $selected_date = $_POST["selected_date"];
   
   // Create connection
   $conn = new mysqli("localhost", "root", "", "newdata");
   
   // insert data
   $data = "INSERT INTO dates (selected_date) VALUES ('$selected_date')";
   $c = mysqli_query($conn, $data);   
   
   if($c) {
      echo "Date saved successfully";
   } else {
      echo "error: " . $data . "<br>" . $conn->error;
   }
   
   $conn->close();
?>
