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

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Delete Enrollment</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "registrationform");
          echo form_open("admin/delete", $attributes);?>
                <div class="form-group">
                    <label for="name">Roll Number</label>
                    <input class="form-control" align ="center" id="txt_id" name="txt_id" placeholder="Roll Number" type="int" value="<?php echo set_value('txt_id'); ?>" />
                </div>

                <div class="form-group">
                    <label for="name">Course Number</label>
                    <input class="form-control" id="course_id" name="course_id" placeholder="Course Number" type="text" value="<?php echo set_value('course_id'); ?>" />
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Delete</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>
            <p><p><a class="btn btn-primary btn-lg" href="/new/index.php/home" role="button">Let's go back to homepage</a></p></p>
        </div>
    </div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>