<div class="personas form">
<?php echo $this->Form->create('Persona');?>
	<fieldset>
		<legend><?php echo __('Editar Registro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('clave');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('cedula');
		echo $this->Form->input('pasaporte');
		echo $this->Form->input('sexo_id');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('ec_id');
		echo $this->Form->input('profesion_id');
		echo $this->Form->input('nacionalidad_id');
		echo $this->Form->input('personas_tipo_id');
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Persona.id')), null, __('Esta seguro de que quiere eliminar el registro # %s?', $this->Form->value('Persona.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Sexos'), array('controller' => 'sexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sexo'), array('controller' => 'sexos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Ecs'), array('controller' => 'ecs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Ec'), array('controller' => 'ecs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Profesiones'), array('controller' => 'profesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Profesion'), array('controller' => 'profesiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Nacionalidades'), array('controller' => 'nacionalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Nacionalidad'), array('controller' => 'nacionalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'personas_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'personas_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fiadores'), array('controller' => 'fiadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('controller' => 'fiadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Propietarios'), array('controller' => 'propietarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propietario'), array('controller' => 'propietarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('controller' => 'personas_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'personas_direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Telefonos'), array('controller' => 'personas_telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Telefono'), array('controller' => 'personas_telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
