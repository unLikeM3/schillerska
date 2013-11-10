<?php 
	require 'connect.php';
	header("Access-Control-Allow-Origin: *");

	$offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
    $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

	$query = mysql_query("SELECT * FROM _posts WHERE post_status='publish' AND post_type='post' ORDER BY post_date DESC LIMIT ".$postnumbers." OFFSET ".$offset);
	while ($row = mysql_fetch_assoc($query)) { 
		$title = $row['post_title'];
		$content = $row['post_content'];

		$content = str_ireplace('//i', 'http://i', $content);
		$content = str_ireplace('//www.y', 'http://www.y', $content);


		?>
			<div class="inlagg">
				<div class="wrapper">    
					<div class="title">
						<h2><?php echo $title; ?></h2>
					</div>

					<div class="content">
						<?php echo $content; ?>
					</div>

					<div class="meta">
						<br>Skrivet: <?php echo $row['post_date']; ?>
					</div>
				</div>
			</div>


			
	<?php } ?>