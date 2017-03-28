<div class="telefonosTipos view">
<h2><?php  echo __('Telefonos Tipo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($telefonosTipo['TelefonosTipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($telefonosTipo['TelefonosTipo']['tipo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Tipo'), array('action' => 'edit', $telefonosTipo['TelefonosTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Tipo'), array('action' => 'delete', $telefonosTipo['TelefonosTipo']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $telefonosTipo['TelefonosTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'personas_telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Telefono'), array('controller' => 'personas_telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Personas Telefonos');?></h3>
	<?php if (!empty($telefonosTipo['PersonasTelefono'])):?>
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
		foreach ($telefonosTipo['PersonasTelefono'] as $personasTelefono): ?>
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
