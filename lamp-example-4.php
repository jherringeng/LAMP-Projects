<?php
  include 'db_connection.php';
  include 'get_from_db.php';
  include 'create_elements.php';

  $conn = OpenCon();
  echo "Connected Successfully <br>";

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  echo get_header($conn, "Lamp Project");
  echo get_imports($conn);

?>

  </head>

  <body>

    <div class="container">

      <?php

        $sql = "SELECT id, firstname, lastname FROM names";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            echo create_table();
            echo create_table_rows($result);
            echo end_table();

        } else {
            echo "0 results";
        }

        CloseCon($conn);

      ?>

    </div>

  </body>
</html>
