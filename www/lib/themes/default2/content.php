<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
?>

<div class="span9">
	
		<!-- VIEW INFOGRADES -->
		
		<?php $this->load(isset($view['infogrades']) ? $view['infogrades'] : NULL, TRUE); ?>
		
		<!-- VIEW INFOGRADES -->
		
</div>

<?php $this->load('aside'); ?>