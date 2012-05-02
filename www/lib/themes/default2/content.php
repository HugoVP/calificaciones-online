<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
?>

<div class="span9">
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
		<!-- VIEW INFOGRADES -->
		<?php $this->load(isset($view['infogrades']) ? $view['infogrades'] : NULL, TRUE); ?>
		<!-- VIEW INFOGRADES -->
		</tbody>
	</table>
</div>

<?php $this->load('aside'); ?>