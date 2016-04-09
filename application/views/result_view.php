<!-- <form action="<?php echo site_url('search/search_keyword');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" />
</form>
 -->
 <!-- <table>
<?php foreach($results as $row){ ?>
    <tr>
        <td><?php echo $row->InstId?></td>
        <td><?php echo $row->Name?></td>
        <td><?php echo $row->DeptId?></td>
        <td><?php echo $row->Salary?></td>
     </tr>
<?php   
}
?>
</table> -->
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
                              <th>Instructor Id</th>
                              <th>Instructor Name</th>
                              <th>Instructor-DepartmentId</th>
                              <th>Instructor Salary</th>
                         </tr>
                    </thead>
                    <tbody>
	<?php foreach($results as $row){ ?>
    	<tr>
        	<td><?php echo $row->InstId?></td>
        	<td><?php echo $row->Name?></td>
        	<td><?php echo $row->DeptId?></td>
        	<td><?php echo $row->Salary?></td>
     	</tr>
<?php   
}
?>
</table> 
<!--                     <?php $i=0 ?>
                         <?php foreach($results as $row){ ?>
                              <tr>
                                   <td><?php echo ($i+1); ?></td>
                                   <td><?php echo $results->InstId; ?></td>
                                   <td><?php echo $results>Name ?></td>
                                   <td><?php echo $results->Salary; ?></td>
                              </tr>
                              <?php $i=$i+1?>
                         <?php } ?>
 -->                    </tbody>
               </table>
          </div>
          </div>
          </div>
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     </body>
</html>