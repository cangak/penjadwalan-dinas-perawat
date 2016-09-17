<?php 
	$list = days_of_month(); 
	$total_days = count($list);

	$shift = array( 
		'pagi' => '07.00 - 15.00', 
		'sore' => '15.00 - 23.00', 
		'malam' => '23.00 - 07.00' 
	);

	echo '<pre>';

	$results = [];
	for ($i=0; $i < $total_days; $i++) { 
		$last_record = [];
		foreach ($shift as $key => $value) {
			$member = check_enqueue($key, $perawat, $last_record);
			$results[] = $member;
			if( $member ){
				foreach ($member as $k => $v) {
					$last_record[] = $v;
				}
			}
		}
	}

	print_r( $results );
	die();
?>

	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>-</th>
				<?php 
					foreach ($list as $data) {
						echo '<th>' . $data[0];
						echo '<br />';
						echo $data[1];
						echo '</th>';
					}
				?>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i = 0;
				foreach ($shift as $key => $value) {
					echo '<tr>';
					echo '<td>' . $value . '</td>';
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
