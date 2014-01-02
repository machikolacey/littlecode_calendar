<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table cellpadding="0" cellspacing="0" class="formtable">
    <tr> 
      <td width="109"><input type="submit" name="submit" value="Prev" class="pure-button pure-button-active">
      </td>
      <td width="131"><div align="right">
          <input type="submit" name="submit" value="Next"  class="pure-button pure-button-active" align="right">
        </div></td>
    </tr>
    <tr> 
      <td colspan="2"> 
        <?php 
		
	$recent_years = $calendar->getRecentYears();
		
	  if(!isset($_POST['finder_month'])){$_POST['finder_month']="";}
	  if(!isset($_POST['finder_year'])){$_POST['finder_year']="";}
	  ?>
        <div align="right"> 
          <select name="finder_month">
            <option value="1" <?php echo (($_POST['finder_month']==1)||($month==1)?"selected":""); ?>>January</option>
            <option value="2" <?php echo (($_POST['finder_month']==2)||($month==2)?"selected":""); ?>>Feburary</option>
            <option value="3" <?php echo (($_POST['finder_month']==3)||($month==3)?"selected":""); ?>>March</option>
            <option value="4" <?php echo (($_POST['finder_month']==4)||($month==4)?"selected":""); ?>>April</option>
            <option value="5" <?php echo (($_POST['finder_month']==5)||($month==5)?"selected":""); ?>>May</option>
            <option value="6" <?php echo (($_POST['finder_month']==6)||($month==6)?"selected":""); ?>>June</option>
            <option value="7" <?php echo (($_POST['finder_month']==7)||($month==7)?"selected":""); ?>>July</option>
            <option value="8" <?php echo (($_POST['finder_month']==8)||($month==8)?"selected":""); ?>>August</option>
            <option value="9" <?php echo (($_POST['finder_month']==9)||($month==9)?"selected":""); ?>>September</option>
            <option value="10" <?php echo (($_POST['finder_month']==10)||($month==10)?"selected":""); ?>>October</option>
            <option value="11" <?php echo (($_POST['finder_month']==11)||($month==11)?"selected":""); ?>>November</option>
            <option value="12" <?php echo (($_POST['finder_month']==12)||($month==12)?"selected":""); ?>>December</option>
          </select>
          <select name="finder_year">
            <option value="<?php echo $recent_years[0]; ?>"  <?php echo ($_POST['finder_year']==$recent_years[0]?"selected":""); ?>><?php echo $recent_years[0]; ?></option>
            <option value="<?php echo $recent_years[1]; ?>" <?php echo ($_POST['finder_year']==$recent_years[1]?"selected":""); ?>><?php echo $recent_years[1]; ?></option>
            <option value="<?php echo $recent_years[2]; ?>" <?php echo ($_POST['finder_year']==$recent_years[2]?"selected":""); 
			echo ($year==$recent_years[2]?"selected":"");  ?>><?php echo $recent_years[2]; ?></option>
            <option value="<?php echo $recent_years[3]; ?>" <?php echo ($_POST['finder_year']==$recent_years[3]?"selected":""); ?>><?php echo $recent_years[3]; ?></option>
            <option value="<?php echo $recent_years[4]; ?>" <?php echo ($_POST['finder_year']==$recent_years[4]?"selected":""); ?>><?php echo $recent_years[4]; ?></option>
          </select>
          <input type="submit" name="submit" value="Submit" class="pure-button pure-button-active">
          <input type="hidden" name="pyear" value="<?php echo $year; ?>">
          <input type="hidden" name="pmonth" value="<?php echo $month; ?>">
        </div></td>
    </tr>
  </table>
 </form>