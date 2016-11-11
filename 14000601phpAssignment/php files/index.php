<!---database connection-->
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "eventreg";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<html lang="en">
<head>
  <title>Namel Malini Theatre</title>

    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styleCSS.css">
    <style>
        .error {color: #FF0000;}
    </style>

</head>
  <body>


    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-xs-4 sidenav">
        </div>

        <div class="col-xs-4 text-left">
          <center><h3>Add Event</h3></center>

            <form method="post" action="add_event.php" name="updateEvent">
                <div class="form-group">
                    <label>Event Name</label><span class="error">*</span><br>
                    <input type="text" class="form-control" id="name" name="event_name" placeholder="event name" required>
                </div>
                <div class="form-group">
                    <label>Event Provider</label><span class="error">*</span><br>
                    <input type="text" class="form-control" id="provider" name="event_provider" placeholder="event provider" required>
                </div>
                <div class="form-group">
                    <label>Category</label><span class="error">*</span><br>
                    <select  name="category" class="form-control" required>
                        <option value="Dancing Show">Dancing Show</option>
                        <option value="Cultural Show">Cultural Show</option>
                        <option value="Movi">Movie</option>
                        <option value="Stage Drama">Stage Drama</option>
                        <option value="Music Event">Music Event</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date</label> <span class="error">*</span><br>
                    <input type="date" class="form-control" id="date" name="e_date" required>
                </div>
                <div class="form-group">
                    <label>Start time</label><span class="error">*</span><br>
                    <input type="time" class="form-control" id="stime" name="start_time" required>

                </div>
                <div class="form-group">
                    <label>End time</label><span class="error">*</span>><br>
                    <input type="time" class="form-control" id="etime" name="end_time" required>

                </div>
                <button type="submit"  name="submit" class="button">Register</button>


                </form>


        </div>

          <div class="col-xs-4 sidenav">
          </div>
      </div>
    </div>

    <div class="container-fluid text-center">
        <div class="row content">


        <center><h3>Show Student</h3></center>

                  <center><table>
                          <tr style= "border-bottom:1px solid #000000;height:10px">
                              <th style= "width:150px">Event Name</th>
                              <th style= "width:150px">Event Provider</th>
                              <th style= "width:150px">Category</th>
                              <th style= "width:150px">Date</th>
                              <th style= "width:150px">Start time</th>
                              <th style= "width:150px">End time</th>
                              <th style= "width:60px">Update</th>
                              <th style= "width:60px">Delete</th>
                          </tr>


              <?php
              if ($result = mysqli_query($conn, "SELECT * FROM event ORDER BY event_id")) {
                  // display records if there are records to display
                  if ($result->num_rows > 0) {

                      while ($row = $result->fetch_object()) {
                          // set up a row for each record
                          echo "<tr>";
                          echo "<td>" . $row->event_name . "</td>";
                          echo "<td>" . $row->event_provider . "</td>";
                          echo "<td>" . $row->category . "</td>";
                          echo "<td>" . $row->e_date . "</td>";
                          echo "<td>" . $row->start_time . "</td>";
                          echo "<td>" . $row->end_time . "</td>";
                          echo "<td><a href='update_view.php?id=" . $row->event_id . "' class='button1'>Update</a></td>";
                          echo "<td><a href='delete_event.php?id=" . $row->event_id . "' class='button2'>Delete</a></td>";
                          echo "</tr>";
                      }

                      echo "</table></center>";
                  } // if there are no records in the database, display an alert message
                  else {
                      echo "No results to display!";
                  }
              }

              ?>

              </div>
          </div>


      </div>
    </div>


  </body>
</html>
