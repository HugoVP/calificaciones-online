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
							<!-- <li class="divider-vertical"></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li> -->