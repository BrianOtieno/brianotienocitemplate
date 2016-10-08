
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php echo $title; ?> </title>
	<?php $buttonclass = $this->session->userdata('buttonClass'); ?>
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
    <link href=<?php echo base_url('dashboard/font-awesome-4.4.0/css/font-awesome.min.css') ?> rel="stylesheet">

    <!-- Metis Menu Plugin JavaScript -->
   <script src="<?php echo base_url('dashboard/js/plugins/metisMenu/metisMenu.min.js') ?>"></script> 
   <link href="<?php echo base_url('dashboard/css/home.css') ?>" rel="stylesheet">

    <!-- Custom Theme JavaScript -->
   <script src="<?php echo base_url('dashboard/js/sb-admin-2.js') ?>"></script>
   <!-- Data table common JS -->
   
  <!-- <script type="text/javascript" src="<?= base_url('/public/js/jquery.js') ?>" ></script> -->
<script type="text/javascript" src="<?= base_url('/public/js/validation/jquery.validationEngine-en.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('/public/js/validation/jquery.validationEngine.js'); ?>"></script>
<link href="<?= base_url('/public/css/validation/validationEngine.jquery.css'); ?>" type="text/css" rel="stylesheet" />

<link rel="stylesheet" href="<?= base_url('/public/css/dataTable/demo_page.css'); ?>" type="text/css" />
<link rel="stylesheet" href="<?= base_url('/public/css/dataTable/demo_table_jui.css'); ?>" type="text/css" />
<link rel="stylesheet" href="<?= base_url('/public/css/dataTable/smoothness/jquery-ui-1.8.4.custom.css'); ?>" type="text/css" />        
<script type="text/javascript" language="javascript" src="<?= base_url('/public/js/dataTable/jquery.dataTables.min.js'); ?>"></script>

<!-- Validation Engine -->
   <link href="<?= base_url('/public/css/validation/validationEngine.jquery.css'); ?>" type="text/css" rel="stylesheet" />   
   <script type="text/javascript" src="<?= base_url('/public/js/validation/jquery.validationEngine-en.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('/public/js/validation/jquery.validationEngine.js'); ?>"></script>

<script type="text/javascript" src="<?= base_url('public/fancybox/jquery.fancybox.js?v=2.1.5'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('public/fancybox/jquery.fancybox.css?v=2.1.5'); ?>" media="screen" />

   
 <style>
    .deleteRecord{
        cursor: pointer;
    }
    
</style>

</head>
<body>
	<div id="page-wrapper">	
		<div class="row">
			<div class="col-md-12 col-md-offset-0">				
				<div class="<?php echo $this->session->userdata('panel'); ?>">
			  		<div class="panel-heading">
			    		<h3 class="panel-title" align="center"> :::: BRIAN OTIENO TEMPLATES : DATATABLES :::</h3>  
			  		</div>
		<div class="panel-body"> 

		<h2><hr /> Table Title Here <hr /> </h2>
        <div id="dynamic">

            <a class="various" data-fancybox-type="iframe" href="#">Add Instance</a>
            <br/>
            <!-- data table starts here -->
            <table cellpadding="0" cellspacing="0" class="displayGrid" id="dealList"  style="width: 100%">
                <thead>
                    <tr>
                        <th> column 1 </th>
                        <th> column 2 </th>
                        <th> column 3 </th>
                        <th width="80px"> edit </th>
                        <th width="80px"> delete </th>
                    </tr>
                </thead>
                <tbody>	
                </tbody>
            </table>
            </div>
            <!-- datatable ends here --> 
			  			
			  			
		</div> <!--End of P-B -->
				
		</div>
			   <?php echo br(5); ?>
							<div class="<?php echo $this->session->userdata('panel'); ?>">
							<div>												
								<h6 align="center"> &copy <?php echo date("Y") . " All Rights Reserved" ;?>
								<?php echo br(2); echo $this->session->userdata('creditline'); ?>	</h6> 
								</div>  
							</div>
			   
		      </div>
		</div>
	</div> 

</body>	
    <script>
        $.fx.speeds._default = 1000;
        var oTable;
     $(document).ready(function() {
            oTable = $('#dealList').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers",
                "bProcessing": true,
                "bServerSide": true,
                "bRedraw": true,
                "sAjaxSource": "",
                "aoColumns": [
                    {"mDataProp": "table_columname"},
                    {"mDataProp": "table_columname"},
                    {"mDataProp": "table_columname"},
                    {"mDataProp": "edit"},
                    {"mDataProp": "delete"}
                ],
                "aoColumnDefs": [
                    {"bSortable": false, "aTargets": [3]},
                    {"bSortable": false, "aTargets": [4]}
                ],
                "aaSorting": [[0, "desc"]]
            });
        });
        function deleteRecord(id) {
                var r = confirm("Do you realy want to delete this record?");
                if (r === true) {
                    $.ajax({
                        type: "POST",
                        url: "",
                        data: {},
                        beforeSend: function() {
                            $('#wait').html("Wait for checking");
                        },
                        success: function(resp) {
                            var obj = jQuery.parseJSON(resp);
                            if (obj.success === 1) {
                                $('#errorMessage').show();
                                $(".msgDisplay").html(obj.msg);                                
                                alert('Deleted Successfully!');
                            } else {
                                $('#errorMessage').show();
                                $(".msgDisplay").html(obj.msg);                                
                                alert('Error:  Try Again!');
                            }
                            oTable.fnDraw();
                        }
                    });
                }
            }
    </script>
    <script>


        function editFancybox() {
            
            $.fancybox({
                maxWidth: 800,
                maxHeight: 600,
                fitToView: true,
                
                width: '70%',
                height: '70%',
                autoSize: true,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none',
                beforeClose: function() {
                    oTable.fnDraw();
                }
            });
        }

        $(function() {
            //pop up box configuration
            $(".various").fancybox({ 
                maxWidth: 800,
                maxHeight: 600,
                fitToView: false,
                width: '70%',
                height: '70%',
                autoSize: false,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none',
                beforeClose: function() {
                    oTable.fnDraw();
                }
            });
        });

    </script>

</html>