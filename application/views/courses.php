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
<!-- <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><b>Welcome </b></h4>
            </div>
        </div>
    </div> -->
<div class="container">
          <div class="row">
          <div class="col-lg-12 col-sm-12">
               <table align="center" class="table table-striped table-hover">
                    <thead>
                         <tr>
                              <th>#</th>
                              <th>CourseNo</th>
                              <th>Course Name</th>
                              <th>Credits</th>
                         </tr>
                    </thead>
                    <tbody>
    <?php
  $i=1;
   foreach ($course as $nr) {
  $no = $nr->CourseNo ;
  $name = $nr->coursename ;
  $cr =$nr->credits;
  //$nr->rank =$i; ?>
<!-- echo("<TR><TD>"); -->
   <tr>
   <td><?php echo $i;?></td>
    <!-- echo "   "; -->
   <!--  echo("<TD>"); -->
    <td><?php echo $no;?></td>
    <!-- echo "    "; -->
<!--     <td><?php echo("<TD>");?></td> -->
<td><?php    echo $name ;
?>   </td>
<!--   echo "      "; -->

<!--   echo("<TD>"); -->
<td> <?php  echo $cr;?> </td>
</tr>
<!-- 
  echo "<br>"; --><?php
$i++;
}
?>
                 </tbody>
               </table>
          </div>
          </div>
          </div>
       <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><b>Total Credits This Semester <?php  print_r( $credit); ?></b></h4>
            </div>
            </div>
            </div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>