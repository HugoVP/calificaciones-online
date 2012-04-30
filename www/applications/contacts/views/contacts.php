<p><?php print $message; ?></p>

<p>
	<strong><?php print __(_("Execute")); ?></strong><br />

	<?php $this->execute("Contacts_Controller", "test", array("Uno", "Dos")); ?>
</p>