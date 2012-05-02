<?php 
  if(!defined("_access")) {
    die("Error: You don't have permission to access here..."); 
  }
?>

<div class="row">
  <div class="well span4"></div>  
  <form class="form-horizontal span8" action="<?php print get("webURL") . _sh . 'calificaciones/api/login'; ?>" method="post">
    <fieldset>
      <legend>Acceso</legend>
      <div class="control-group">
        <label class="control-label" for="username">Número de control</label>
        <div class="controls">
          <input class="input-xlarge" id="username" name="username" type="text" placeholder="Número de control">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="password">Contraseña</label>
        <div class="controls">
          <input class="input-xlarge" id="password" name="password" type="text" placeholder="Contraseña">
        </div>
      </div>
      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        <a class="btn btn-inverse" href="<?php print get("webURL") . _sh . 'calificaciones/home/'; ?>">Cancelar</a>
      </div>
    </fieldset>
  </form>
</div>
