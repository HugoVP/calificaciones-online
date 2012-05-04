<?php
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}

?>

<h2>Datos de las calificaciones</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th class="span6">Materia</th>
				<th class="span1">Calificación</th>
				<th class="span1">Situación</th>
				<th class="span1">Créditos</th>
			</tr>
		</thead>
		<tbody>

<?php

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
</tbody>
	</table>



