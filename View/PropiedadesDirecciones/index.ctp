<div class="propiedadesDirecciones index">
	<h2><?php echo __('Propiedades Direcciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('propiedad_id');?></th>
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
	foreach ($propiedadesDirecciones as $propiedadesDireccion): ?>
	<tr>
		<td><?php echo h($propiedadesDireccion['PropiedadesDireccion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propiedadesDireccion['Propiedad']['clave'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesDireccion['Propiedad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propiedadesDireccion['DireccionesTipo']['id'], array('controller' => 'direcciones_tipos', 'action' => 'view', $propiedadesDireccion['DireccionesTipo']['id'])); ?>
		</td>
		<td><?php echo h($propiedadesDireccion['PropiedadesDireccion']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($propiedadesDireccion['PropiedadesDireccion']['calle']); ?>&nbsp;</td>
		<td><?php echo h($propiedadesDireccion['PropiedadesDireccion']['numero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propiedadesDireccion['Sector']['sector'], array('controller' => 'sectores', 'action' => 'view', $propiedadesDireccion['Sector']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propiedadesDireccion['Ciudad']['ciudad'], array('controller' => 'ciudades', 'action' => 'view', $propiedadesDireccion['Ciudad']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $propiedadesDireccion['PropiedadesDireccion']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propiedadesDireccion['PropiedadesDireccion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $propiedadesDireccion['PropiedadesDireccion']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propiedadesDireccion['PropiedadesDireccion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'direcciones_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'direcciones_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Ciudad'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
