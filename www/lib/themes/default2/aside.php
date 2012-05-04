<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
?>
<aside class="span3">
	<form class="form-vertical" action="<?php print get('webURL') . _sh . 'calificaciones/api/pdf/'; ?>" method="post">
		<fieldset>
  			<legend>Selección por semestre</legend>
  			<div class="control-group">
  				<div class="controls">
  					<!-- VIEW ASIDE -->
	            	<?php $this->load(isset($view['semesters']) ? $view['semesters'] : NULL, TRUE); ?>
	            	<!-- VIEW ASIDE -->
	              	<p class="help-block"><strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.</p>
	            </div>
	            <div class="form-actions">
	            	<!--<button id="createpdf" type="submit" class="btn btn-inverse btn-large" style="width: 100%;" onclick="//window.location = '<?php print get('webURL') . _sh . 'calificaciones/api/pdf/'; ?>'">Generar formato PDF</button>-->
	            	<a class="btn btn-inverse btn-large" target="_black" href="<?php print get('webURL') . _sh . 'calificaciones/api/pdf/'; ?>">Generar formato PDF</a>
	            </div>
	        </div>
	    </fieldset>
	</form>
</aside>