<div class="propietarios index">
	<h2><?php echo __('Propietarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('clave');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($propietarios as $propietario): ?>
	<tr>
		<td><?php echo h($propietario['Propietario']['id']); ?>&nbsp;</td>
		<td><?php echo h($propietario['Propietario']['clave']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propietario['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $propietario['Persona']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $propietario['Propietario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propietario['Propietario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $propietario['Propietario']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propietario['Propietario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Propietario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
