<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php echo __('Agregar Registro'); ?></legend>
	<?php
		echo $this->Form->input('nombre_usuario');
		echo $this->Form->input('contrasena');
		echo $this->Form->input('rol');
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Reclamaciones'), array('controller' => 'reclamaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Reclamacion'), array('controller' => 'reclamaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
