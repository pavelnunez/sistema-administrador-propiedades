<div class="personasDirecciones view">
<h2><?php  echo __('Personas Direccion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personasDireccion['PersonasDireccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasDireccion['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $personasDireccion['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direcciones Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasDireccion['DireccionesTipo']['id'], array('controller' => 'direcciones_tipos', 'action' => 'view', $personasDireccion['DireccionesTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($personasDireccion['PersonasDireccion']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calle'); ?></dt>
		<dd>
			<?php echo h($personasDireccion['PersonasDireccion']['calle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($personasDireccion['PersonasDireccion']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasDireccion['Sector']['sector'], array('controller' => 'sectores', 'action' => 'view', $personasDireccion['Sector']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasDireccion['Ciudad']['ciudad'], array('controller' => 'ciudades', 'action' => 'view', $personasDireccion['Ciudad']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Direccion'), array('action' => 'edit', $personasDireccion['PersonasDireccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Direccion'), array('action' => 'delete', $personasDireccion['PersonasDireccion']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $personasDireccion['PersonasDireccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'direcciones_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'direcciones_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Ciudad'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
