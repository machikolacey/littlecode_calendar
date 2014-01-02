 <?php
	error_reporting(E_ALL);
 ini_set("display_errors", 1);
	
	require_once ("html/header.php");
	
	spl_autoload_register(function($class) {
		require_once "classes/class." . $class . ".php";
	});
	

	
	$calendar = new Calendar();
	
	
	$month = date("m");
	$year  = date("Y");


		if(isset($_POST['submit'])){
			if($_POST['submit']=="Submit"){
			  $month = $_POST['finder_month'];
			  $year = $_POST['finder_year'];
			}else{
			$currentset = $calendar->getCurrentMonth($_POST['pmonth'],$_POST['pyear'], $_POST['submit'] );
			$month = $currentset[0];
			$year = $currentset[1];
			}
		}

	$calendar_value = $calendar->getCalendarValue($month,$year );
	$alpha_month    = $calendar->getAlphaMonth($month);
	
	echo '<h4>'.$alpha_month.' '.$year.'</h4>';
	echo $calendar_value;
	
	
	 require_once ("html/form.php");  
	 require_once ("html/footer.php");  
?>
