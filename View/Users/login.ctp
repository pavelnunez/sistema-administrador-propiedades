<div class="usuarios form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Usuer');?>
	<fieldset>
		<legend><?php echo __('Agregar Registro'); ?></legend>
	<?php
		echo $this->Form->input('username', array('label' => 'Usuario'));
		echo $this->Form->input('contrasena', array('label' => 'Contraseña'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Iniciar Sesión'));?>
</div>