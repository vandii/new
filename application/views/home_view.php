<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>HOME</title>
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
                <h4><b>Welcome <?php  print_r( $username); ?></b></h4>
            </div>
            </div>
            </div>
            <div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#">Home</a></li>
            <li><a href="home/current"><?php if($admin ==0) echo "Current Courses"; ?></a></li>
            <li><a href="home/grade_sheet"><?php if($admin ==0) echo "Grade Sheet"; ?></a></li>
            <li><a href="home/admin"><?php if($admin ==1) echo "Admin Panel"; ?></a></li>
            <li><a href="home/instructor"><?php if($admin ==2) echo "Instructor Panel"; ?></a></li>
            <li><a href="department">Department details</a></li>
            <li><a href="/search.php">Registration data</a></li>
            <li><a href="/chart.php">Get course statistics</a></li>
<!--             <li><a href="home/instructor"><?php if($admin ==2) echo "Instructor Panel"; ?></a></li> -->
        </ul>
    </div>
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php foreach ($details as $d) {
                     echo "<h4>Your Details</h4><br>";
                     echo "<b>Name</b>  \t :      ";echo $d->fname;echo " ";echo $d->lname;echo "<br>";
                    echo "<b>Email Id</b>  :  "; echo $d->email; echo"<br>";
                    echo"<b>type  :   </b>"; if($d->type==1) echo "admin";
                    elseif ($d->type == 2) {
                                  echo "Instructor";
                              }          
                    else
                        echo "Student";
                    }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>