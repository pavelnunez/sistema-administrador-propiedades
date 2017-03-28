<div class="usuarios form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php echo __('Agregar Registro'); ?></legend>
	<?php
		echo $this->Form->input('nombre_usuario');
		echo $this->Form->input('contrasena');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Iniciar Sesión'));?>
</div>