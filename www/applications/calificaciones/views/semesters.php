<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}

	if ($nsemesters) {
		foreach ($nsemesters as $value) {
		//for ($i = 0; $i < 5; $i++) {
?>
			<label class="checkbox">
				<input type="checkbox" name="optionsCheckboxList1" value="option1">
				<span class="label"><?php print $value['matsem'] . 'º Semestre'; ?></span>
			</label>
<?php
		}
	} else {
?>
		<div class="alert alert-error">No se han encontrado datos</div>
<?php
	}
?>