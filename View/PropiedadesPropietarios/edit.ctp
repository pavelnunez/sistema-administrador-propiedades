<div class="propiedadesPropietarios form">
<?php echo $this->Form->create('PropiedadesPropietario');?>
	<fieldset>
		<legend><?php echo __('Editar Registro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('propiedad_id');
		echo $this->Form->input('propietario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PropiedadesPropietario.id')), null, __('Esta seguro de que quiere eliminar el registro # %s?', $this->Form->value('PropiedadesPropietario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Registros'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Propietarios'), array('controller' => 'propietarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propietario'), array('controller' => 'propietarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
