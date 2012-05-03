<p><?php print $message; ?></p>

<p>
	<strong><?php print __(_("Execute")); ?></strong><br />

	<?php $this->execute("Admin_Controller", "test", array("Uno", "Dos")); ?>
</p>