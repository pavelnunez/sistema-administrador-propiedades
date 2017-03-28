<div class="ciudades index">
	<h2><?php echo __('Ciudades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ciudad');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ciudades as $ciudad): ?>
	<tr>
		<td><?php echo h($ciudad['Ciudad']['id']); ?>&nbsp;</td>
		<td><?php echo h($ciudad['Ciudad']['ciudad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $ciudad['Ciudad']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $ciudad['Ciudad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $ciudad['Ciudad']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $ciudad['Ciudad']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Ciudad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('controller' => 'personas_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'personas_direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('controller' => 'propiedades_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'propiedades_direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
