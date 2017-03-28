<div class="personasTelefonos form">
<?php echo $this->Form->create('PersonasTelefono');?>
	<fieldset>
		<legend><?php echo __('Editar Registro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('telefonos_tipo_id');
		echo $this->Form->input('telefono');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PersonasTelefono.id')), null, __('Esta seguro de que quiere eliminar el registro # %s?', $this->Form->value('PersonasTelefono.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Telefonos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'telefonos_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'telefonos_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
