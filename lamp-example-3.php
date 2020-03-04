<?php
  include 'db_connection.php';
  $conn = OpenCon();
  echo "Connected Successfully <br>";

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM website_code WHERE code_name ='header'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          echo $row['code'];
      }
  } else {
      echo "0 results";
  }

  $sql = "SELECT * FROM website_code WHERE code_name ='imports'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          echo $row['code'];
      }
  } else {
      echo "0 results";
  }
?>

  </head>

  <body>

    <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
        </tr>
      </thead>


        <?php
        // include 'db_connection.php';
        // $conn = OpenCon();
        // echo "Connected Successfully <br>";
        //
        // // Check connection
        // if (!$conn) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }



        $sql = "SELECT id, firstname, lastname FROM names";
        $result = mysqli_query($conn, $sql);



        if (mysqli_num_rows($result) > 0) {
            // output data of each row
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
        } else {
            echo "0 results";
        }

        CloseCon($conn);
        ?>

      </table>

    </div>

  </body>
</html>
