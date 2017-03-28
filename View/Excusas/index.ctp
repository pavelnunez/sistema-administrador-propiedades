<div class="excusas index">
	<h2><?php echo __('Excusas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('clave');?></th>
			<th><?php echo $this->Paginator->sort('inquilino_id');?></th>
			<th><?php echo $this->Paginator->sort('propiedad_id');?></th>
			<th><?php echo $this->Paginator->sort('excusa');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('hora');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($excusas as $excusa): ?>
	<tr>
		<td><?php echo h($excusa['Excusa']['id']); ?>&nbsp;</td>
		<td><?php echo h($excusa['Excusa']['clave']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($excusa['Inquilino']['clave'], array('controller' => 'inquilinos', 'action' => 'view', $excusa['Inquilino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($excusa['Propiedad']['clave'], array('controller' => 'propiedades', 'action' => 'view', $excusa['Propiedad']['id'])); ?>
		</td>
		<td><?php echo h($excusa['Excusa']['excusa']); ?>&nbsp;</td>
		<td><?php echo h($excusa['Excusa']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($excusa['Excusa']['hora']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $excusa['Excusa']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $excusa['Excusa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $excusa['Excusa']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $excusa['Excusa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Excusa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
