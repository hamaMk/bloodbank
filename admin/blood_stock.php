<?php
    include_once('head.php');
?>
      <div class="container">
            <h3>Blood stock</h3>
            <hr>
            <table style="width: 700px;" class="table-dark table-striped table-hover mx-auto">
                    <thead>
                        <tr>
                          <th>Blood type</th>
                          <th>Quantity</th>
                        </tr>
                      </thead>
                    <tbody>

                      <?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "bloodbank";

                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      }

                      $sql = "SELECT  type, quantity FROM bank";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                              ?><html>
                                  <head>

                                  </head>
                                  <body>
                                    <div>
                                      <tr>
                                        <td><?php echo $row["type"]; ?></td>
                                        <td><?php echo $row["quantity"]; ?></td>
                                        
                                      </tr>
                                    </div>
                                  </body>
                              </html><?php

                          }
                      } else {
                        ?><html>
                            <head>
                              <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
                            </head>
                            <body>
                              <div class="alert alert-info">
                                  <strong>No Donors found!</strong> Please keep checking.
                              </div>
                            </body>
                        </html><?php
                      }
                      $conn->close();
                      ?>




                    </tbody>
                  </table>
      </div>

<?php
    include_once('tail.php');
?>         