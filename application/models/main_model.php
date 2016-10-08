<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main_Model extends CI_Model {
	function __construct(){  
		parent::__construct();
		$this->load->database(); 
		
		$data = array('logged_in' => TRUE);
		$this->session->set_userdata($data);
	}
	

    function convertResultsetToArray($Q) {
        $data = array();
        //var_dump($Q);
        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }
        //var_dump($data);
        $Q->free_result();
        return $data;
    }
   
    
    function ExampleDataTableModelFunction() {
        
        /*this code is datatable js framework. http://www.datatables.net/
         So, we have follow some data format. 	*/					
        
        
        $aColumns = array();
        
        
        $aResultColumns = array();
        
        
        $sIndexColumn = "";        
        
        $sTable = "";
        
        $sJoin = "";

        
        $sLimit = "";
        if (isset($_REQUEST['iDisplayStart']) && $_REQUEST['iDisplayLength'] != '-1') {
            $sLimit = "LIMIT " . mysql_real_escape_string($_REQUEST['iDisplayStart']) . ", " .
                    mysql_real_escape_string($_REQUEST['iDisplayLength']);
        }

        
        if (isset($_REQUEST['iSortCol_0'])) {
            $sOrder = "ORDER BY  ";
            for ($i = 0; $i < intval($_REQUEST['iSortingCols']); $i++) {
                if ($_REQUEST['bSortable_' . intval($_REQUEST['iSortCol_' . $i])] == "true") {
                    $sOrder .= $aColumns[intval($_REQUEST['iSortCol_' . $i])] . "
				 	" . mysql_real_escape_string($_REQUEST['sSortDir_' . $i]) . ", ";
                }
            }
            $sOrder = substr_replace($sOrder, "", -2);
            if ($sOrder == "ORDER BY") {
                $sOrder = "";
            }
        }
        
        $sWhere = "";
        
        if ($_REQUEST['sSearch'] != "") {
            $sWhere = "WHERE (";
            for ($i = 0; $i < count($aColumns); $i++) {
                $sWhere .= $aColumns[$i] . " LIKE '%" . mysql_real_escape_string($_REQUEST['sSearch']) . "%' OR ";
            }
            $sWhere = substr_replace($sWhere, "", -3);
            $sWhere .= ')';
        }

        
        for ($i = 0; $i < count($aColumns); $i++) {
            if ($_REQUEST['bSearchable_' . $i] == "true" && $_REQUEST['sSearch_' . $i] != '') {
                if ($sWhere == "") {
                    $sWhere = "WHERE ";
                } else {
                    $sWhere .= " AND ";
                }
                $sWhere .= $aColumns[$i] . " LIKE '%" . mysql_real_escape_string($_REQUEST['sSearch_' . $i]) . "%' ";
            }
        }
  
       
       $sQuery = "SELECT SQL_CALC_FOUND_ROWS " . str_replace(" , ", " ", implode(", ", $aResultColumns)) . "
	   FROM   $sTable
           $sJoin
	   $sWhere
	   $sOrder
	   $sLimit
	";
        $rResult = $this->db->query($sQuery, FALSE);
        $rResult = $this->convertResultsetToArray($rResult);


        
        $sQuery = "SELECT FOUND_ROWS()";

        $aResultFilterTotal = $this->db->query($sQuery, FALSE);
        $aResultFilterTotal = $this->convertResultsetToArray($aResultFilterTotal);
        $iFilteredTotal = $aResultFilterTotal[0]["FOUND_ROWS()"];

        
        $sQuery = "SELECT COUNT(" . $sIndexColumn . ")
           FROM   $sTable              
           $sJoin    
	  ";

        $aResultTotal = $this->db->query($sQuery, FALSE);
        $aResultTotal = $this->convertResultsetToArray($aResultTotal);
        $iTotal = $aResultTotal[0]["COUNT(" . $sIndexColumn . ")"];

        $output = array(
            "sEcho" => intval($_REQUEST['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );

        for ($i = 0; $i < count($rResult); $i++) {
            $row = array();
            $row = $rResult[$i]; 
            $row['edit'] = "<a href='".  base_url() ."index.php/controller/function'>edit</a>";
            $row['delete'] = "<a class='deleteRecord' onclick= 'deleteRecord()' >delete</a>";
            $output['aaData'][] = $row;
        }
        echo json_encode($output);
    }




}
?>