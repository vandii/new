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
              <li><a href="#">Link 2</a></li>
              <li><a href="#">Link 3</a></li>              
            </ul>
        </div>
  	
        <!-- main area -->
        <div class="col-xs-12 col-sm-9">
          <h1>Welcome to Admin Panel</h1>
          <p></p>
    
          <p>Vestibulum porttitor massa eget pellentesque eleifend. Suspendisse tempor, nisi eu placerat auctor, 
            est erat tempus neque, pellentesque venenatis eros lorem vel quam. Nulla luctus malesuada porttitor. 
            Fusce risus mi, luctus scelerisque hendrerit feugiat, volutpat gravida nisi. Quisque facilisis risus 
            in lacus sagittis malesuada. Suspendisse non purus diam. Nunc commodo felis sit amet tortor 
            adipiscing varius. Fusce commodo nulla quis fermentum hendrerit. Donec vulputate, tellus sed 
            venenatis sodales, purus nibh ullamcorper quam, sit amet tristique justo velit molestie lorem.</p>
    
          <p>Fusce sollicitudin lacus lacinia mi tincidunt ullamcorper. Aenean velit ipsum, vestibulum nec 
            tincidunt eu, lobortis vitae erat. Nullam ultricies fringilla ultricies. Sed euismod nibh quis 
            tincidunt dapibus. Nulla quam velit, porta sit amet felis eu, auctor fringilla elit. Donec 
            convallis tincidunt nibh, quis pellentesque sapien condimentum a. Phasellus purus dui, rhoncus 
            id suscipit id, ornare et sem. Duis aliquet posuere arcu a ornare. Pellentesque consequat libero 
            id massa accumsan volutpat. Fusce a hendrerit lacus. Nam elementum ac eros eu porttitor. 
            Phasellus enim mi, auctor sit amet luctus a, commodo fermentum arcu. In volutpat scelerisque 
            quam, nec lacinia libero.</p>
    
          <p>Aliquam a lacinia orci, iaculis porttitor neque. Nullam cursus dolor tempus mauris posuere, eu 
            scelerisque sem tincidunt. Praesent blandit sapien at sem pulvinar, vel egestas orci varius. 
            Praesent vitae purus at ante aliquet luctus vel quis nibh. Mauris id nulla vitae est lacinia 
            rhoncus a vel justo. Donec iaculis quis sapien vel molestie. Aliquam sed elementum orci. 
            Vestibulum tristique tempor risus et malesuada. Sed eget ligula sed quam placerat dapibus. 
            Integer accumsan ac massa at tempus.</p>
          
        </div><!-- /.col-xs-12 main -->
    </div><!--/.row-->
  </div><!--/.container-->
</div><!--/.page-container-->
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     </body>
</html>