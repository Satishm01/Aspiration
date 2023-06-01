<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>My Personal Site</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body>
    <div class="mainText">Personal Aspirations Management System</div>

    
    
    <div class="parts">
      <div class="column-left">
        <h3>
          <a href="index.html">Me</a> <br />
          <br />
          <a href="myfamily.html">My Family</a> <br />
          <br />
          <a href="myeducation.html">My Education</a> <br />
          <br />
          My Aspirations<br />
          <br />
          <a href="newAspiration.html">List of Aspirations</a> <br />
          <br />
          <a href="myhobbies.html">My Hobbies</a><br /><br />
          <a href="logout.html">Logout</a>
        </h3>
      </div>

      <div class="column-center">
        <p id="headname">
          MY Aspirations <button id="editButton">Edit</button>
        </p>

        <p></p>
        <hr />
        
          <!-- <tr>
            <td><h2>#</h2></td>
            <td><h2>Hobbies</h2></td>
            <td><h2>Status</h2></td>
          </tr>
          <tr>
            <td>
              <h2>1</h2>
            </td>
            <td><em>Learn Ethical Hacking</em></td>
            <td><em>Not Done</em></td>
          </tr>
          <tr>
            <td>
              <h2>2</h2>
            </td>
            <td><em>Learn Frontend & Backend</em></td>
            <td><em>WIP</em></td>
          </tr>
          <tr>
            <td>
              <h2>3</h2>
            </td>
            <td><em>Learn Machine Learning</em></td>
            <td><em>Open</em></td>
          </tr> -->
          <tr>
            <td><h2>#</h2></td>
            <td><h2>Hobbies</h2></td>
            <td><h2>Status</h2></td>
          </tr>
          <?php
              $dbServer = "localhost";
              $username = "maruti";
              $dbPassword = "1234";
              $database = "satis";

              $con = mysqli_connect($dbServer, $username, $dbPassword, $database);

              if (!$con) {
                die("Could not connect to the database" . mysqli_connect_error());
              }
              //echo "Step 1 = Connection successful";


             /* 2	Get the aspirations from the table
                  (a) Form an SQL statement
                  (b) Execute that SQL statement */

            $sql = "SELECT * FROM `aspirations`";
            $aspirations = mysqli_query($con, $sql);

            
          while ($asp = mysqli_fetch_array($aspirations,MYSQLI_ASSOC)) {
             ?>
             <table id="details">
             
              <tr>
              <tr>
            <td><h2>#</h2></td>
            <td><h2>sl no</h2></td>
            </tr>
                <td><?php echo $asp["sl_no"];?></td>

                <td><?php echo $asp["Aspiration"];?></td>

                <td><?php echo $asp["Start_Date"];?></td>

                <td><?php echo $asp["Due_Date"];?></td>
                <td><?php echo $asp["Priority"];?></td>
                <td><?php echo $asp["Status"];?></td>
              </tr>
              <?php
            } ;
                ?>

        </table>
      </div>

      <div class="column-right">
        <center>
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTReQHaLN8Te4zjbiqBoixucoWzVt2pTfKRhdolwFbGnSbXjY46UmbtFmJW6BYiiJ5qcus&usqp=CAU"
            alt="myphoto"
          />
        </center>
      </div>
    </div>

    <footer>
      <div class="column-bot-left">
        <br />
        <center>PAMS/v1.0.0</center>
        <br />
      </div>

      <div class="column-bot-right">
        <br />
        <center>20ADPE151/2022-23/Sem5</center>
        <br />
      </div>
    </footer>
  </body>
</html>
