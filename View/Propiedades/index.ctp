<div class="propiedades index">
	<h2><?php echo __('Propiedades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('clave');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('descripcion_corta');?></th>
			<th><?php echo $this->Paginator->sort('habitaciones');?></th>
			<th><?php echo $this->Paginator->sort('sala');?></th>
			<th><?php echo $this->Paginator->sort('cocina');?></th>
			<th><?php echo $this->Paginator->sort('balcon');?></th>
			<th><?php echo $this->Paginator->sort('propiedades_tipo_id');?></th>
			<th><?php echo $this->Paginator->sort('activo');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($propiedades as $propiedad): ?>
	<tr>
		<td><?php echo h($propiedad['Propiedad']['id']); ?>&nbsp;</td>
		<td><?php echo h($propiedad['Propiedad']['clave']); ?>&nbsp;</td>
		<td><?php echo h($propiedad['Propiedad']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($propiedad['Propiedad']['descripcion_corta']); ?>&nbsp;</td>
		<td><?php echo h($propiedad['Propiedad']['habitaciones']); ?>&nbsp;</td>
		<td><?php echo h($propiedad['Propiedad']['sala']); ?>&nbsp;</td>
		<td><?php echo h($propiedad['Propiedad']['cocina']); ?>&nbsp;</td>
		<td><?php echo h($propiedad['Propiedad']['balcon']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propiedad['PropiedadesTipo']['tipo'], array('controller' => 'propiedades_tipos', 'action' => 'view', $propiedad['PropiedadesTipo']['id'])); ?>
		</td>
		<td><?php echo h($propiedad['Propiedad']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $propiedad['Propiedad']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propiedad['Propiedad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $propiedad['Propiedad']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propiedad['Propiedad']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'propiedades_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'propiedades_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Excusas'), array('controller' => 'excusas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Excusa'), array('controller' => 'excusas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
