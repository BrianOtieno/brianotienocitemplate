<!DOCTYPE html>
<html lang="en">   
<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('dashboard/css/bootstrap.min.css') ?>" rel="stylesheet">  

    <!-- MetisMenu CSS -->
     <link href="<?php echo base_url('dashboard/css/plugins/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('dashboard/css/sb-admin-2.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo base_url('dashboard/font-awesome-4.1.0/css/font-awesome.min.css') ?> rel="stylesheet">
    <link href=<?php echo base_url('dashboard/font-awesome-4.4.0/css/font-awesome.min.css') ?> rel="stylesheet">
    <?php $navbar = $this->session->userdata('navbar'); ?>
    <![endif]-->
  <style type="text/css">
	.zoom{
		transition: all .2s ease-in-out;
	}
	.zoom:hover{
		transform: scale(1.2);
	}   

</style> 	


</head> 

<body>

    
        <!-- Navigation -->
        <nav class="navbar <?php echo $navbar ?> navbar-static-top" role="navigation" >
        <div id="wrapper">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand header" href="<?php echo site_url('main/home');?>"><i class="fa fa-home"></i> TRAINING SYSTEM </a> 
		    </div>
		  <!--  Collect the nav links, forms, and other content for toggling 
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		   
		      </div>-->
		       <?php $username = $this->session->userdata('username');
		       $location = $this->session->userdata('location');
		       ?>
		      <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<li class="dropdown ">
		          <a  href="#" class="zoom fa fa-comment fa"></a>
		        </li>
		      	<li class="dropdown">		        	
		        <a href="#" class="dropdown-toggle zoom fa fa-users" data-toggle="dropdown"> User Groups<span class="caret"></span></a>  
		          <ul class="dropdown-menu" role="menu">
			    <li><a href="#">Manage Access Levels</a></li>			   
		            <li class="divider"></li> 
		        </ul>  
		        </li>
		        
		      	<li class="dropdown ">
		          <a href="#" class="zoom fa fa-user"> Brian Otieno </a>
		        </li>		        
		      	<li class="dropdown ">
		          <a href="#" class="zoom fa fa-bullseye"> Kisumu</a>
		        </li>		        
		      	
		       <li class="dropdown">		        	
		        <a href="#" class="dropdown-toggle zoom fa fa-gear" data-toggle="dropdown"> Options<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
			    <li><a href="#">Change Password</a></li>
		
		            <li class="divider"></li> 
			       						
						<li>
                            <a href="#">Add User</a> 
                        </li>
           
		        </ul>  
		        </li>
		       
		        <li class="dropdown ">
		        <a href="#" class="fa fa-power-off zoom">Logout </a>
		        </li>
		       
		        
		      </ul>
		    </div><!-- /.navbar-collapse --> 
 			</div><!-- /.container-fluid -->
            <!-- /.navbar-top-links -->
			
            <div class="navbar sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
					
					
                        <li class="sidebar-search">
                        	<?php echo form_open(); ?>
                            <div class="input-group custom-search-form">                            	
                                <input type="text" class="form-control" placeholder="Search..." name="search">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="dbsearch"> 
                                    <i class="fa fa-search"></i>
                                </button>
                                <?php echo form_close(); ?>
                            </span>
                            </div>
                            
                        </li>
    
                        <li>
                            <a href="#"><i class="fa fa-male fa-fw"></i> SECTION 1 <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">				
                                
                              						
								<li>
                                    <a href="#">Link 1</a> 
                                </li>
								<li>
                                    <a href="#">Link 2</a> 
                                </li>
                                							
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
              
            
                
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		<br />
        <!-- Page Content -->
        
        <!-- /#page-wrapper -->

 
    	<!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url('dashboard/js/jquery-1.11.0.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('dashboard/js/bootstrap.min.js') ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
   <script src="<?php echo base_url('dashboard/js/plugins/metisMenu/metisMenu.min.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
   <script src="<?php echo base_url('dashboard/js/sb-admin-2.js') ?>"></script>

</body>

<script type="text/javascript">
$(document).ready(function(){
	
	$('.dropdown-toggle').dropdown();
});
	 
	
</script>


</html>

