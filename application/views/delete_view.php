<html>
     <head>
          <title>Department Master</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!--link the bootstrap css file-->
          <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
     </head>
     <body>

     <?php 
          $attributes = array("class" => "form-horizontal", "id" => "form", "name" => "form");
          echo form_open("admin/delete", $attributes);?>
                          <div class="form-group">
                    <label for="name">First Name</label>
                    <input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
                    <span class="text-danger"><?php echo form_error('fname'); ?></span>
                </div>

                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
                    <span class="text-danger"><?php echo form_error('lname'); ?></span>
                </div>
          <fieldset>
               <legend>Delete Enrollment</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                <p align="center">    Roll Number    
                    <input class="form-control" align ="center" id="txt_id" name="txt_id" placeholder="Username" type="int" value="<?php echo set_value('txt_id'); ?>" />
                   Course Number
                    <!-- <span class="text-danger"><?php echo form_error('txt_username'); ?></span> -->
                    <input class="form-control" id="course_id" name="course_id" placeholder="Username" type="text" value="<?php echo set_value('course_id'); ?>" />
               
               </div>
               </p >
                    <!-- <span class="text-danger"><?php echo form_error('txt_username'); ?></span> -->
               </div>
               </div>
               </div>
                              <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Delete!" />
                     </div>
               </div>
                    <?php echo form_close(); ?>
          <button type="button" class="btn btn-default navbar-btn"><a href="/new/index.php/home">Back to Home</a></button>

     </body>
</html>