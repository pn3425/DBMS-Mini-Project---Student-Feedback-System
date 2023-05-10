<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Feedback Details</title>
    <link rel="stylesheet" href="css/styles2.css" />
  </head>

  <body>
    <form action="php/logout.php" method="POST">
      <div class="logout">
        <input type="submit" value="Log Out" name="logout" />
      </div>
    </form>

    <?php 
      session_start();
      require 'php/config.php';

      if (isset($_SESSION['login_user'])) {
        $userLoggedIn = $_SESSION['login_user'];
        $result1 = mysqli_query($con,"SELECT * FROM feedback1");

        echo "<table border='1' id='students-table'>
                <tr>
                    <th>Year</th>
                    <th>Sem</th>
                    <th>Date</th>
                    <th>Branch</th>
                    <th>Section</th>
                    <th>Unit</th>
                    <th>Ques1</th>
                    <th>Ques-2i</th>
                    <th>Ques-2ii</th>
                    <th>Ques-2iii</th>
                    <th>Ques-2iv</th>
                    <th>Ques-2v</th>
                    <th>Ques3</th>
                    <th>Ques4</th>
                    <th>Remarks</th>
                </tr>";

        while($row1 = mysqli_fetch_array($result1)) {
          echo "<tr>";
          echo "<td>" . $row1['year'] . "</td>";
          echo "<td>" . $row1['sem'] . "</td>";
          echo "<td>" . $row1['date'] . "</td>";
          echo "<td>" . $row1['branch'] . "</td>";
          echo "<td>" . $row1['section'] . "</td>";
          echo "<td>" . $row1['unit'] . "</td>";
          echo "<td>" . $row1['ques1'] . "</td>";
          echo "<td>" . $row1['ques2i'] . "</td>";
          echo "<td>" . $row1['ques2ii'] . "</td>";
          echo "<td>" . $row1['ques2iii'] . "</td>";
          echo "<td>" . $row1['ques2iv'] . "</td>";
          echo "<td>" . $row1['ques2v'] . "</td>";
          echo "<td>" . $row1['ques3'] . "</td>";
          echo "<td>" . $row1['ques4'] . "</td>";
          echo "<td>" . $row1['remarks'] . "</td>";
          echo "</tr>";
        }

        echo "</table>";  
        echo "<br></br>";   
        
        $result2 = mysqli_query($con,"SELECT * FROM feedback2");

        echo "<table border='1' id='students-table'>
                <tr>
                    <th>Year</th>
                    <th>Sem</th>
                    <th>Date</th>
                    <th>Branch</th>
                    <th>Section</th>
                    <th>Unit</th>
                    <th>Ques1</th>
                    <th>Ques-2i</th>
                    <th>Ques-2ii</th>
                    <th>Ques-2iii</th>
                    <th>Ques-2iv</th>
                    <th>Ques-2v</th>
                    <th>Ques3</th>
                    <th>Ques4</th>
                    <th>Remarks</th>
                </tr>";

        while($row2 = mysqli_fetch_array($result2)) {
          echo "<tr>";
          echo "<td>" . $row2['year'] . "</td>";
          echo "<td>" . $row2['sem'] . "</td>";
          echo "<td>" . $row2['date'] . "</td>";
          echo "<td>" . $row2['branch'] . "</td>";
          echo "<td>" . $row2['section'] . "</td>";
          echo "<td>" . $row2['unit'] . "</td>";
          echo "<td>" . $row2['ques1'] . "</td>";
          echo "<td>" . $row2['ques2i'] . "</td>";
          echo "<td>" . $row2['ques2ii'] . "</td>";
          echo "<td>" . $row2['ques2iii'] . "</td>";
          echo "<td>" . $row2['ques2iv'] . "</td>";
          echo "<td>" . $row2['ques2v'] . "</td>";
          echo "<td>" . $row2['ques3'] . "</td>";
          echo "<td>" . $row2['ques4'] . "</td>";
          echo "<td>" . $row2['remarks'] . "</td>";
          echo "</tr>";
        }

        echo "</table>";   
        echo "<br></br>";     

        $result3 = mysqli_query($con,"SELECT * FROM feedback3");

        echo "<table border='1' id='students-table'>
                <tr>
                    <th>Year</th>
                    <th>Sem</th>
                    <th>Date</th>
                    <th>Branch</th>
                    <th>Section</th>
                    <th>Unit</th>
                    <th>Ques1</th>
                    <th>Ques-2i</th>
                    <th>Ques-2ii</th>
                    <th>Ques-2iii</th>
                    <th>Ques-2iv</th>
                    <th>Ques-2v</th>
                    <th>Ques3</th>
                    <th>Ques4</th>
                    <th>Remarks</th>
                </tr>";

        while($row3 = mysqli_fetch_array($result3)) {
          echo "<tr>";
          echo "<td>" . $row3['year'] . "</td>";
          echo "<td>" . $row3['sem'] . "</td>";
          echo "<td>" . $row3['date'] . "</td>";
          echo "<td>" . $row3['branch'] . "</td>";
          echo "<td>" . $row3['section'] . "</td>";
          echo "<td>" . $row3['unit'] . "</td>";
          echo "<td>" . $row3['ques1'] . "</td>";
          echo "<td>" . $row3['ques2i'] . "</td>";
          echo "<td>" . $row3['ques2ii'] . "</td>";
          echo "<td>" . $row3['ques2iii'] . "</td>";
          echo "<td>" . $row3['ques2iv'] . "</td>";
          echo "<td>" . $row3['ques2v'] . "</td>";
          echo "<td>" . $row3['ques3'] . "</td>";
          echo "<td>" . $row3['ques4'] . "</td>";
          echo "<td>" . $row3['remarks'] . "</td>";
          echo "</tr>";
        }

        echo "</table>";   
        echo "<br></br>";     

        $result4 = mysqli_query($con,"SELECT * FROM feedback4");

        echo "<table border='1' id='students-table'>
                <tr>
                    <th>Year</th>
                    <th>Sem</th>
                    <th>Date</th>
                    <th>Branch</th>
                    <th>Section</th>
                    <th>Unit</th>
                    <th>Ques1</th>
                    <th>Ques-2i</th>
                    <th>Ques-2ii</th>
                    <th>Ques-2iii</th>
                    <th>Ques-2iv</th>
                    <th>Ques-2v</th>
                    <th>Ques3</th>
                    <th>Ques4</th>
                    <th>Remarks</th>
                </tr>";

        while($row4 = mysqli_fetch_array($result4)) {
          echo "<tr>";
          echo "<td>" . $row4['year'] . "</td>";
          echo "<td>" . $row4['sem'] . "</td>";
          echo "<td>" . $row4['date'] . "</td>";
          echo "<td>" . $row4['branch'] . "</td>";
          echo "<td>" . $row4['section'] . "</td>";
          echo "<td>" . $row4['unit'] . "</td>";
          echo "<td>" . $row4['ques1'] . "</td>";
          echo "<td>" . $row4['ques2i'] . "</td>";
          echo "<td>" . $row4['ques2ii'] . "</td>";
          echo "<td>" . $row4['ques2iii'] . "</td>";
          echo "<td>" . $row4['ques2iv'] . "</td>";
          echo "<td>" . $row4['ques2v'] . "</td>";
          echo "<td>" . $row4['ques3'] . "</td>";
          echo "<td>" . $row4['ques4'] . "</td>";
          echo "<td>" . $row4['remarks'] . "</td>";
          echo "</tr>";
        }

        echo "</table>";   
        echo "<br></br>";     

        $result5 = mysqli_query($con,"SELECT * FROM feedback5");

        echo "<table border='1' id='students-table'>
                <tr>
                    <th>Year</th>
                    <th>Sem</th>
                    <th>Date</th>
                    <th>Branch</th>
                    <th>Section</th>
                    <th>Unit</th>
                    <th>Ques1</th>
                    <th>Ques-2i</th>
                    <th>Ques-2ii</th>
                    <th>Ques-2iii</th>
                    <th>Ques-2iv</th>
                    <th>Ques-2v</th>
                    <th>Ques3</th>
                    <th>Ques4</th>
                    <th>Remarks</th>
                </tr>";

        while($row5 = mysqli_fetch_array($result5)) {
          echo "<tr>";
          echo "<td>" . $row5['year'] . "</td>";
          echo "<td>" . $row5['sem'] . "</td>";
          echo "<td>" . $row5['date'] . "</td>";
          echo "<td>" . $row5['branch'] . "</td>";
          echo "<td>" . $row5['section'] . "</td>";
          echo "<td>" . $row5['unit'] . "</td>";
          echo "<td>" . $row5['ques1'] . "</td>";
          echo "<td>" . $row5['ques2i'] . "</td>";
          echo "<td>" . $row5['ques2ii'] . "</td>";
          echo "<td>" . $row5['ques2iii'] . "</td>";
          echo "<td>" . $row5['ques2iv'] . "</td>";
          echo "<td>" . $row5['ques2v'] . "</td>";
          echo "<td>" . $row5['ques3'] . "</td>";
          echo "<td>" . $row5['ques4'] . "</td>";
          echo "<td>" . $row5['remarks'] . "</td>";
          echo "</tr>";
        }

        echo "</table>";  
        echo "<br></br>";   
        
      }
      else {
        //header("Location: index.php");
      }
    ?>
  </body>
</html>
