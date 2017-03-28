<div class="propiedadesTipos index">
	<h2><?php echo __('Tipo de Propiedad');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tipo');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($propiedadesTipos as $propiedadesTipo): ?>
	<tr>
		<td><?php echo h($propiedadesTipo['PropiedadesTipo']['id']); ?>&nbsp;</td>
		<td><?php echo h($propiedadesTipo['PropiedadesTipo']['tipo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $propiedadesTipo['PropiedadesTipo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propiedadesTipo['PropiedadesTipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $propiedadesTipo['PropiedadesTipo']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propiedadesTipo['PropiedadesTipo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('action' => 'add')); ?></li>
	</ul>
</div>
