<div class="profesiones view">
<h2><?php  echo __('Profesion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profesion['Profesion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo h($profesion['Profesion']['profesion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Profesion'), array('action' => 'edit', $profesion['Profesion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Profesion'), array('action' => 'delete', $profesion['Profesion']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $profesion['Profesion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Profesiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Profesion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Personas');?></h3>
	<?php if (!empty($profesion['Persona'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Pasaporte'); ?></th>
		<th><?php echo __('Sexo Id'); ?></th>
		<th><?php echo __('Fecha Nacimiento'); ?></th>
		<th><?php echo __('Estados Civil Id'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th><?php echo __('Nacionalidad Id'); ?></th>
		<th><?php echo __('Personas Tipo Id'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($profesion['Persona'] as $persona): ?>
		<tr>
			<td><?php echo $persona['id'];?></td>
			<td><?php echo $persona['clave'];?></td>
			<td><?php echo $persona['nombres'];?></td>
			<td><?php echo $persona['apellidos'];?></td>
			<td><?php echo $persona['cedula'];?></td>
			<td><?php echo $persona['pasaporte'];?></td>
			<td><?php echo $persona['sexo_id'];?></td>
			<td><?php echo $persona['fecha_nacimiento'];?></td>
			<td><?php echo $persona['estados_civil_id'];?></td>
			<td><?php echo $persona['profesion_id'];?></td>
			<td><?php echo $persona['nacionalidad_id'];?></td>
			<td><?php echo $persona['personas_tipo_id'];?></td>
			<td><?php echo $persona['activo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'personas', 'action' => 'view', $persona['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'personas', 'action' => 'edit', $persona['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'personas', 'action' => 'delete', $persona['id']), null, __('Esta seguro que desea borrar el registro # %s?', $persona['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>