<div class="ciudades view">
<h2><?php  echo __('Ciudad');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ciudad['Ciudad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo h($ciudad['Ciudad']['ciudad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Ciudad'), array('action' => 'edit', $ciudad['Ciudad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Ciudad'), array('action' => 'delete', $ciudad['Ciudad']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $ciudad['Ciudad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Ciudades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Ciudad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direcciones'), array('controller' => 'personas_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'personas_direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direcciones'), array('controller' => 'propiedades_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'propiedades_direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Personas Direcciones');?></h3>
	<?php if (!empty($ciudad['PersonasDireccion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Direcciones Tipo Id'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Calle'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Sector Id'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ciudad['PersonasDireccion'] as $personasDireccion): ?>
		<tr>
			<td><?php echo $personasDireccion['id'];?></td>
			<td><?php echo $personasDireccion['persona_id'];?></td>
			<td><?php echo $personasDireccion['direcciones_tipo_id'];?></td>
			<td><?php echo $personasDireccion['direccion'];?></td>
			<td><?php echo $personasDireccion['calle'];?></td>
			<td><?php echo $personasDireccion['numero'];?></td>
			<td><?php echo $personasDireccion['sector_id'];?></td>
			<td><?php echo $personasDireccion['ciudad_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personas_direcciones', 'action' => 'view', $personasDireccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personas_direcciones', 'action' => 'edit', $personasDireccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personas_direcciones', 'action' => 'delete', $personasDireccion['id']), null, __('Esta seguro que desea borrar el registro # %s?', $personasDireccion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'personas_direcciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Propiedades Direcciones');?></h3>
	<?php if (!empty($ciudad['PropiedadesDireccion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Propiedad Id'); ?></th>
		<th><?php echo __('Direcciones Tipo Id'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Calle'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Sector Id'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ciudad['PropiedadesDireccion'] as $propiedadesDireccion): ?>
		<tr>
			<td><?php echo $propiedadesDireccion['id'];?></td>
			<td><?php echo $propiedadesDireccion['propiedad_id'];?></td>
			<td><?php echo $propiedadesDireccion['direcciones_tipo_id'];?></td>
			<td><?php echo $propiedadesDireccion['direccion'];?></td>
			<td><?php echo $propiedadesDireccion['calle'];?></td>
			<td><?php echo $propiedadesDireccion['numero'];?></td>
			<td><?php echo $propiedadesDireccion['sector_id'];?></td>
			<td><?php echo $propiedadesDireccion['ciudad_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'propiedades_direcciones', 'action' => 'view', $propiedadesDireccion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'propiedades_direcciones', 'action' => 'edit', $propiedadesDireccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'propiedades_direcciones', 'action' => 'delete', $propiedadesDireccion['id']), null, __('Esta seguro que desea borrar el registro # %s?', $propiedadesDireccion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'propiedades_direcciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
