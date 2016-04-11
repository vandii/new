<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register</title>
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     
     <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }
     </style>
</head>
<body>
                <!-- <form action="new/index.php/admin/add_courses"> -->
                 <?php $attributes = array("name" => "courseform");
                echo form_open("admin/add_courses");?>
<!--             <?php echo form_open("admin/add_courses");?> -->
                <div class="form-group">
                    <label for="name">Course Name</label>
                    <input class="form-control" name="cname" placeholder="Course name" type="text" value="<?php echo set_value('cname'); ?>" />
<!--                     <span class="text-danger"><?php echo form_error('fname'); ?></span> -->
                </div>

                <div class="form-group">
                    <label for="name">Course Number</label>
                    <input class="form-control" name="cno" placeholder="Course No" type="text" value="<?php echo set_value('cno'); ?>" />
<!--                     <span class="text-danger"><?php echo form_error('lname'); ?></span>
 -->                </div>
                
                <div class="form-group">
                    <label for="email">Department ID</label>
                    <input class="form-control" name="Did" placeholder="Department ID" type="text" value="<?php echo set_value('Did'); ?>" />
<!--                     <span class="text-danger"><?php echo form_error('email'); ?></span> -->
                </div>

                <div class="form-group">
                    <label for="subject">Credits</label>
                    <input class="form-control" name="credit" placeholder="Credits" type="int" value="<?php echo set_value('credit'); ?>" />
<!--                     <span class="text-danger"><?php echo form_error('password'); ?></span> -->
                </div>

                <div class="form-group">
                    <label for="subject">Instructor ID</label>
                    <input class="form-control" name="Iid" placeholder="Instructor Id" type="int" value="<?php echo set_value('Iid'); ?>" />

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Add course</button>
                </div>

                 <?php echo form_close(); ?> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>