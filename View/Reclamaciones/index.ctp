<div class="reclamaciones index">
	<h2><?php echo __('Reclamaciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('numero');?></th>
			<th><?php echo $this->Paginator->sort('inquilino_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('detalle');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('hora');?></th>
			<th><?php echo $this->Paginator->sort('resuelto');?></th>
			<th><?php echo $this->Paginator->sort('activo');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($reclamaciones as $reclamacion): ?>
	<tr>
		<td><?php echo h($reclamacion['Reclamacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($reclamacion['Reclamacion']['numero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reclamacion['Inquilino']['id'], array('controller' => 'inquilinos', 'action' => 'view', $reclamacion['Inquilino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reclamacion['Usuario']['nombre_usuario'], array('controller' => 'usuarios', 'action' => 'view', $reclamacion['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($reclamacion['Reclamacion']['detalle']); ?>&nbsp;</td>
		<td><?php echo h($reclamacion['Reclamacion']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($reclamacion['Reclamacion']['hora']); ?>&nbsp;</td>
		<td><?php echo h($reclamacion['Reclamacion']['resuelto']); ?>&nbsp;</td>
		<td><?php echo h($reclamacion['Reclamacion']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $reclamacion['Reclamacion']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $reclamacion['Reclamacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $reclamacion['Reclamacion']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $reclamacion['Reclamacion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Reclamacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
