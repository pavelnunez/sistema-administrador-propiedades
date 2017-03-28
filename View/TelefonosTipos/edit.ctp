<div class="telefonosTipos form">
<?php echo $this->Form->create('TelefonosTipo');?>
	<fieldset>
		<legend><?php echo __('Editar Registro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('TelefonosTipo.id')), null, __('Esta seguro de que quiere eliminar el registro # %s?', $this->Form->value('TelefonosTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Telefonos'), array('controller' => 'personas_telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Telefono'), array('controller' => 'personas_telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
