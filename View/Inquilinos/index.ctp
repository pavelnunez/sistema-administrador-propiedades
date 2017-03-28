<div class="inquilinos index">
	<h2><?php echo __('Inquilinos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('clave');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($inquilinos as $inquilino): ?>
	<tr>
		<td><?php echo h($inquilino['Inquilino']['id']); ?>&nbsp;</td>
		<td><?php echo h($inquilino['Inquilino']['clave']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inquilino['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $inquilino['Persona']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $inquilino['Inquilino']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $inquilino['Inquilino']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $inquilino['Inquilino']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $inquilino['Inquilino']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Excusas'), array('controller' => 'excusas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Excusa'), array('controller' => 'excusas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Reclamaciones'), array('controller' => 'reclamaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Reclamacion'), array('controller' => 'reclamaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fiadores'), array('controller' => 'fiadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('controller' => 'fiadores', 'action' => 'add')); ?> </li>
	</ul>
</div>
