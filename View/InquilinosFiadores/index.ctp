<div class="inquilinosFiadores index">
	<h2><?php echo __('Inquilinos Fiadores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('inquilino_id');?></th>
			<th><?php echo $this->Paginator->sort('fiador_id');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($inquilinosFiadores as $inquilinosFiador): ?>
	<tr>
		<td><?php echo h($inquilinosFiador['InquilinosFiador']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inquilinosFiador['Inquilino']['clave'], array('controller' => 'inquilinos', 'action' => 'view', $inquilinosFiador['Inquilino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inquilinosFiador['Fiador']['clave'], array('controller' => 'fiadores', 'action' => 'view', $inquilinosFiador['Fiador']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $inquilinosFiador['InquilinosFiador']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $inquilinosFiador['InquilinosFiador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $inquilinosFiador['InquilinosFiador']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $inquilinosFiador['InquilinosFiador']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Registro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Registros'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fiadores'), array('controller' => 'fiadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('controller' => 'fiadores', 'action' => 'add')); ?> </li>
	</ul>
</div>
