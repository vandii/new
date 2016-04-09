<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
     <head>
     <title><?php echo $title;?></title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!--link the bootstrap css file-->
          <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">

</head>
<body>

<div class="navigation">
<?php 
  // nav bar
  echo anchor('student/index', 'Home');
  echo (' | ');
  echo anchor('student/add', 'Add a New Student');
  echo (' | ');
  echo anchor('student/listing', 'List All Students');
?>
</div>

<h1><?php echo $headline;?></h1>
<!--<?php echo $include ;?>!-->
<?php $this->load->view($include);?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
