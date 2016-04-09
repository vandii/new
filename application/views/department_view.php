<html>
     <head>
          <title>Department Master</title>
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
                              <th>Instructor ID</th>
                              <th>Name</th>
                              <th>Instructor Salary</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
                              <tr>
                                   <td><?php echo ($i+1); ?></td>
                                   <td><?php echo $deptlist[0]->InstId; ?></td>
                                   <td><?php echo $deptlist[$i]->Name ?></td>
                                   <td><?php echo $deptlist[$i]->Salary; ?></td>
                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
          </div>
          </div>
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     </body>
</html>