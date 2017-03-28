<div class="personas index">
	<h2><?php echo __('Personas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('clave');?></th>
			<th><?php echo $this->Paginator->sort('nombres');?></th>
			<th><?php echo $this->Paginator->sort('apellidos');?></th>
			<th><?php echo $this->Paginator->sort('cedula');?></th>
			<th><?php echo $this->Paginator->sort('pasaporte');?></th>
			<th><?php echo $this->Paginator->sort('sexo_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento');?></th>
			<th><?php echo $this->Paginator->sort('ec_id');?></th>
			<th><?php echo $this->Paginator->sort('profesion_id');?></th>
			<th><?php echo $this->Paginator->sort('nacionalidad_id');?></th>
			<th><?php echo $this->Paginator->sort('personas_tipo_id');?></th>
			<th><?php echo $this->Paginator->sort('activo');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['clave']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['pasaporte']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($persona['Sexo']['sexo'], array('controller' => 'sexos', 'action' => 'view', $persona['Sexo']['id'])); ?>
		</td>
		<td><?php echo h($persona['Persona']['fecha_nacimiento']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($persona['Ec']['estado'], array('controller' => 'ecs', 'action' => 'view', $persona['Ec']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($persona['Profesion']['profesion'], array('controller' => 'profesiones', 'action' => 'view', $persona['Profesion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($persona['Nacionalidad']['nacionalidad'], array('controller' => 'nacionalidades', 'action' => 'view', $persona['Nacionalidad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($persona['PersonasTipo']['tipos'], array('controller' => 'personas_tipos', 'action' => 'view', $persona['PersonasTipo']['id'])); ?>
		</td>
		<td><?php echo h($persona['Persona']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $persona['Persona']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $persona['Persona']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $persona['Persona']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina %page% de %pages%, mostrando %current% registros de un total de %count%, comenzando en el registro %start%, terminando en %end%')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previo'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Sexos'), array('controller' => 'sexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sexo'), array('controller' => 'sexos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Estados'), array('controller' => 'ecs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Estado'), array('controller' => 'ecs', 'action' => 'add')); ?> </li>
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
