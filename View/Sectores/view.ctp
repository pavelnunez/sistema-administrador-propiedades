<div class="sectores view">
<h2><?php  echo __('Sector');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['sector']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Sector'), array('action' => 'edit', $sector['Sector']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Sector'), array('action' => 'delete', $sector['Sector']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $sector['Sector']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Sectores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sector'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dirs. Persona'), array('controller' => 'personas_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Dir. Persona'), array('controller' => 'personas_direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dirs. Propiedad'), array('controller' => 'propiedades_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Dir. Prpiedad'), array('controller' => 'propiedades_direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Personas Direcciones');?></h3>
	<?php if (!empty($sector['PersonasDireccion'])):?>
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
		foreach ($sector['PersonasDireccion'] as $personasDireccion): ?>
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
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'personas_direcciones', 'action' => 'view', $personasDireccion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'personas_direcciones', 'action' => 'edit', $personasDireccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'personas_direcciones', 'action' => 'delete', $personasDireccion['id']), null, __('Esta seguro que desea borrar el registro # %s?', $personasDireccion['id'])); ?>
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
	<?php if (!empty($sector['PropiedadesDireccion'])):?>
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
		foreach ($sector['PropiedadesDireccion'] as $propiedadesDireccion): ?>
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
			<li><?php echo $this->Html->link(__('Nuev@ Propiedades Dirección'), array('controller' => 'propiedades_direcciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
