<div class="propiedadesPropietarios index">
	<h2><?php echo __('Propiedades Propietarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('propiedad_id');?></th>
			<th><?php echo $this->Paginator->sort('propietario_id');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($propiedadesPropietarios as $propiedadesPropietario): ?>
	<tr>
		<td><?php echo h($propiedadesPropietario['PropiedadesPropietario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propiedadesPropietario['Propiedad']['clave'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesPropietario['Propiedad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propiedadesPropietario['Propietario']['id'], array('controller' => 'propietarios', 'action' => 'view', $propiedadesPropietario['Propietario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $propiedadesPropietario['PropiedadesPropietario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $propiedadesPropietario['PropiedadesPropietario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $propiedadesPropietario['PropiedadesPropietario']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propiedadesPropietario['PropiedadesPropietario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Propietarios'), array('controller' => 'propietarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propietario'), array('controller' => 'propietarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
