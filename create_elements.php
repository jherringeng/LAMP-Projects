<?php

function create_table() {

  echo "<table class='table'>";
    echo  "<thead>";
      echo "<tr>";
        echo "<th scope='col'></th>";
        echo "<th scope='col'>First Name</th>";
        echo "<th scope='col'>Last Name</th>";
      echo "</tr>";
    echo "</thead>";

}

function create_table_rows($result) {

  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>";
      echo $row['id'];
      echo "</td>";
      echo "<td>";
      echo $row['firstname'];
      echo "</td>";
      echo "<td>";
      echo $row['lastname'];
      echo "</td>";
      echo "</tr>";

  }

}

function end_table() {

  echo "</table>";

}

?>
