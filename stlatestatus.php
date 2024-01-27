<?php 


require_once('includes/dbconn.php');
$query = "select Address, remark from tblvisitor";
$result = mysqli_query($con,$query);


//require_once 'config/db.php';
//require_once 'config/functions.php';

//$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <title>Late Entry Status</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Late Entry Status</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> Student ID </td>
                  <td> Remarks </td>
                  <!--<td> Last Name </td>
                  <td> Email </td>
                  <td> Edit </td>
                  <td> Delete </td>-->
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['Address']; ?></td>
                  <td><?php echo $row['remark']; ?></td>

                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>