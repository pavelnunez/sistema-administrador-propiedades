<div class="reclamaciones form">
<?php echo $this->Form->create('Reclamacion');?>
	<fieldset>
		<legend><?php echo __('Editar Registro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero');
		echo $this->Form->input('inquilino_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('detalle');
		echo $this->Form->input('fecha');
		echo $this->Form->input('hora');
		echo $this->Form->input('resuelto');
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Reclamacion.id')), null, __('Esta seguro de que quiere eliminar el registro # %s?', $this->Form->value('Reclamacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Reclamaciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
