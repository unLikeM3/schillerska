<?php 
	header("Access-Control-Allow-Origin: *");
?>
<div class="ui-grid-a">
	<div class="ui-block-a"><input data-inline="true" type="text" id="pnr" placeholder="YYMMDDXXXX"> </div>
	<div class="ui-block-b">
		<select id="period">
	    	<option value="HT">HT</option>
	    	<option value="VT">VT</option>
		</select>
	</div>
</div>
<a href="#" data-role="button" onclick="fetchSchedule(); return false;">Hämta schema</a>
<div id="schedulecontainer" class="schemabild"></div>