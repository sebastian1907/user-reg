<div class="contenedor-formulario">
	<form class="formulario" id="formRegistro" name="formRegistro" method="post">
		<div class="group">
			<input type="email" name="username" id="username" required><span class="highlight"></span><span class="bar"></span>
			<label for="username">Username</label>
		</div>
		<div class="group">
			<input type="text" name="nombre" id="nombre" required>
			<label for="nombre">Nombre</label>
		</div>
		<div class="group">
			<input type="text" name="apellido" id="apellido" required>
			<label for="apellido">Apellido</label>
		</div>
		<div class="group">
			<input type="password" name="password" id="password" required minlength="8">
			<label for="password">Contraseña</label>
			<input type="hidden" id="accion" name="accion" value="saveUser">
		</div>
		<input type="submit" class="btn-submit" id="btn-submit" value="Enviar">
	</form>
</div>