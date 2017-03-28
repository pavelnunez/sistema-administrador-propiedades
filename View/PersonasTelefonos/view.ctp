<div class="personasTelefonos view">
<h2><?php  echo __('Personas Telefono');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personasTelefono['PersonasTelefono']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasTelefono['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $personasTelefono['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefonos Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasTelefono['TelefonosTipo']['tipo'], array('controller' => 'telefonos_tipos', 'action' => 'view', $personasTelefono['TelefonosTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($personasTelefono['PersonasTelefono']['telefono']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Telefono'), array('action' => 'edit', $personasTelefono['PersonasTelefono']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Telefono'), array('action' => 'delete', $personasTelefono['PersonasTelefono']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $personasTelefono['PersonasTelefono']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Telefonos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Telefono'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'telefonos_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'telefonos_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
