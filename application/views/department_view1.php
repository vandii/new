<html>
     <head>
          <title>Department Master</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!--link the bootstrap css file-->
          <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
     </head>
     <body>

     <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("Department/index", $attributes);?>
          <fieldset>
               <legend>Search professors by department</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="txt_username" class="control-label">Dept Name</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_id" name="txt_id" placeholder="Username" type="text" value="<?php echo set_value('txt_id'); ?>" />
                    <!-- <span class="text-danger"><?php echo form_error('txt_username'); ?></span> -->
               </div>
               </div>
               </div>
                              <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                     </div>
               </div>
                    <?php echo form_close(); ?>
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

          <button type="button" class="btn btn-default navbar-btn"><a href="/new/index.php/home">Back to Home</a></button>

     </body>
</html>