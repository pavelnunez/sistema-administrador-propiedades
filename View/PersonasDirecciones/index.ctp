<div class="personasDirecciones index">
	<h2><?php echo __('Personas Direcciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('direcciones_tipo_id');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('calle');?></th>
			<th><?php echo $this->Paginator->sort('numero');?></th>
			<th><?php echo $this->Paginator->sort('sector_id');?></th>
			<th><?php echo $this->Paginator->sort('ciudad_id');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($personasDirecciones as $personasDireccion): ?>
	<tr>
		<td><?php echo h($personasDireccion['PersonasDireccion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personasDireccion['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $personasDireccion['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personasDireccion['DireccionesTipo']['id'], array('controller' => 'direcciones_tipos', 'action' => 'view', $personasDireccion['DireccionesTipo']['id'])); ?>
		</td>
		<td><?php echo h($personasDireccion['PersonasDireccion']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($personasDireccion['PersonasDireccion']['calle']); ?>&nbsp;</td>
		<td><?php echo h($personasDireccion['PersonasDireccion']['numero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personasDireccion['Sector']['sector'], array('controller' => 'sectores', 'action' => 'view', $personasDireccion['Sector']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personasDireccion['Ciudad']['ciudad'], array('controller' => 'ciudades', 'action' => 'view', $personasDireccion['Ciudad']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $personasDireccion['PersonasDireccion']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $personasDireccion['PersonasDireccion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $personasDireccion['PersonasDireccion']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $personasDireccion['PersonasDireccion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'direcciones_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'direcciones_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Ciudad'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
