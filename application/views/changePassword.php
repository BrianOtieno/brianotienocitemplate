<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PQ - Demography</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    
    <!-- Jquery UI Javascript-->
    <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js') ?>"></script>
    
    <link href="<?php echo base_url('assets/jquery-ui/jquery-ui.min.css') ?>" rel="stylesheet">
	<!--<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">-->
	
	<!-- Dashboard Specific Links-->
	<!-- Custom CSS -->
    <link href="<?php echo base_url('dashboard/css/sb-admin-2.css') ?>" rel="stylesheet">
    
    <link href="<?php echo base_url('dashboard/css/plugins/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href=<?php echo base_url('dashboard/font-awesome-4.1.0/css/font-awesome.min.css') ?> rel="stylesheet">

    <!-- Metis Menu Plugin JavaScript -->
   <script src="<?php echo base_url('dashboard/js/plugins/metisMenu/metisMenu.min.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
   <script src="<?php echo base_url('dashboard/js/sb-admin-2.js') ?>"></script>
   <?php $buttonclass = $this->session->userdata('buttonClass'); ?>
	

	
</head>
<body> 

	<div id="page-wrapper">	
		<div class="row">
			<?php $role = $this->session->userdata('role');?>
			<div class="col-md-9 col-md-offset-1">
			<?php $username = $this->session->userdata('userName');?>
				<div class="panel panel-primary">
			  		<div class="panel-heading">
			    	<center>	<h3  class="panel-title">CHANGE PASSWORD [<?php echo " $username - $role "  ?>  ] </h3></center>
			  		</div>
			  		<div class="panel-body"> 
			  			<fieldset>
			  				<div style="color: red">
			  			<?php echo validation_errors(); ?>
							</div> 
						<?php echo form_open('main/passchange') ; ?>	 
						<input type="hidden" name="username" value="<?php echo $username;?>">
						<input type="hidden" name="sysPassword" value="<?php foreach ($result as $row){ echo $row->password; break;} ?>">
					<div class="panel-body">
                        <form role="form">
                            <fieldset>
                            	
                                <div class="form-group">
                                    <input class="form-control" placeholder="userName" readonly="readonly" required="required" name="uname" type="text" value="<?php echo $username; ?>" >
                                </div>
				
                                <div class="form-group">
                                    <input class="form-control" placeholder="Old Password" name="old_password" type="text" autocomplete="off" >
                                </div>
				<div class="form-group">
                                    <input class="form-control" placeholder="New Password" name="newPassword" type="password">
                                </div>
				
				<div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="cofirmPassword" type="password">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo form_submit('submit', 'Change Password', "class=' btn btn-lg btn-block $buttonclass' id='submit'"); ?>                              
                                <?php echo form_close(); ?>
                            </fieldset>
                        </form>
                    </div>
		
		
				        
						
				       </div></div>
				</div>
		       </div>
		      </div>
		</div>
	</div>
	
			

</body>

</html>