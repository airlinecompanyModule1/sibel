<?php
   require_once("../DataLayer/DB.php");
	if(isset($_GET['PNR'])) 
	{
		
			$db = new DB();
			$pnr=$_GET['PNR'];
			$sql = "SELECT  FlightId FROM tickets WHERE PNR='".$pnr."'";
			$result = $db->getDataTable($sql);
			$FlightId=-1;
			while($row = $result->fetch_assoc()) 
			{
				$FlightId = $row['FlightId'];
				
			}
			header('Content-type: application/json');
			$arr = array("FlightId" =>$FlightId);
		   echo json_encode($arr);
		
	}

?>		