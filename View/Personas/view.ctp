<div class="personas view">
<h2><?php  echo __('Persona');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pasaporte'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['pasaporte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($persona['Sexo']['sexo'], array('controller' => 'sexos', 'action' => 'view', $persona['Sexo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ec'); ?></dt>
		<dd>
			<?php echo $this->Html->link($persona['Ec']['estado'], array('controller' => 'ecs', 'action' => 'view', $persona['Ec']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($persona['Profesion']['profesion'], array('controller' => 'profesiones', 'action' => 'view', $persona['Profesion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nacionalidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($persona['Nacionalidad']['nacionalidad'], array('controller' => 'nacionalidades', 'action' => 'view', $persona['Nacionalidad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personas Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($persona['PersonasTipo']['tipos'], array('controller' => 'personas_tipos', 'action' => 'view', $persona['PersonasTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Persona'), array('action' => 'edit', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Persona'), array('action' => 'delete', $persona['Persona']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sexos'), array('controller' => 'sexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sexo'), array('controller' => 'sexos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ecs'), array('controller' => 'ecs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Ec'), array('controller' => 'ecs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesiones'), array('controller' => 'profesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Profesion'), array('controller' => 'profesiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nacionalidades'), array('controller' => 'nacionalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Nacionalidad'), array('controller' => 'nacionalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'personas_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'personas_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fiadores'), array('controller' => 'fiadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('controller' => 'fiadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propietarios'), array('controller' => 'propietarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propietario'), array('controller' => 'propietarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direcciones'), array('controller' => 'personas_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'personas_direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'personas_telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Telefono'), array('controller' => 'personas_telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Fiadores');?></h3>
	<?php if (!empty($persona['Fiador'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($persona['Fiador'] as $fiador): ?>
		<tr>
			<td><?php echo $fiador['id'];?></td>
			<td><?php echo $fiador['persona_id'];?></td>
			<td><?php echo $fiador['clave'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'fiadores', 'action' => 'view', $fiador['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'fiadores', 'action' => 'edit', $fiador['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'fiadores', 'action' => 'delete', $fiador['id']), null, __('Esta seguro que desea borrar el registro # %s?', $fiador['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('controller' => 'fiadores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Inquilinos');?></h3>
	<?php if (!empty($persona['Inquilino'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($persona['Inquilino'] as $inquilino): ?>
		<tr>
			<td><?php echo $inquilino['id'];?></td>
			<td><?php echo $inquilino['clave'];?></td>
			<td><?php echo $inquilino['persona_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'inquilinos', 'action' => 'view', $inquilino['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'inquilinos', 'action' => 'edit', $inquilino['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'inquilinos', 'action' => 'delete', $inquilino['id']), null, __('Esta seguro que desea borrar el registro # %s?', $inquilino['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Propietarios');?></h3>
	<?php if (!empty($persona['Propietario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($persona['Propietario'] as $propietario): ?>
		<tr>
			<td><?php echo $propietario['id'];?></td>
			<td><?php echo $propietario['clave'];?></td>
			<td><?php echo $propietario['persona_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'propietarios', 'action' => 'view', $propietario['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'propietarios', 'action' => 'edit', $propietario['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'propietarios', 'action' => 'delete', $propietario['id']), null, __('Esta seguro que desea borrar el registro # %s?', $propietario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Propietario'), array('controller' => 'propietarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Personas Direcciones');?></h3>
	<?php if (!empty($persona['PersonasDireccion'])):?>
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
		foreach ($persona['PersonasDireccion'] as $personasDireccion): ?>
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
	<h3><?php echo __('Relacionados Personas Telefonos');?></h3>
	<?php if (!empty($persona['PersonasTelefono'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Telefonos Tipo Id'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($persona['PersonasTelefono'] as $personasTelefono): ?>
		<tr>
			<td><?php echo $personasTelefono['id'];?></td>
			<td><?php echo $personasTelefono['persona_id'];?></td>
			<td><?php echo $personasTelefono['telefonos_tipo_id'];?></td>
			<td><?php echo $personasTelefono['telefono'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'personas_telefonos', 'action' => 'view', $personasTelefono['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'personas_telefonos', 'action' => 'edit', $personasTelefono['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'personas_telefonos', 'action' => 'delete', $personasTelefono['id']), null, __('Esta seguro que desea borrar el registro # %s?', $personasTelefono['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Telefono'), array('controller' => 'personas_telefonos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
