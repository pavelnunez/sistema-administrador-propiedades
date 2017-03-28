<div class="personasDirecciones form">
<?php echo $this->Form->create('PersonasDireccion');?>
	<fieldset>
		<legend><?php echo __('Editar Registro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('direcciones_tipo_id');
		echo $this->Form->input('direccion');
		echo $this->Form->input('calle');
		echo $this->Form->input('numero');
		echo $this->Form->input('sector_id');
		echo $this->Form->input('ciudad_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PersonasDireccion.id')), null, __('Esta seguro de que quiere eliminar el registro # %s?', $this->Form->value('PersonasDireccion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas Direcciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'direcciones_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'direcciones_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Ciudad'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
