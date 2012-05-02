<?php
	if(SESSION('user')) {
?>
		<li class="btn-group">
	  		<button class="btn btn-primary"><?php print ucwords(strtolower(SESSION('name') .  ' ' . SESSION('last1') . ' ' . SESSION('last2'))); ?></button>
	  		<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
	  			<span class="caret"></span>
	  		</button>
	  		<ul class="dropdown-menu">
				<li><a href="<?php print get("webURL") . _sh . 'calificaciones/settings/'; ?>">Configurar cuenta</a></li>
	  			<li class="divider"></li>
	  			<li><a href="<?php print get("webURL") . _sh . 'calificaciones/api/logout'; ?>">Cerrar sesión</a></li>
	  		</ul>
	  	</li>	

<?php
	} else {
?>
		<li><a href="<?php print get("webURL") . _sh . 'calificaciones/login/'; ?>">Iniciar sessión</a></li>
<?php
	}
?>