<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php echo __('Editar Registro'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Usuario.id')), null, __('Esta seguro de que quiere eliminar el registro # %s?', $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Reclamaciones'), array('controller' => 'reclamaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Reclamacion'), array('controller' => 'reclamaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
