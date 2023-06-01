<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pams</title>
    <link rel="stylesheet" >
  </head>
  <body style="background-color:aquamarine">

    <table>
      <thead>
        <tr>
          <th colspan="3"><h1>Personal Aspirations management system</h1></th>
        </tr>

      </thead>
      <tbody>
      <tr>
        <td>
          <div class="left">
          <a href="index.html">Me</a> <br />
          <br />  
          <a href="myfamily.html">My Family</a> <br />
          <br />
          <a href="myeducation.html">My Education</a> <br />
          <br />
          <a href="aspiration.html">My Aspirations</a> <br />
          <br />
          <a href="newAspiration.html">List of Aspirations</a> <br />
          <br />
          <a href="myhobbies.html">My Hobbies</a>
          <br /><br /><a href="index.html">Logout</a>

         </div>
        </td>
        <td >
          <h2>Satish's Aspirations</h2>
         <table class="middle">
           <thead>
            <tr>
              <th>Id</th>
              <th>Aspiration</th>
              <th>Start Date</th>
              <th>Due Date</th>
              <th>Priority</th>
              <th>Status</th>
            </tr>
           </thead>
           <tbody>
             <!-- Get aspirations from backend -->

             <!--1	Connect to the database
                 (a) Choose the connection type - chose MySQLi not PDO
                 (b) Get credentials
                 (c) Create connection
                 (d) Validate -->

            <?php
              $dbServer = "localhost";
              $username = "maruti";
              $dbPassword = "1234";
              $database = "satish";

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


             // 3	Display aspirations one by one

             while ($asp = mysqli_fetch_array($aspirations,MYSQLI_ASSOC)) {
             ?>
              <tr>
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


             <!-- Get aspirations from backend -->
          </tbody>
        </table></td>
      </tr>
      <tr>
        <td>PAMS/v1.0.0</td>
        <td>20ADPE151/2022-23/sem  5</td>
      </tr>
      </tbody>
    </table>
  </body>
</html>
