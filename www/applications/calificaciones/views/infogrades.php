<?php
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}

	if ($grades) {
		foreach ($grades as $grade) {
?>
			<tr>
				<td><?php print $grade['matnom']; ?></td>
				<td><?php print $grade['calval']; ?></td>
				<td><?php print $grade['calsit']; ?></td>
				<td><?php print $grade['matcre']; ?></td>
			</tr>
<?php
		}
	} else {
?>
		<tr>
			<td colspan="4">
				<div class="alert alert-error">No se han encontrado datos</div>
			</td>
		</tr>
<?php			
	}
?>