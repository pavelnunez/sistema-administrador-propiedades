<div class="sectores index">
	<h2><?php echo __('Sectores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('sector');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sectores as $sector): ?>
	<tr>
		<td><?php echo h($sector['Sector']['id']); ?>&nbsp;</td>
		<td><?php echo h($sector['Sector']['sector']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $sector['Sector']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $sector['Sector']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $sector['Sector']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $sector['Sector']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Sector'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Pers. Direccion'), array('controller' => 'personas_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Pers. Direccion'), array('controller' => 'personas_direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Props. Direcciones'), array('controller' => 'propiedades_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Prop. Direccion'), array('controller' => 'propiedades_direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
