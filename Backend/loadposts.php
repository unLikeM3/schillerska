<?php 
	require 'connect.php';
	header("Access-Control-Allow-Origin: *");

	//$offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
    //$postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

	$query2 = mysql_query("SELECT * FROM _posts WHERE post_status='publish' AND post_type='post' ORDER BY post_date DESC"); //LIMIT ".$postnumbers." OFFSET ".$offset);
	
	while ($row2 = mysql_fetch_assoc($query2)) { ?>

		<div class="inlagg">
			<div class="wrapper">    
				<div class="title">
					<h2><?php echo $row2['post_title']; ?></h2>
				</div>

				<div class="content">
					<?php echo $row2['post_content'];?>
				</div>
				<div class="meta">

				</div>
			</div>
		</div>
	<?php } ?>