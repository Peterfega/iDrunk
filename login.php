<?php $base_dir = dirname(__FILE__);
require "$base_dir/lib/head.php";
require "$base_dir/lib/header.php";?> 
<style>
	.container-main{margin-top: 5%;}
</style>
<main class="login-page">
	<div class="container-main">
		<?php if (!empty($_GET['alert'])) { ?>
		<div class="alert alert-danger">
			<?= urldecode($_GET['alert']);?> 
		</div>
		<?php } ?>
		<div class="container">
			<form action="login" method="post">
				<h2 class="coloured">Acceso</h2>
				<input type="email" name="loginmail" id="loginmail" placeholder="E-mail" autofocus="autofocus" value="<?= !empty($_POST['loginmail']) ? $_POST['loginmail'] : '';?>" required />
				<input type="password" name="pass" id="pass" placeholder="Contraseña" required />
				<input type="checkbox" name="remember_me" id="remember_me" value="1" />
				<label for="remember_me">
					Recuérdame <?= file_get_contents("$base_dir/img/icons/check.svg");?> 
				</label>
				<?php if (!empty($errores)) { ?>
				<p class="error-message"><?= implode('<br />', $errores);?></p>
				<?php } ?>
				<button type="submit" class="btn btn-primary">Entrar</button>
			</form>
		</div>
		<div class="forgot-pass"><a href="recuperar-clave" title="Recuperar contraseña">Olvidé la contraseña</a></div>
		<div class="forgot-pass"><a href="registro" title="Registro">Registrarme</a></div>
	</div>
</main>
<?php require "$base_dir/lib/footer.php";
require "$base_dir/lib/foot.php";?> 