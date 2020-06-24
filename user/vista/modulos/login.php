<hgroup>
  <h1>Login</h1>

  <!-- <h3><a href="registro">Registro</a></h3> -->
</hgroup>
<form enctype="form-data" method="post" id="form_login">
  <div class="group">
    <input type="email" required id="user" name="user"><span class="highlight"></span><span class="bar"></span>
    <label>Usuario</label>
  </div>
  <div class="group">
    <input type="password" required id="password" name="password"><span class="highlight"></span><span class="bar"></span>
    <input type="hidden" id="accion" name="accion" value="getUser">
    <label>Contraseña</label>
  </div>
  <button type="submit" class="button buttonBlue">Ingresar
  </button>
</form>
<footer>
</footer>