<div class="pagos index">
	<h2><?php echo __('Pagos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('clave');?></th>
			<th><?php echo $this->Paginator->sort('inquilino_id');?></th>
			<th><?php echo $this->Paginator->sort('propiedad_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('monto');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pagos as $pago): ?>
	<tr>
		<td><?php echo h($pago['Pago']['id']); ?>&nbsp;</td>
		<td><?php echo h($pago['Pago']['clave']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pago['Inquilino']['clave'], array('controller' => 'inquilinos', 'action' => 'view', $pago['Inquilino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pago['Propiedad']['clave'], array('controller' => 'propiedades', 'action' => 'view', $pago['Propiedad']['id'])); ?>
		</td>
		<td><?php echo h($pago['Pago']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($pago['Pago']['monto']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pago['Pago']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pago['Pago']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $pago['Pago']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $pago['Pago']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Pago'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
