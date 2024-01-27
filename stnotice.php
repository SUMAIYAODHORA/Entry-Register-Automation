<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');
    error_reporting(0);
    if (strlen($_SESSION['avmsaid']==0)) {
        header('location:logout.php');
    } else { 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<body>


<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>CHECK NOTICES</title>
</head>
<body>

    <h2>NOTICE BOARD</h2>

    <table>
        <thead>
            <tr>
                <th><b>Serial No</th>
                <th><b>Title</th>
                <th><b>Notice</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Notice regarded 'Hall gate entry last time on Winter'</td>
                <td><a href="dist/img/1.jpg">Notice</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Notice regarded 'Hall gate entry last time on Summer'</td>
                <td><a href="dist/img/2.jpg">Notice</td>
            </tr>
          
        </tbody>
    </table>












  <!--<div class="underline"><b><h1>Notices</div></h1></b><br>
                        <div class="course-table">
                            <div class="outer-container">
                                <div class="inner-container">
                                    <div class="table-header">
                                        <table class="edu-table-responsive">
                                            <thead>
                                            <tr class="heading-table">
                                                <th class="col-1">Serial No</th>
                                                <th class="col-2">Title</th>
                                                <th class="col-3">Download</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="table-body">
                                        <table class="edu-table-responsive table-hover">
                                            <tbody>
                                                
                                             
                                                
                                                <tr class="table-row">
                                                <td class="col-1"><span>01</span></td>
                                                <td class="col-2">Notice regarded 'Hall gate entry last time on Winter</td>
                                                <td class="col-3"><a href="dist/img/1.jpg">Notice</a></td>
                                            </tr> 
                                             <tr class="table-row">
                                                <td class="col-1"><span>02</span></td>
                                                <td class="col-2">Notice regarding 'Hall gate entry last time on Winter'</td>
                                                <td class="col-3"><a href="dist/img/2.jpg">Notice</a>
                                                </td>
                                            </tr> 
                              
                                            
      
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    


                        </body>
</html>

<?php } ?>
