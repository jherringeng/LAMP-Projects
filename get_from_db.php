<?php

function get_header($conn, $title) {

  $sql = "SELECT * FROM website_code WHERE code_name ='header'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          echo $row['code'];
      }
  } else {
      echo "0 results";
  }

  echo "<title>";
  echo $title;
  echo "</title>";

}

function get_imports($conn) {

  $sql = "SELECT * FROM website_code WHERE code_name ='imports'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          echo $row['code'];
      }
  } else {
      echo "0 results";
  }

}

?>
