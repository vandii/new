<html>
     <head>
          <title>Student Master</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!--link the bootstrap css file-->
          <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
     </head>
     <body>
     <div class="container">
          <div class="row">
          <div class="col-lg-12 col-sm-12">
               <table class="table table-striped table-hover">
                    <thead>
                         <tr>
                              <th>#</th>
                              <th>NAME</th>
                              <th>INSTRUCTOR ID</th>
                              <th>SALARY</th>
                              <th>Dept Name</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php for ($i = 0; $i < count($in); ++$i) { ?>
                              <tr>
                                   <td><?php echo ($i+1); ?></td>
                                   <td><?php echo $in[$i]->Name; ?></td>
                                   <td><?php echo $in[$i]->InstId ;?></td>
                                   <!-- <td><?php echo $in[$i]->DeptId; ?></td>    -->                                
                                   <td><?php  echo $in[$i]->Salary; ?></td>
                                   <td><?php echo $in[$i]->DeptName ;?></td>

                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
          </div>
          </div>

<p><a class="btn btn-primary btn-lg" href="/new/index.php/admin" role="button">Back to Admin Panel</a></p>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>