<html>
     <head>
          <title>Department Master</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!--link the bootstrap css file-->
          <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
     </head>
     <body>
<div class="page-container">
  
	<!-- top navbar -->
<!--     <div class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Project Name</a>
    	</div>
       </div>
    </div> -->
      
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!-- sidebar -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="/new/index.php/student">Add Grades</a></li>
              <li><a href="/new/index.php/admin/add_courses">Add Courses</a></li>
              <li><a href="#">Link 3</a></li>              
            </ul>
        </div>
  	
        <!-- main area -->
        <div class="col-xs-12 col-sm-9">
          <h1>Welcome to Admin Panel</h1>
          <p></p>
          
        </div><!-- /.col-xs-12 main -->
    </div><!--/.row-->
  </div><!--/.container-->
</div><!--/.page-container-->
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     </body>
</html>