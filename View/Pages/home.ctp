<h2>La aplicacion, "Inquilinato" ha sido cocinada con CakePHP!</h2>

<?php
App::uses('Debugger', 'Utility');
if (Configure::read() > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<p>
<?php
	if (is_writable(TMP)):
		echo '<span class="notice success">';
			echo __d('cake_dev', 'Tu directorio tmp se puede escribir.');
		echo '</span>';
	else:
		echo '<span class="notice">';
			echo __d('cake_dev', 'Tu directorio tmp NO se puede escribir.');
		echo '</span>';
	endif;
?>
</p>
<p>
<?php
	$settings = Cache::settings();
	if (!empty($settings)):
		echo '<span class="notice success">';
				echo __d('cake_dev', '%s es utilizado para Cache. Para cambiar esta configuracion modifique APP/Config/core.php ', '<em>'. $settings['engine'] . 'Engine</em>');
		echo '</span>';
	else:
		echo '<span class="notice">';
			echo __d('cake_dev', 'Su cache NO esta funcionando. Por favor revise las configuraciones en APP/Config/core.php');
		echo '</span>';
	endif;
?>
</p>
<p>
<?php
	$filePresent = null;
	if (file_exists(APP . 'Config' . DS . 'database.php')):
		echo '<span class="notice success">';
			echo __d('cake_dev', 'Su archivo de configuracion de bases de datos esta presente.');
			$filePresent = true;
		echo '</span>';
	else:
		echo '<span class="notice">';
			echo __d('cake_dev', 'Su archivo de configuracion de bases de datos NO esta presente.');
			echo '<br/>';
			echo __d('cake_dev', 'Renombre APP/Config/database.php.default a APP/Config/database.php');
		echo '</span>';
	endif;
?>
</p>
<?php
if (isset($filePresent)):
	App::uses('ConnectionManager', 'Model');
	try {
		$connected = ConnectionManager::getDataSource('default');
	} catch (Exception $e) {
		$connected = false;
	}
?>
<p>
	<?php
		if ($connected && $connected->isConnected()):
			echo '<span class="notice success">';
	 			echo __d('cake_dev', 'El framework se puede conectar a la base de datos.');
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'El framework NO se puede conectar a la base de datos.');
			echo '</span>';
		endif;
	?>
</p>
<?php endif;?>
<?php
	App::uses('Validation', 'Utility');
	if (!Validation::alphaNumeric('cakephp')) {
		echo '<p><span class="notice">';
		__d('cake_dev', 'PCRE ha sido compilada con soporte Unicode.');
		echo '<br/>';
		__d('cake_dev', 'Recompile PCRE con soporte para Unicode agregando <code>--enable-unicode-properties</code> al momento de configurarlo');
		echo '</span></p>';
	}
?>
<h3><?php echo __d('cake_dev', 'Para editar esta pagina') ?></h3>
<p>
<?php
	echo __d('cake_dev', 'Para cambiar el contenido de esta pagina, edite: %s
		Para cambiar este layout, edite: %s
		Puede agregar algunos estilos CSS en: %s',
		APP . 'View' . DS . 'Pages' . DS . 'home.ctp.<br />',  APP . 'View' . DS . 'Layouts' . DS . 'default.ctp.<br />', APP . 'webroot' . DS . 'css');
?>
</p>
