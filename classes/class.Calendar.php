<?php

class Calendar {

	function getCalendarValue($month, $year){
	
		$prevmonth = $month-1;
		$nextmonth = $month+1;
		
		if($prevmonth >12){$prevmonth=$prevmonth-12;}
		
		$prev_days_in_month = date('t',mktime(0,0,0,$prevmonth,1,$year));
		$next_days_in_month = date('t',mktime(0,0,0,$nextmonth,1,$year));			

		$calendar = "<table cellpadding=\"0\" cellspacing=\"0\" class=\"calendar\">";
		$headings = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
		$calendar.= "<tr class=\"calendar-row\"><td class=\"calendar-day-head\">".implode("</td><td class=\"calendar-day-head\">",$headings)."</td></tr>";
	   
	    $running_day = date("N",mktime(0,0,0,$month,1,$year))-1; 
		$days_in_month = date("t",mktime(0,0,0,$month,1,$year));
		$days_in_this_week = 1;
		$day_counter = 0;
		$dates_array = array();
        $prev_offset =  $prev_days_in_month - $running_day +1;	
		
		$calendar.= "<tr class=\"calendar-row\">";
	

			for($x = 0; $x < $running_day; $x++){
				$calendar.= "<td class=\"calendar-day-np\">".$prev_offset." </td>";
				$days_in_this_week++;
				$prev_offset++;
			}
	

			for($list_day = 1; $list_day <= $days_in_month; $list_day++){
				$calendar.= "<td class=\"calendar-day\">";
				$calendar.= "<div class=\"day-number\">".$list_day."</div>";
				$calendar.= str_repeat("<p> </p>",2);				
				$calendar.= "</td>";
				if($running_day == 6){
					$calendar.= "</tr>";
					if(($day_counter+1) != $days_in_month):
						$calendar.= "<tr class=\"calendar-row\">";
					endif;
					$running_day = -1;
					$days_in_this_week = 0;
				}
			
				$days_in_this_week++; $running_day++; $day_counter++;
			}
		
		$next_month_offset = 1;
		
			if($running_day>0){
				if($days_in_this_week < 8){
					for($x = 1; $x <= (8 - $days_in_this_week); $x++){
						$calendar.= "<td class=\"calendar-day-np\">".$next_month_offset."</td>";
						$next_month_offset++;
					}
				}
			}

		$calendar.= "</tr>";
		$calendar.= "</table>";
		return $calendar;
	}
	
	function getCurrentMonth($month, $year,  $button){

	 if($button == "Next"){ $i = 1; }
	 else if ($button == "Prev"){ $i = -1; }


				$month = $month+$i;
				if($month>12){$month = $month - 12;}
				else if($month==0){$month = 12;}			
				
				if($month == 1){
				 $year = $year+$i;
				}else{
				$year = $year;
			    }
				$currentset = array($month, $year);
				
			
				return $currentset;	
	
	}	
	
	
	function getAlphaMonth($month){
		switch($month){
			 case "1";
			  $alpha_month = "January";
			 break;
			 case "2";
			  $alpha_month = "Feburary";
			 break;
			  case "3";
			  $alpha_month = "March";
			 break;
			  case "4";
			  $alpha_month = "April";
			 break;
			  case "5";
			  $alpha_month = "May";
			 break;
			  case "6";
			  $alpha_month = "June";
			 break;
			  case "7";
			  $alpha_month = "July";
			 break;
			  case "8";
			  $alpha_month = "August";
			 break;
			  case "9";
			  $alpha_month = "September";
			 break;
			  case "10";
			  $alpha_month = "October";
			 break;
			  case "11";
			  $alpha_month = "November";
			 break;
			  case "12";
			  $alpha_month = "December";
			 break;
			
			}
		return $alpha_month;
	
	}
	
	function getRecentYears(){
	
	  $this_year = date("Y");  
	  $recent_years = array();
	  $recent_years[0] = $this_year -2;
	  $recent_years[1] = $this_year -1;
	  $recent_years[2] = $this_year;
	  $recent_years[3] = $this_year +1;
	  $recent_years[4] = $this_year +2;	
	
	  return $recent_years ;
	
	}

}
?>